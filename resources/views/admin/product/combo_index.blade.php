
@extends('admin.includes.main_admin')
@section('title','Product title')
@section('content')

<div class="container">
    <div class="row">
        @include('admin.includes.sidebar_admin')
         <div class="col-md-9">
              <div class="panel panel-primary">
      <div class="panel-heading">All Combo Products</div>
      <div class="panel-body">
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($combos as $combo)
          <tr>
            <td width="200"><img src="{{asset('images/'.$combo->image)}}" style="width: 100%"></td>
            <td>{{$combo->title}}</td>
            <td>{{$combo->description}}</td>
            <td>{{$combo->price}}</td>
            <td>
              <a href="{{route('combo.edit',$combo->id)}}" class="btn btn-success btn-sm">Edit</a>
            </td>
            <td>
              <form action="{{route('combo.destroy',$combo->id)}}" method="post">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>

              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
          

        </table>
    </div>
    </div>
      <div class="text-center">
        {!!$combos->links();!!}

      </div>
  </div>
</div>
</div>
@endsection