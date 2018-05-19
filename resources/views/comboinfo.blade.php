@extends('layouts.includes.main')
@section('title','Products')
@section('content')
 
 <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
              <div class=""></div>
        </div>
        
        </div>
    </div>
 </div>
 <div class="container">
   <ol class="breadcrumb">
   <li class="breadcrumb-item"><a href="">Home</a></li>
   <li class="breadcrumb-item"><a href="">Products</a></li>
     
   </ol>

 </div>
     
    
    <div class="container">
    <div class="card">
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-md-6">
            
            <div class="col-xs-6 featured-block">
   <div class="box location-map">
     <img src="{{asset('/images/'.$products->image)}}" class="img-responsive"></a>
  </div>
</div>
              
            
            <ul class="preview-thumbnail nav nav-tabs"></ul>
            
          </div>
          <div class="details col-md-6">
            <h3 class="product-title">Product Title: {{$products->title}}</h3>
            <div class="rating">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              
            </div>

            <p class="product-description">Description: {{$products->description}}</p>
            <h4 class="price">Price: <span>{{$products->price}}</span></h4>
            
           
            <div class="action">
              <a href="{{route('uaddToCart',$products->id)}}" class="add-to-cart btn btn-default" type="button">add to cart</a>
              <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-9">
                <h3>
                   Match Products</h3>
            </div>

            
        </div>
         
        
                @foreach($product as $pr)
                <div class="item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="{{asset('/images/'.$pr->image)}}" class="img-responsive" width="50%" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                Name: {{$pr->title}}</h5>
                                            <h5 class="price-text-color">
                                                Price: TK {{$pr->price}}</h5>
                                        </div>
                                        
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="{{route('addToCart',$pr->id)}}" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="{{route('cominfo',$pr->id)}}" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</div>


<div class="text-center">
        {!!$product->links();!!}

      </div>


        
</div><br>
        <div class="container-fluid">
          <div class="jumbotron jumbotron-bg" style="background-color: #099; color: #fff;">
            <h1>Hot!</h1> 
            <button class="btn btn-success">Promo</button>
          </div>
         </div> 

@endsection

 
 