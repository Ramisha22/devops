@extends('template')

@section('page-layout')
    </div>
        <div > 
          <div class="bgcolor" style="text-align: center;color:azure; font-size: 46px; font-weight:500; font-family: 'DM Serif Display', serif;"><?php echo $cat; ?></div>
        </div>
        <div class="bgcolor"style="padding: 130px;">
        <div class="bgcolor card">
        
        @for ($i = 0; $i < count($product);)
        <div class="row bgcolor"> 
       
        @if($i< count($product))
        <?php $products = $product[$i]; ?>
              <div  class="bg color col-12 col-md-4">
                  <a href ="/details/{{$products['pid']}}"><img src="{{$products['image']}}" alt=""></a>
                  <h4>{{$products['name']}}</h4>
                  <p class="price">{{$products['price']}}</p>
                  <a href ="/details/{{$products['pid']}}"><p><button>View Product</button></p></a>
              </div>
        @endif
        <?php $i=$i+1; ?>
        @if($i< count($product))
            <?php $products = $product[$i]; ?>
                  <div class="col-12 col-md-4">
                  <a href ="/details/{{$products['pid']}}"><img src="{{$products['image']}}" alt=""></a>
                  <h4>{{$products['name']}}</h4>
                  <p class="price">{{$products['price']}}</p>
                  <a href ="/details/{{$products['pid']}}"><p><button  >View Product</button></p></a>
              </div>
              @endif
              <?php $i=$i+1; ?>
              @if($i< count($product))
              <?php $products = $product[$i]; ?>
              <div class="col-12 col-md-4">
                  <a href ="/details/{{$products['pid']}}"><img src="{{$products['image']}}" alt=""></a>
                  <h4>{{$products['name']}}</h4>
                  <p class="price">{{$products['price']}}</p>
                  <a href ="/details/{{$products['pid']}}"><p><button>View Product</button></p></a>
              </div>
              @endif
        </div >
        <?php $i=$i+1; ?>
                                  
        @endfor
      
      </div>
      </div>
@endsection