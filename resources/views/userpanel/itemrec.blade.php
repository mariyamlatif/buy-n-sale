@extends('layouts.app')
@section('title','App- BNS')
@section('content')
<div class="container">
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-9">
<table class="table table-bordered" >
    <thead>
      <tr>
        <th>Item's Type</th>
        <th>Prize</th>
        <th width="100%">Description</th>
        <th>Item's Seller</th>
        <th>Item's Contactno</th>
        <th>Item's picture</th>

      </tr>
    </thead>
    <tbody>
      @foreach($item as $items)
      <tr>
        <td>{{$items->type}}</td>
        <td>{{$items->prize}}</td>
        <td>{{$items->desc}}</td>
        <td>{{$items->user->name}}</td>
        <td>{{$items->user->contactno}}</td>
      <td><img class="img-responsive" src="{{url('images/'.$items->thumbnail)}}" style="height:200px;width:220px"></td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
 
  </div>
  
  </div>





  <div class="col-md-3"></div>

</div>
 <div class="row">
   <div class="col-md-4"></div>
    <div class="col-md-4">
      {{$item->links()}}
    </div>
     <div class="col-md-4"></div>
  </div>
</div>
 

  

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="{{asset('js/index.js')}}"></script>
@endsection