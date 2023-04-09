<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Models\admin;
use App\Models\products;
use App\Models\customer;
use App\Models\productcategory;

use App\Models\order;
use DB;

class adminController extends Controller
{
    function signIn(Request $request){
        $email = $request -> input('email');
        $password = $request -> input('password');
        $loginData = admin::where('email', $email)->get();
        if (count($loginData) == 0){
            return redirect('adminlogin')->with('error','Email does not exist');
        }

        //checking password
        foreach($loginData as $login){
            if($login -> password === $password){
                return redirect('dashboard');
            }
            else{
                return redirect('adminlogin')->with('error','Invalid password');
            }
        }
    }

    function addproduct(Request $request){
        $name = $request -> input('name');
        $category = $request -> input('category');
        $quantity = $request -> input('quantity');
        $price = $request -> input('price');
        $Data = productcategory::where('category', $category)->get();
        if (count($Data) == 0){
            return redirect('addproduct')->with('error','category does not exist in the database');
        }
        $v1= rand(1111,9999);
        $v2= rand(1111,9999);
        $v3= $v1.$v2;
        $v3= md5($v3);
        $filename = $_FILES['img']['name'];
        $filetemp = $_FILES['img']['tmp_name'];
        $filetype = $_FILES['img']['type'];
        $filepath = "img/uploads/".$v3.$filename;
        move_uploaded_file($filetemp, $filepath);
        $filepath = "/img/uploads/".$v3.$filename;
        $product = new products;
        $product->name = $name;
        $product->image=$filepath;
        $product->category=$category;
        $product->quantity=$quantity;
        $product->price=$price;
        $product->save();
        return redirect('main');

    }

    function addcategory(Request $request){
        $des = $request -> input('description');
        $category = $request -> input('category');
        $pro = new productcategory;
        $pro->category=$category;
        $pro->description=$des;
        $pro->save();
        return redirect('main');
    }
    function viewproduct(){
        $product = products::all();
        $cat="ShopNow";
        return view('shopnow',['product'=>$product,'cat'=>$cat]);
    }
    function removeproduct(Request $request){
        $name = $request -> input('name');
        $category = $request -> input('category');
        $Data = products::where('name', $name)->get();
        if (count($Data) == 0){
            return redirect('removeproduct')->with('error','product does not exist in the database');
        }
        $Data = productcategory::where('category', $category)->get();
        if (count($Data) == 0){
            return redirect('removeproduct')->with('error','category does not exist in the database');
        }   
        $Data = products::where('name', $name)->delete();
        return view ('dashboard');
    }
    function removecustomer(Request $request){
        $name = $request -> input('name');
        $email = $request -> input('email');
        $Data = customer::where('fname', $name)->get();
        if (count($Data) == 0){
            return redirect('removecustomer')->with('error','customer name does not exist in the database');
        }
        $Data = customer::where('email', $email)->get();
        if (count($Data) == 0){
            return redirect('removecustomer')->with('error','customer email does not exist in the database');
        }   
        $Data = customer::where('email', $email)->delete();
        return view ('dashboard');
    }
    
    public function addtocart(Request $request)
    {
        $prod_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $products = products::find($prod_id);
        $prod_name = $products->name;
        $prod_image = $products->image;
        $priceval = $products->price;
        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        }
        else
        {
            $cart_data = array();
        }

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>'"'.$cart_data[$keys]["item_name"].'" Already Added to Cart','status2'=>'2']);
                }
            }
        }
        else
        {
        if($products)
        {
            $item_array = array(
                'item_id' => $prod_id,
                'item_name' => $prod_name,
                'item_quantity' => $quantity,
                'item_price' => $priceval,
                'item_image' => $prod_image
            );
            $cart_data[] = $item_array;

            $item_data = json_encode($cart_data);
            $minutes = 60;
            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
            return response()->json(['status'=>'"'.$prod_name.'" Added to Cart']);
        }
    }

    }
    
    public function index()
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        return view('carts')
            ->with('cart_data',$cart_data)
        ;
    }
    public function deletefromcart(Request $request)
    {
        $prod_id = $request->input('product_id');

        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    unset($cart_data[$keys]);
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>'Item Removed from Cart']);
                }
            }
        }
    }
    public function order(Request $request){
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        $order= new order;
        $name = $request -> input('firstName');
        $email = $request -> input('email');
        $add = $request -> input('address');
        $cnum = $request -> input('cnum');
        $i=0;
        foreach($cart_data as $data)
        {
            $p = products::where('pid',$data['item_id'])->get();;
            $q=$data['item_quantity'];
            $p[0]->quantity = $p[0]->quantity - $q;
            $p[0]->save();
            $i++;
        }
        $order->firstname=$name;
        $order->email=$email;
        $order->address= $add;
        $order->creditcard = $cnum;
        $order->save();
        Cookie::queue(Cookie::forget('shopping_cart'));
        return view('main');
    }

}
