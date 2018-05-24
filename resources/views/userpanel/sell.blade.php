@extends('layouts.app')

@section('title','App- BNS')
@section('content') 
 
<div class="container" align="center" >
  <br><br><br>
   
    
    <div class="container" align="center" style="border: 2px solid #4eade5; width:40%;" >

  <form method="post" action="{{url('/product')}}" enctype="multipart/form-data" >
    
    {{ csrf_field() }}

     <input type="hidden" name="id" value="{{$auth->id}}">
    <div class="row">
           <h3 style="color:#4eade5"> Product Information</h3>
      <div class="input-group input-group-icon">
       <label style="padding-right: 30px">Item Type: </label> 
<select name="type">
    <option value="Eletronic items">Eletronic items</option>
    <option value="Vehicles">Vehicles</option>
    <option value="Shoes">Shoes</option>
  </select>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <label style="padding-right: 30px">Item Description: </label><textarea name="desc" cols="54" rows="3"></textarea>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      </br>
      <div class="input-group input-group-icon">
        <label style="padding-right: 30px">Prize: </label><input type="text" placeholder="Prize" name="prize" />
        <br>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <label style="padding-right: 62px">Upload Picture: </label><input type="file" name="thumbnail" />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      
      
    </br><br>
     <button type="submit"  style="background-color:#4eade5 ;margin-left:30%;margin-top: 3%;border:none;width:30%;padding-bottom: :30%">Save</button>
     </form>
    </div>
</br></br>
  
</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="{{asset('js/index.js')}}"></script>
@endsection
