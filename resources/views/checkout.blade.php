@extends('template')

@section('script')
<style>
        input[type=email],
        input[type=text],
        input[type=file],
        input[type=password] {
            caret-color:black;
            background: white;
            border: 1px solid black;
            color: black;
            outline:1px;
            display: block;
            cursor: pointer;
            background-color: white;
        }

        .faq {
            color: white;
            text-decoration: none;
        }

        .hebe {
            color: white;
            text-decoration: none;

        }
        .map{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        iframe{
            width: 80%;
            height: 500px;
        }
    </style>
@endsection
@section('page-layout')
        <div class="bgcolor" style="margin-left: 38px;">
            <div class="row" style="background-color:white ;">
                <div class="col-md-4 order-md-2 mb-4">
                <form action="/checkout" method="POST">
                @csrf
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Products name</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted"></span>
                        </li>
                  <?php $cookie_data = stripslashes(Cookie::get('shopping_cart')); $cart_data = json_decode($cookie_data, true);?>
                    @foreach ($cart_data as $data)
                        <tr>
                          <td scope="row"><img src ="{{$data['item_image']}}" style="width: 70px; margin-right: 23px;"></td>
                          <td scope="col" style="margin-right: 23px;">{{ $data['item_name'] }}</td>
                          <td scope="col" style="margin-right: 23px;">{{ $data['item_quantity'] }}</td>
                          <input type="hidden" class="product_id"value="{{ $data['item_id'] }}">
                        </tr>
                    @endforeach
                        
                    </ul>
                 </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Billing address</h4>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label >First name</label>
                                <input name="firstName"  type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>


                        <div class="mb-3">
                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                            <input typp="email" class="form-control" name="email" placeholder="you@example.com" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
                          <div class="col-md-3 mb-3">
                                <label for="zip">Zip</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <h4 class="mb-3">Payment</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"
                                    checked required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                    required>
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" name="cnum" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
                            <button type="submit" class=" btn-default">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>

        </div>
        <div class="map">
            <h1 style="color: black;">Our Store Location</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16289436.303573754!2d-83.40519325149312!3d4.609564566046896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x288815ba16f8f96d%3A0x1c048b8099a21254!2sHebe%20Boutique%20Co!5e0!3m2!1sen!2s!4v1655915933420!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

@endsection