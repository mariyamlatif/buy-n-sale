@extends('layouts.app')

@section('title','App- BNS')
@section('content')
<br><br><br>
    <div class="container" align="center" >
<form method="post" action="{{url('/showproduct')}}" enctype="multipart/form-data" >
    
    {{ csrf_field() }}
     <input type="hidden" name="id" value="{{$auth->id}}">
    <div class="row">
           <h3 style="color:#4eade5"> Product Information</h3>
      <div class="input-group input-group-icon">
       <label style="padding-right: 30px">Select Item To Search: </label> 
<select name="type">
    <option value="Eletronic items">Eletronic items</option>
    <option value="Vehicles">Vehicles</option>
    <option value="Shoes">Shoes</option>
  </select>
<button type="submit" style="background-color:#4eade5 ;border:none">Search</button>
        </form>
    </div>
  </div>

</br></br>

<div class="container">
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-9">
<table class="table table-bordered" >
    <thead>
      <tr>
          @if(isset($item))
        <th>Seller Name</th>
        <th>Seller  Contact-no</th>
        <th >Product Prize</th>
        <th width="90%">Description</th>
        <th>Picture</th>
      </tr>
    </thead>
    <tbody>
      @foreach($item as $items)
      <tr>
        <td>{{$items->user->name}}</td>
        <td>{{$items->user->contactno}}</td>
        <td>{{$items->prize}}</td>
        <td>{{$items->desc}}</td>
      <td><img class="img-responsive" src="{{url('images/'.$items->thumbnail)}}" style="height:200px;width:220px"></td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  @endif
  </div>
  
  </div>





  <div class="col-md-3"></div>

</div>
 
</div>
 

  

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="{{asset('js/index.js')}}"></script>
@endsection