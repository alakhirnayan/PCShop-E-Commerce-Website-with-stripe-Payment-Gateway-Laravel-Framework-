
@extends('user.includes.main_admin')
@section('title','Edit combo')
@section('content')

<div class="container">
    <div class="row">
        @include('user.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">Edit combo</div>
      <div class="panel-body">
        <form action="{{route('comboupdate',$combo->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('put')}}
          <div class="form-group"> 
          <label for="title"> Title :</label>
          <input type="text" name="title" class="form-control" value="{{$combo->title}}">
          </div>
          <div class="form-group"> 
          <label for="description"> Description :</label>
          <input type="text" name="description" class="form-control" value="{{$combo->description}}">
          </div>
          <div class="form-group"> 
          <label for="price"> Price :</label>
          <input type="text" name="price" class="form-control" value="{{$combo->price}}">
          </div>

          <div class="form-group"> 
          <label for="motherboard"> Motherboard :</label>
          <select name="motherboard" class="form-control">
            <option value="{{$combo->motherboard}}">{{$combo->motherboard}}</option>
            <option value="no">No</option>
           <option value="yes">Yes</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="ram"> RAM :</label>
          <select name="ram" class="form-control">
          <option value="{{$combo->ram}}">{{$combo->ram}}</option>
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="ssd"> SSD :</label>
          <select name="ssd" class="form-control">
          <option value="{{$combo->ssd}}">{{$combo->ssd}}</option>
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="hdd"> HDD :</label>
          <select name="hdd" class="form-control">
          <option value="{{$combo->hdd}}">{{$combo->hdd}}</option>
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="graphics"> Graphics :</label>
          <select name="graphics" class="form-control">
          <option value="{{$combo->graphics}}">{{$combo->graphics}}</option>
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="powersupply"> Powersupply :</label>
          <select name="powersupply" class="form-control">
          <option value="{{$combo->powersupply}}">{{$combo->powersupply}}</option>
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="processor"> Processor :</label>
          <select name="processor" class="form-control">
          <option value="{{$combo->processor}}">{{$combo->processor}}</option>
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="catching"> Catching :</label>
          <select name="catching" class="form-control">
          <option value="{{$combo->catching}}">{{$combo->catching}}</option>
            <option value="no">NO</option>
            <option value="yes">YES</option>
          </select>
          </div>
          <div class="form-group"> 
          <label for="title"> Image :</label>
          <input type="file" name="image" class="form-control" >
          </div>
          <div class="form-group"> 
          <img src="{{asset('images/'.$combo->image)}}" style="width: 40%" height="200px">
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    </div>
  </div>
</div>

@endsection