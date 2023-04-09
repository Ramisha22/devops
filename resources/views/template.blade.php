<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2f5ad99cfb.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2f5ad99cfb.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <script src="{{URL::asset('scripts/cart.js')}}" defer></script>
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
                        <li  onpointerenter="myFunction()" style="margin-top: 11px; margin-right: 46px;" nav-item class="hover-underline-animation"><a class = "nav-link"href = "{{url('shopnow')}}"  onpointerenter="myFunction()"><p onpointerenter="myFunction()"class="text tcolor" >SHOP</p></a></li>
                        <li  onpointerenter="myFunction2()"style="margin-top: 11px; margin-right: 46px;" nav-item class="hover-underline-animation"><a class = "nav-link" href = "about.html" onpointerenter="myFunction2()"><p class="text tcolor" >BRANDS</p></a></li>
                        <li  onpointerenter="myFunction3()"style="margin-top: 11px; margin-right: 46px;"nav-item class="hover-underline-animation"><a class = "nav-link" href = "{{url('adminlogin')}}"><p class="text tcolor" >STAFF EDIT</p></a></li>
                        <li  onpointerenter="myFunction3()"style="margin-top: 11px; margin-right: 46px;"nav-item class="hover-underline-animation"><a class = "nav-link" href = "{{url('faqs')}}"><p class="text tcolor" >FAQs</p></a></li>
                    </ul>
                </div>

                <a href = "{{url('login')}}" ><i class="fa-regular fa-user"style="margin-right : 50px;  font-size:20px; cursor:pointer;color: azure;" class="im "></i></a>
                <div style="width: 52px; margin-right: 23px; display: flex;  cursor:pointer">
                  <a href= "{{url('cart')}}" ><img src="/img/cart.png" style="width: 52px;    margin-right: -2px; cursor:pointer"></a>
              </div>
            </div>
        </nav> 
    <div id="dropdown" onpointerleave="myFunction1()">
    <table class="">
        <tbody>
          <?php 
          use App\Models\productcategory;
          $data = productcategory::all();?>
          @foreach($data as $dat)
          <tr>
            <td ><a  href="products/category/{{$dat['category']}}">{{$dat['category']}}</a></td>
            <td ><a href="products/category/{{$dat['category']}}">{{$dat['category']}}</a></td>
            <td ><a href="products/category/{{$dat['category']}}">{{$dat['category']}}</a></td>
            <td ><a href="products/category/{{$dat['category']}}">{{$dat['category']}}</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
        </div>
        <div id="dropdown2" onpointerleave="myFunction3()">
            <table class="">
                <tbody>
                    <tr>
                    <td ><a href="">Betty Basics</a></td>
                    <td><a href="">Privé Revaux Eyewear</a></td>
                    <td><a href="">Karen Walker Fragrances</a></td>
                    <td><a href="">Rue Stiic</a></td>
                    </tr>
                    <tr>
                      <td ><a href="">Commoners</a></td>
                      <td><a href="">Ricochet</a></td>
                      <td><a href="">SOPHIE Accessories</a></td>
                      <td><a href="">Good & Co Scarves</a></td>
                    </tr>
                    <tr>
                      <td ><a href="">COOP</a></td>
                      <td><a href="">Rosefield Watches</a></td>
                      <td><a href="">Saben</a></td>
                      <td><a href="">Carly Paiker Jewellery</a></td>
                    </tr>
                    <tr>
                      <td ><a href="">Fate + Beckers</a></td>
                      <td><a href="">Tuesday</a></td>
                      <td><a href="">Twenty Seven Names</a></td>
                      <td><a href="">AGE Eyewear</a></td>
                    </tr>
                    <tr>
                      <td ><a href="">George & Edi Fragrances</a></td>
                      <td><a href="">Jewellery</a></td>
                      <td><a href="">Blak</a></td>
                      <td><a href="">Stolen Girlfriends Club</a></td>
                    </tr>
                    <tr>
                      <td ><a href="">Ketz-Ke</a></td>
                      <td><a href="">Koko Body</a></td>
                      <td><a href="">Assembly Label</a></td>
                      <td><a href="">ONETEASPOON</a></td>
                    </tr>
                    <tr>
                      <td ><a href="">My Boyfriends Back</a></td>
                      <td><a href="">Marle</a></td>
                      <td><a href="">Rejuvenated Collagen</a></td>
                      <td><a href="">Thing Thing</a></td>
                    </tr>
                    <tr>
                      <td ><a href="">NYNE</a></td>
                      <td><a href="">Remain</a></td>
                      <td><a href="">Clique Fitness</a></td>
                      <td><a href="">Millie Askew</a></td>
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