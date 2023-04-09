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
    <link rel ="stylesheet" href="style.css">

    <style>
        *{
            background-color: #caafa8;
        }
        h4{
          color: azure;
          font-family: 'Montserrat';
          font-size: 22px;
        }
    </style>
</head>
<body>
  <header>
    <div class="top" style="background-color: azure;    padding-top: 2px; margin-bottom: 8px;" >
        
        <p style="background-color: azure;font-family: 'Montserrat';font-size: 11px; text-align: center;margin-top: 9px;letter-spacing: 2px;"class="tcolorp">$6 EXPRESS COURIER. FREE SHIPPING FOR ORDERS $200+. GIFTED HEBE TOTE BAG WITH PURCHASES $250+.</p>

    </div>
    <nav class = "navbar navbar-expand-md bgcolor">
        <div class="container">
            <div classs="di" style="width: 200px; background-color: #caafa8; margin-left: 136px;">
                <h1 class="typewriter" style="font-size: 46px; font-weight:500; font-family: 'DM Serif Display', serif;"> hebe.</h1>
            </div>
            <button class = "navbar-toggler" data-toggle="collapse" data-target = "#navbar">
                <span class = "navbar-toggler-icon"></span>
            </button>
            <div id = "navbar" class = "navbar-collapse collapse" style="margin-left: 45px;">
                <ul class ="navbar-nav">
                    <li  onpointerenter="myFunction()" style="margin-top: 11px; margin-right: 46px;" nav-item class="hover-underline-animation"><a class = "nav-link"href = "about.html"  onpointerenter="myFunction()"><p onpointerenter="myFunction()"class="text tcolor" >SHOP</p></a></li>
                    <li  onpointerenter="myFunction2()"style="margin-top: 11px; margin-right: 46px;" nav-item class="hover-underline-animation"><a class = "nav-link" href = "about.html" onpointerenter="myFunction2()"><p class="text tcolor" >BRANDS</p></a></li>
                    <li  onpointerenter="myFunction3()"style="margin-top: 11px; margin-right: 46px;"nav-item class="hover-underline-animation"><a class = "nav-link" href = "contactUs.html"><p class="text tcolor" >STAFF EDIT</p></a></li>
                    <li  onpointerenter="myFunction3()"style="margin-top: 11px; margin-right: 46px;"nav-item class="hover-underline-animation"><a class = "nav-link" href = "contactUs.html"><p class="text tcolor" >ABOUT US </p></a></li>
                </ul>
            </div>

            <i class="fa-regular fa-user"style="margin-right : 50px;  font-size:20px; color: azure;" alt="" class="im "></i>
            <div style="width: 52px; margin-right: 23px; display: flex;  cursor:pointer"onclick="openNav()"alt="">
              <img src="Screenshot 2022-05-21 150610.png" style="width: 52px;    margin-right: -2px; cursor:pointer"onclick="openNav()"alt="">
              <span class='badge badge-warning' id='lblCartCount' style="display: none;">  </span>
          </div>
        </div>     
        <div id="mySidenav" class="sidenav tbg">
            <a href="javascript:void(0)" class="closebtn tbg" onclick="closeNav()">&times;</a>
            <div class="tbg">
                <img class="tbg" style=" width: 50%;"src="cart.webp">
            </div>
            <div class="tbg">
                <p class="tbg">PRODUCT DETAILS</p>
            </div>
            <div class="tbg">
                <button class = "bgcolor" style="margin-top: 30px;">CHECK OUT</button>
            </div>
        </div>
    </nav> 
    <div id="dropdown" onpointerleave="myFunction1()">
