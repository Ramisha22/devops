@extends('template')

@section('page-layout')

   <div class=" bgcolor"   style=" padding: 88px;">
        <div class=" tcolor row">
            <div class="col-6 col-xs-12 order-xs-1">
                <img width = 80%; src="{{$product[0]['image']}}" alt=""></a>
            </div>
            <div class=" product_data col-6 col-xs-12 order-xs-2">
                <p>{{$product[0]['category']}}</p>
                <h2> {{$product[0]['name']}} </h2>
                <h6></h6>
                <h6>The model is wearing size: S; Model height: 5.3ft /160cm</h6>
                <h4> {{$product[0]['price']}} </h4>
                <i class="fa fa-circle" style="font-size:24px;color:black"></i>
                <p>Avialable Size:</p>
                <div class="page-btn">
                    <span>S</span>
                    <span>M</span>
                    <span>L</span>
                    <span>XL</span>
                </div> 
                <input type="number" value = "1" class ="qty-input" name="quantity" min="1" max="9" required>
                <a type="submit" class=""  style="color: azure;" >Quantity</a> <br> <br>
                <input  type="hidden" class="product_id" value="{{$product[0]['pid']}}"> <!-- Your Product ID -->
                <button type="submit" class="add-to-cart-btn btn btn-light  btn-block" style="    margin-right: 38px;margin-bottom: 14px;" >ADD TO CART</button>
                <button type="submit" class="add-to-cart-btn btn btn-light  btn-block" style="margin-right: 38px;margin-bottom: 14px;"  >BUY IT </button>    
            </div>
        </div> 
    </div>
    <script>      
    $(document).ready(function () {
        $('.add-to-cart-btn').click(function (e) {
            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var product_id = $(this).closest('.product_data').find('.product_id').val();
            var quantity = $(this).closest('.product_data').find('.qty-input').val();
            alert(quantity);
            $.ajax({
                url: "/add-to-cart",
                method: "POST",
                data: {
                    'quantity': quantity,
                    'product_id': product_id,
                },
            });
        });
    });
    
</script>
@endsection