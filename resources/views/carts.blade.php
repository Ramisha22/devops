@extends('template')

@section('page-layout')
        <div class="bgcolor ">
            <div class="row">
                <h1 style="font-size: 59px; font-weight:500; font-family: 'DM Serif Display', serif;">Cart</h1>
            </div>
            @if(isset($cart_data))
                  @if(Cookie::get('shopping_cart'))
                    @php $total="0" @endphp
                <div class="form-group">
                <table class="table" style="margin: 0px; background-color:#efd7c8c7; ">
                    <thead style = "border: 4px solid #c19191;">
                        <tr>
                          <th scope="col">Product Image</th>
                          <th scope="col" style="margin-right: 23px;">Product name</th>
                          <th scope="col" style="margin-right: 23px;">Product Price</th>
                          <th scope="col" >Quantity</th> 
                          <th scope="col" style="margin-right: 23px;">Price wrt to Quantity</th>
                          <th scope="col" >Delete</th> 
                        </tr>
                    </thead>
                      <tbody style="border: 4px solid #c19191;">
                      @foreach ($cart_data as $data)
                        <tr>
                          <td scope="row"><img src ="{{$data['item_image']}}" style="width: 70px; margin-right: 23px;"></td>
                          <td scope="col" style="margin-right: 23px;">{{ $data['item_name'] }}</td>
                          <input type="hidden" class="product_id"value="{{ $data['item_id'] }}">
                          <td scope="col" style="margin-right: 23px;">{{ number_format($data['item_price'], 2) }}</td>
                          <td > <input type="number" id="quantity" value ="{{ $data['item_quantity'] }}"name="quantity" min="1" max="9" required></td>
                          <td class="cart-product-grand-total"><span class="cart-grand-total-price">{{ number_format($data['item_quantity'] * $data['item_price'], 2) }}</span></td>
                          <td style="width: 133px;   padding-top: 0px;"><button type=" btn button" class="delete_cart_data sub btn btn-default"><li class="fa fa-trash-o"></li> Delete</button></td>
                          @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp
                        </tr>
                      @endforeach
                      <tr>
                      <td>Total bill</td>
                      <td><h6 class="cart-grand-price">
                       Rs.
                      <span class="cart-grand-price-viewajax">{{ number_format($total, 2) }}</span>
                     </h6>
                    </td>
                      </tr>
                    </tbody>  
                    </table>
                    <div >
                    <a href ="/checkout"><button type="submit"  class=" sub btn btn-default" style="width:100px ;margin-left: 83pc;">CheckOut</button></a></button>

                    </div>
            </div>
        </div>
        @endif
                @else
                    <div class="row">
                        <div class="col-md-12 mycard py-5 text-center">
                            <div class="mycards">
                                <h4>Your cart is currently empty.</h4>
                                <a href="{{ url('shopnow') }}" class="btn btn-default sub" style="width: 14pc;">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
          @endif
<script>
$(document).ready(function () {

$('.delete_cart_data').click(function (e) {
    e.preventDefault();

    var product_id = $(this).closest(".bgcolor").find('.product_id').val();

    var data = {
        '_token': $('input[name=_token]').val(),
        "product_id": product_id,
    };
    alert("remove from Cart");
    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
    });
    $.ajax({
        url: '/delete-from-cart',
        type: 'DELETE',
        data: data,
        success: function (response) {
              window.location.reload();
        }
    });
});

});
</script>
@endsection