<table class="">
    <tbody>
      <tr>
        <td ><a href="">BY STYLE</a></td>
        <td><a href="">-</a></td>
        <td><a href="">-</a></td>
        <td><a href="">-</a></td>
        <td><a href="">OUR STORE</a></td>
        
      </tr>
      <td ><a href="">Activewear</a></td>
      <td><a href="">Hats + Scarves</a></td>
      <td><a href="">Shorts</a></td>
      <td><a href="">New Arrivals</a></td>
      <td><a href="">Hebe Homegrown</a></td>
      <tr>

       
      </tr>
      <tr>
        <td ><a href="">Bags</a></td>
        <td><a href="">Home + Body</a></td>
        <td><a href="">Skirts</a></td>
        <td><a href="">Under 50$</a></td>
        <td><a href="">Meet The Girls</a></td>
      </tr>
      <tr>
        <td ><a href="">Bags</a></td>
        <td><a href="">Home + Body</a></td>
        <td><a href="">Skirts</a></td>
        <td><a href="">Under 50$</a></td>
        <td><a href="">Meet The Girls</a></td>
      </tr>
      <tr>
        <td ><a href="">Belts</a></td>
        <td><a href="">Jackets</a></td>
        <td><a href="">Sunglasses</a></td>
        <td><a href="">Under 100$</a></td>
        <td><a href="">Store Location</a></td>
      </tr>
      <tr>
        <td ><a href="">Denim</a></td>
        <td><a href="">Jewellery</a></td>
        <td><a href="">Sweatshirts</a></td>
        <td><a href="">Sold Out With Suppliers</a></td>
        <td><a href="">Opening Hours</a></td>
      </tr>
      <tr>
        <td ><a href="">Dresses</a></td>
        <td><a href="">Knitwear</a></td>
        <td><a href="">Tops</a></td>
        <td><a href="">Gift Vouchers</a></td>
        <td><a href="">Careers</a></td>
      </tr>
      <tr>
        <td ><a href="">Fragrance</a></td>
        <td><a href="">Pants</a></td>
        <td><a href="">View All</a></td>
        <td><a href="">Staff Picks</a></td>
        <td><a href="">Contact</a></td>
      </tr>
      <tr>
        <td ><a href="">Hair</a></td>
        <td><a href="">Shirts</a></td>
        <td><a href=""></a></td>
        <td><a href="">Sale</a></td>
        <td><a href=""></a></td>
      </tr>
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
    </header>
    </div>
        <div >
          <img style ="width: 100%;"src="new.jpeg" class="img-fluid" alt="Responsive image">
          <div class="centered" style=" background:transparent; color:azure; font-size: 46px; font-weight:500; font-family: 'DM Serif Display', serif;">New Arrivals</div>
        </div>

        <div class=""style="padding: 130px;">
          <div class="card">
              <!-- row1 -->
              <div class="row">
                      <div class="col-12 col-md-4">
                          <img src="pn1.jpg" alt="">
                          <h4>Chunky Roll Neck Jumper</h4>
                          <p class="price">$19.99</p>
                          <p><button>Add to Cart</button></p>
                      </div>
                
                  <div class="col-12 col-md-4">
                      <img src="pn2.jpg" alt="">
                      <h4>Mimi Jumper</h4>
                      <p class="price">$92.00</p>
                      <p><button>Add to Cart</button></p>
                  </div>
              
                  <div class="col-12 col-md-4">
                      <img src="pn3.jpg" alt="">
                      <h4>Nomad | 100 ML</h4>
                      <p class="price">$19.99</p>
                      <p><button>Add to Cart</button></p>
                  </div>
              </div>
              <div class="row">
                    <div class="col-12 col-md-4">
                          <img src="pn4.jpg" alt="">
                          <h4>Mimi Jumper // Clover</h4>
                          <p class="price">$19.99</p>
                          <p><button>Add to Cart</button></p>
                      </div>
                
                  <div class="col-12 col-md-4">
                      <img src="pn5.jpg" alt="">
                      <h4>Legacy Top // Black/h4>
                      <p class="price">$92.00</p>
                      <p><button>Add to Cart</button></p>
                  </div>
              
                  <div class="col-12 col-md-4">
                      <img src="pn6.jpg" alt="">
                      <h4>Stolen Metal Tee // White/Black</h4>
                      <p class="price">$19.99</p>
                      <p><button>Add to Cart</button></p>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-4">
                      <img src="pn7.jpg" alt="">
                      <h4>So Snug Scarf // Forest</h4>
                      <p class="price">$19.99</p>
                      <p><button>Add to Cart</button></p>
                  </div>
            
              <div class="col-12 col-md-4">
                  <img src="pn8.jpeg" alt="">
                  <h4>Checks Scarf</h4>
                  <p class="price">$92.00</p>
                  <p><button>Add to Cart</button></p>
              </div>
          
              <div class="col-12 col-md-4">
                  <img src="pn9.jpg" alt="">
                  <h4>Devon Blazer // Black</h4>
                  <p class="price">$19.99</p>
                  <p><button>Add to Cart</button></p>
              </div>
          </div>
              
          </div>
        </div>
        <div class="ji">
          <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span><i class="fa-solid fa-circle-right" style="color:azure ;"></i></span>
        </div> 
        </div>
    <div>    
    <div class="container login" style="margin-top: 0px; background-color: #caafa8; ">
        <div class="row">
            <h1 style="font-size: 30px; font-weight:500; font-family: 'DM Serif Display', serif;">Join Us</h1>
            <p class="tcolor">We will let you know when we have new arrivals, events and promo's don't 
                worry we send them infrequently, just a friendly hi now and again!</p>
        </div>
        <div style="display:flex;">
            <div class="form-group" style="width:85% ;    margin-left: 41px;">
                <label class ="label tcolor"for="email">Email address:</label>
                <input type="email" class="form-control"  style ="margin-bottom: 13px;" id="email">
            </div>
            <div style="    margin-top: 88px;">
                <i class="fa fa-envelope-o icon" style=" color : white ; font-size:24px"></i>
            </div>
        </div>
        <div style="    display: flex; justify-content: space-evenly; margin-top: 38px; width: 201px; margin-left: 153px;">
            <div>
                <i class="fa fa-facebook bg" style="font-size:10spx;color:white; align-items: center; justify-content: center; padding: 9px;"></i>
            </div>
            <div>
                <i class="fa fa-twitter bg" style="font-size:10spx;color:white; align-items: center; justify-content: center; padding: 9px;"></i>
            </div>
            <div><i class="fa fa-google-plus bg" style="font-size:10spx;color:white; align-items: center; justify-content: center; padding: 9px;"></i></div>
        </div>
        <div class="container">
            <ul style="list-style-type:none; font-size: 13px; display:flex;justify-content: space-evenly; margin-top: 33px;" class="tcolor ">
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

    <script src="cart.js">
    </script>
</body>
</html>