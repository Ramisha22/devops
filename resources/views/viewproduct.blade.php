@extends('admintemplate')

@section('page-layout')
</div>
        <div > 
          <div class="bgcolor" style="text-align: center;color:azure; font-size: 46px; font-weight:500; font-family: 'DM Serif Display', serif;">View Products</div>
        </div>
        <div class="bgcolor"style="padding: 130px;">
        <div class="bgcolor card">
        <?php 
          use App\Models\products;
          $product= products::all();?>
        @for ($i = 0; $i < count($product);)
        <div class="row bgcolor"> 
       
        @if($i< count($product))
        <?php $products = $product[$i]; ?>
              <div  class="bg color col-12 col-md-4">
                  <a ><img src="{{$products['image']}}" alt=""></a>
                  <h4>{{$products['name']}}</h4>
                  <p class="price">{{$products['price']}}</p>
              </div>
        @endif
        <?php $i=$i+1; ?>
        @if($i< count($product))
            <?php $products = $product[$i]; ?>
                  <div class="col-12 col-md-4">
                  <a ><img src="{{$products['image']}}" alt=""></a>
                  <h4>{{$products['name']}}</h4>
                  <p class="price">{{$products['price']}}</p>
              </div>
              @endif
              <?php $i=$i+1; ?>
              @if($i< count($product))
              <?php $products = $product[$i]; ?>
              <div class="col-12 col-md-4">
                  <a ><img src="{{$products['image']}}" alt=""></a>
                  <h4>{{$products['name']}}</h4>
                  <p class="price">{{$products['price']}}</p>
              </div>
              @endif
             
        </div >
        <?php $i=$i+1; ?>
                                  
        @endfor
      
      </div>
      </div>
@endsection