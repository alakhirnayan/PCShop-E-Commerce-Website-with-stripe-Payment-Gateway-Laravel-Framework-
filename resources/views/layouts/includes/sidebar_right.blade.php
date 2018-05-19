<div class="panel-group">
      <div class="panel panel-default">
  			<div class="panel-heading">Sidebar</div>
         </div>
          </div>

     <div class="panel-group">
        <div class="panel panel-default">
  			   <div class="panel-body">
 	            <div class="alert alert-info" style=" margin-bottom: 0px;">
 	              Cart Product will offer CashOnDelivery and Credit card payment privillages. If choose the continue
              </div>
  			</div>
      </div>
     </div>
@foreach($products as $product)
     <!-- foreach -->
      <div class="panel-group">
        <div class="panel panel-default">
         <div class="panel-body"> 
            <div class="thumnail-image">
              <img src="{{asset('/images/'.$product->image)}}" alt="" />
         </div>
      
          <div class="title-product"> <h4>{{$product->title}}</h4></div>
            
              <div class="price">  <p>{{$product->price}}</p></div>
              <div class="addToCart">
                  <i class="fa fa-heart-o"></i>
                  <i class="fa fa-share"></i>
                  <a href="{{route('proinfo',$product->id)}}" class="btn btn-primary pull-right btn-sm">Producct Info</a>
              </div>
             </div>
          </div>
      </div>
        <!-- 3ndforeach -->
      @endforeach