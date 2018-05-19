
@extends('admin.includes.main_admin')
@section('title','New Product')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">Create Products</div>
      <div class="panel-body">
        <form action="{{route('combo.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
          <div class="form-group"> 
          <label for="title"> Title :</label>
          <input type="text" name="title" class="form-control" placeholder="Title..">
          </div>
          <div class="form-group"> 
          <label for="description"> Description :</label>
          <input type="text" name="description" class="form-control" placeholder="Description..">
          </div>
          <div class="form-group"> 
          <label for="price"> Price :</label>
          <input type="text" name="price" class="form-control" placeholder="Price..">
          </div>
          <div class="form-group"> 
          <label for="motherboard"> Motherboard :</label>
          <select name="motherboard" class="form-control">
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="ram"> RAM :</label>
          <select name="ram" class="form-control">
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="ssd"> SSD :</label>
          <select name="ssd" class="form-control">
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="hdd"> HDD :</label>
          <select name="hdd" class="form-control">
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="graphics"> Graphics :</label>
          <select name="graphics" class="form-control">
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="powersupply"> Powersupply :</label>
          <select name="powersupply" class="form-control">
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="processor"> Processor :</label>
          <select name="processor" class="form-control">
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="catching"> Catching :</label>
          <select name="catching" class="form-control">
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="title"> Image :</label>
          <input type="file" name="image" class="form-control" placeholder="Image..">
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    </div>
  </div>
</div>

@endsection