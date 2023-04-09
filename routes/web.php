<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\adminController;
use App\Models\productcategory;
use App\Models\customer;
use App\Models\products;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');    
}); 
Route::get('/forgotpassword', function () {
    return view('forgotPassword');    
}); 
Route::get('/main', function () {
    return view('main');    
}); 
 
Route::get('/login', function () {
    return view('login');
});   
Route::get('/adminlogin', function () {
    return view('adminlogin');
});
Route::get('/createaccount', function () {
    return view('createaccount');
}); 
  
Route::get('/addproduct', function () {
    return view('add product');
});   
Route::get('/addcategory', function () {
    return view('addcategory');
});  
Route::get('/faqs', function () {
    return view('faqs');
});    
Route::get('/dashboard', function () {
    return view('dashboard');
});  
Route::get('/removeproduct', function () {
    return view('removeproduct');
}); 
Route::get('/removecustomer', function () {
    return view('removecustomer');
}); 
Route::get('/view', function () {
    return view('view');
});
Route::get('/resetpassword', function () {
    return view('resetpassword');
});
Route::post('/createaccount',[customerController::class, 'signUp']);
Route::post('/login/check/{email}/{password}',[customerController::class, 'signIn']);
Route::post('/adminlogin/check/{email}/{password}',[adminController::class, 'signIn']);
Route::post('/admin/addproduct/{name}/{category}/{img}/{quantity}/{price}',[adminController::class, 'addproduct']);
Route::post('/admin/addcategory/{category}/{description}',[adminController::class, 'addcategory']);

Route::get('/shopnow',[adminController::class, 'viewproduct']); 
Route::get('/products/category/{cat}',function ($cat) {
    $product = products::where('category', $cat)->get();
    return view('shopnow',['product'=>$product,'cat'=>$cat]);
});   
Route::get('/products/category/products/category/{cat}',function ($cat) {
    $product = products::where('category', $cat)->get();
    return view('shopnow',['product'=>$product,'cat'=>$cat]);
}); 
Route::get('/details/{pid}',function ($pid) {
    $product = products::where('pid', $pid)->get();
    return view('product',['product'=>$product]);
}); 

Route::post('/admin/removeproduct/{name}/{category}',[adminController::class, 'removeproduct']);
Route::post('/admin/removecustomer/{fname}/{email}',[adminController::class, 'removecustomer']);
Route::get('/admin/removecustomer/{fname}/{email}',function ($name,$email){
    $Data = customer::where('fname', $name)->get();
        if (count($Data) == 0){
            return redirect('removecustomer')->with('error','customer name does not exist in the database');
        }
        $Data = customer::where('email', $email)->get();
        if (count($Data) == 0){
            return redirect('removecustomer')->with('error','customer email does not exist in the database');
        }   
        $Data = customer::where('email', $email)->delete();
    return view ('view');
});

Route::get('/viewproduct', function () {
    return view('viewproduct');
});
Route::post('/login/forgotpassword',[customerController::class, 'resetPassword']);

Route::post('/checkout', function () {
    return view('checkout');
});  
Route::get('/viewOrders', function () {
    return view('viewOrders');
});   
Route::get('/checkout', function () {
    return view('checkout');
});     
Route::post('/add-to-cart',[adminController::class , 'addtocart']);
Route::get('/cart',[adminController::class , 'index']);
Route::delete('/delete-from-cart',[adminController::class ,'deletefromcart']);

Route::post('/checkout',[adminController::class, 'order']);