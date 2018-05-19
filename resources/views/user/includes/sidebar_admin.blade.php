<div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">Menu</div>
        <div class="list-group"> 
         <a data-toggle="collapse" href="#orders" class="list-group-item">Orders</a>
          <div id="orders" class="panel-collapse collapse">
          <div class="panel-footer"> </div>
          <div class="panel-body">
              <a href="{{route('uallOrders')}}" class="list-group-item">All Orders</a>
              
              <a href="{{route('udeliveredOrders')}}" class="list-group-item">Delivered</a>
          </div>
          </div>
              <a data-toggle="collapse" href="#product" class="list-group-item">Product</a>
          <div id="product" class="panel-collapse collapse">
          <div class="panel-body">
              <a href="{{route('usersmyproduct')}}" class="list-group-item">All Product</a>
              <a href="{{route('createproduct')}}" class="list-group-item">Create Product</a>
              <a href="{{ route('mycomboproduct')}}" class="list-group-item">All Combo Product</a>
              <a href="{{ route('createcomboproduct')}}" class="list-group-item">Create Combo</a>
        </div>
    <div class="panel-footer"> </div>
</div>
 



 


    <div id="category" class="panel-collapse collapse">
      <div class="panel-footer"> </div>
      <div class="panel-body">
          

  
      </div>
 
    </div>
 

</div>
 
    </div>

      <div class="alert alert-info"> </div>
      <div class="alert alert-warning"> </div>
      <div class="alert alert-info"> </div>
 
        </div>

