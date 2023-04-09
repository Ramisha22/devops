<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2f5ad99cfb.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2f5ad99cfb.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <script src="{{URL::asset('scripts/cart1.js')}}" defer></script>
    <link rel ="stylesheet" href="{{URL::asset('css/style.css')}}">
    @yield('script')

</head>
<body>
    <header>
        <div class="top" >
            
            <p style="font-family: 'Montserrat';font-size: 11px; text-align: center;margin-top: 9px;letter-spacing: 2px;"class="tcolorp">$6 EXPRESS COURIER. FREE SHIPPING FOR ORDERS $200+. GIFTED HEBE TOTE BAG WITH PURCHASES $250+.</p>

        </div>
        <nav class = "navbar navbar-expand-md bgcolor">
            <div class="container">
                <div classs="di" style="width: 200px; background-color: #caafa8; margin-left: 136px;">
                    <a href="{{url('main')}}" style="text-decoration:none;"><h1 class="typewriter" style="font-size: 46px; font-weight:500; font-family: 'DM Serif Display', serif;"> hebe.</h1></a>
                </div>
                <button class = "navbar-toggler" data-toggle="collapse" data-target = "#navbar">
                    <span class = "navbar-toggler-icon"></span>
                </button>
                <div id = "navbar" class = "navbar-collapse collapse" style="margin-left: 45px;">
                    <ul class ="navbar-nav">
                        <li  onpointerenter="myFunction()" style="margin-top: 11px; margin-right: 46px;" nav-item class="hover-underline-animation"><a class = "nav-link"  onpointerenter="myFunction()"><p onpointerenter="myFunction()"class="text tcolor" >Products</p></a></li>
                        <li  onpointerenter="myFunction2()"style="margin-top: 11px; margin-right: 46px;" nav-item class="hover-underline-animation"><a class = "nav-link" href = "about.html" onpointerenter="myFunction2()"><p class="text tcolor" >Customer</p></a></li>
                        <li  onpointerenter="myFunction3()"style="margin-top: 11px; margin-right: 46px;"nav-item class="hover-underline-animation"><a class = "nav-link" href = "{{url('addcategory')}}"><p class="text tcolor" >Add Category</p></a></li>
                        <li  onpointerenter="myFunction5()"style="margin-top: 11px; margin-right: 46px;"nav-item class="hover-underline-animation"><a class = "nav-link" href = "{{url('')}}" onpointerenter="myFunction5()"><p class="text tcolor" >Orders</p></a></li>
                    </ul>
                </div>

                <a href = "{{url('adminlogin')}}" ><i class="fa fa-sign-out" style="margin-right : 50px;  font-size:20px; cursor:pointer;color: azure;" class="im "></i></a>
            
              </div>
            </div>
        </nav> 
    <div id="dropdown" onpointerleave="myFunction1()" style="height:100px;">
    <table class="" style="margin-left: 234px;">
        <tbody>
          <tr>
            <td ><a  href="{{url('addproduct')}}">Add product</a></td>
            <td ><a href="{{url('removeproduct')}}">Remove Product </a></td>
            
            <td ><a href = "{{url('/viewproduct')}}">view Product </a></td>
          </tr>
        </tbody>
      </table>
</div>
        </div>
        <div id="dropdown2" onpointerleave="myFunction3()" style=" height:100px;">
            <table class="" style="margin-left: 375px;">
                <tbody>
                <tr>
                <td ><a  href="{{url('view')}}">View Customers</a></td>
                <td ><a  href="{{url('removecustomer')}}"> delete Customer</a></td>
                </tr>                   
                </tbody>
              </table>
        </div>
        <div id="dropdown3" onpointerleave="myFunction4()" style=" height:100px; display:none;">
            <table class="" style="margin-left: 375px;">
                <tbody>
                <tr>
                <td ><a  href="{{url('viewOrders')}}">View Orders</a></td>
                <td ><a  href="">delete Order</a></td>
                </tr>                   
                </tbody>
              </table>
        </div>
    </header>


    @yield('page-layout')
    <!-- FOOTER  -->
    <div style="background-color: #caafa8;">
        <div class="container login" style = "margin-top:0px">
      <div class="row">
        <h1 style="font-size: 30px; font-weight:500; font-family: 'DM Serif Display', serif;">Join Us</h1>
        <p class="tcolor">We will let you know when we have new arrivals, events and promo's don't
          worry we send them infrequently, just a friendly hi now and again!</p>
      </div>
      <div style="display:flex;">
        <div class="form-group" style="width:85% ;    margin-left: 41px;">
          <label class="label tcolor" for="email">Email address:</label>
          <input type="email" class="form-control" style="margin-bottom: 13px;" id="eml">
          <small id="emailvalid" class="form-text text-muted invalid-feedback">
              Your email must be a valid email
          </small>
        </div>
        <div style="    margin-top: 88px;">
          <i class="fa fa-envelope-o icon" style=" color : white ; font-size:24px"></i>
        </div>
      </div>
      <div
        style="display: flex; justify-content: space-evenly;width: 201px; margin-left: 153px;">
        <div>
          <i class="fa fa-facebook bg"
            style="font-size:10spx;color:white; align-items: center; justify-content: center; padding: 9px;"></i>
        </div>
        <div>
          <i class="fa fa-twitter bg"
            style="font-size:10spx;color:white; align-items: center; justify-content: center; padding: 9px;"></i>
        </div>
        <div><i class="fa fa-google-plus bg"
            style="font-size:10spx;color:white; align-items: center; justify-content: center; padding: 9px;"></i></div>
      </div>
      <div class="container">
        <ul style="list-style-type:none; font-size: 13px; display:flex;justify-content: space-evenly; "
          class="tcolor ">
          <li>FAQ</li>
          <li>Shipping</li>
          <li>Returns</li>
          <li>Terms of Use</li>
        </ul>
        <p class="text tcolor">Privacy Policy<br>
          © 2022 Hebe Designer Boutique</p>
      </div>
    </div>
  </div>

</body>
</html>