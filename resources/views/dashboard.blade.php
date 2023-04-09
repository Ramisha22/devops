@extends('admintemplate')

@section('page-layout')
        <div > 
          <div class="bgcolor" style="text-align: center;color:azure; font-size: 46px; font-weight:500; font-family: 'DM Serif Display', serif;">Wellcome</div>
        </div>

        <div class = bgcolor>
       
            <p style=" color:azure; font-size:35px; font-weight:500; font-family: 'DM Serif Display', serif;">Weekly sales graph:</p>
            
            <img class = "bgcolor"src="/img/sta.png" style="width:30%;    margin-left: 1061px;">

        </div>

<div class="container-fluid bgcolor py-4" >
      <div class="row bgcolor" >
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card bcolor">
            <div>
                <div>
                    <p  style="text-align: center;font-size: 30px; font-weight:500; font-family: 'DM Serif Display', serif;">Weekend</p>
                </div>
                <div class="text-end pt-1">
                <p class="">Total Orders</p>
                <h4 class="">100</h4>
              </div>
            </div>
            <hr>
            <div>
              <p class=""><span class="">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card bcolor">
            <div>
                <div>
                    <p style="text-align: center;font-size: 30px; font-weight:500; font-family: 'DM Serif Display', serif;">person</p>
                </div>
                <div class="text-end pt-1">
                <p >Today's Users</p>
                <h4>2,300</h4>
              </div>
            </div>
            <hr >
            <div>
              <p ><span">+5% </span>than last month</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card bcolor">
            <div>
                <div>
                    <p style="text-align: center;font-size: 30px; font-weight:500; font-family: 'DM Serif Display', serif;">person</p>
                </div>
                <div class="text-end pt-1">
                <p >New Clients</p>
                <h4 >7,300</h4>
              </div>
            </div>
            <hr>
            <div>
              <p ><span >-2% </span>than yesterday </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card bcolor">
            <div>
                <div>
                    <p style="text-align: center;font-size: 30px; font-weight:500; font-family: 'DM Serif Display', serif;">person</p>
                </div>
                <div class="text-end pt-1">
                <p >New Clients</p>
                <h4 >7,300</h4>
              </div>
            </div>
            <hr>
            <div>
              <p ><span >-2% </span>than yesterday </p>
            </div>
          </div>
        </div>
</div>
       </div>

                    
@endsection