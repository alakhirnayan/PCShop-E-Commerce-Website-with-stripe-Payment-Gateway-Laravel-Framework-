@extends('layouts.includes.main')
@section('title','HomePage')
@section('content')
 
 <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
              <div class="header_wrap"></div>
        </div>
        <div class="col-md-8">
            <div class="header_wrap">
               <div class="info">
                 <div class="header_info">
                    <div class="descrip">
                        <a href="#"><h1 style=" font-weight: bold;     margin-top: 0;">WELCOME</h1></a> 
                        <p>
                           This webside will make shopping easier for those persons who wants to buy or manage 
                           a comuter in low budget. This website has made match products and will provide exchange opportunity
                           in next. You can make a complete system from here if you do not have experience about 
                           computer components yet. We are working to develop your shopping experience better.
                           </p><br>
                            <div><p>
                          
                            </p></div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
        <section class="section">
                <div class="container">
                    <div class="row text-center">
                        <p class="h1">Happy Shopping</p>
                        <p class="lead">Online shopping makes everything so much easier.</p>
                    </div>
                </div>
        </section>
 
        <div class="container">
         <div class="row">
         @foreach($products as $product)
           <div class="col-md-3">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-body">
                    <div class="thumnail-image">
                     <img src="{{asset('/images/'.$product->image)}}" alt="" />
                    </div>
                    <div class="info-product">
                    <a href="{{route('proinfo',$product->id)}}" class="btn btn-primary pull-right btn-sm">Product Info</a></div>
                    <div class="title-product"> <h4>{{$product->title}}</h4></div>
                    <div class="size"> 
                    <span class="fa fa-star star_color"></span>
                    <span class="fa fa-star star_color"></span>
                    <span class="fa fa-star star_color"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="fa fa-star-o"></span>
                    </div>
                    <div class="price">  <p>{{$product->price}}</p></div>
                    <div class="addToCart">
                     <i class="fa fa-heart-o"></i>
                     <i class="fa fa-share"></i>
                     <a href="{{route('addToCart',$product->id)}}" class="btn btn-primary pull-right btn-sm">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
 
 
 @endforeach
<div class="text-center">
        {!!$products->links();!!}

      </div>

</div><br>
        <div class="container-fluid">
          <div class="jumbotron jumbotron-bg" style="background-color: #099; color: #fff;">
            <h1>Hot!</h1> 
            <button class="btn btn-success">Promo</button>
          </div>
         </div> 

@endsection

 