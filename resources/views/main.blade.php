@extends('template')

@section('page-layout')
        <div class="">
            <div class="col1">
                <div class="banner">
                    <ul class="ul">
                    <li><h1 style="font-size:66px; font-weight:500; font-family: 'DM Serif Display', serif;" >Saben</h1></li>
                    <li>
                        <span style="font-size:20px;font-family: 'serif;">Into Eden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span></span>
                        <a style="    text-decoration: none;" href="{{url('shopnow')}}"><button class = "b text" >Shop Now</button></li></a>
                 </ul>
                </div>
            </div>
        </div>
        <div class="mid">
            <p style = "font-size:21px; font-style:italic;" class="text">
                Curators of ethical fashion and New Zealand designed. Hebe is a destination for <br> Located in Masterton's boutique Kuripuni.
            </p>
        </div>

        <video class = "vi" width= "1460" height="515" autoplay loop>
            <source src="../video/pexels-maksim-goncharenok-5642529_Trim.mp4" type="video/mp4">
            <source src="../pexels-maksim-goncharenok-5642529_Trim.mp4" type="video/ogg">
        </video>
@endsection
