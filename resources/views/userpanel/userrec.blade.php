@extends('layouts.app')

@section('title','App- BNS')
@section('content')
<br><br><br>


<div class="container">
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-9">
<table class="table table-bordered" >
    <thead>
      <tr>
         
        <th width="40%" align="center">Name</th>
        <th width="40%" align="center">Email</th>
        <th width="40%" align="center">Contactno</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($user as $users)
      <tr>
        <td>{{$users->name}}</td>
        <td>{{$users->email}}</td>
        <td>{{$users->contactno}}</td>
       
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
      {{$user->links()}}
    </div>
     <div class="col-md-4"></div>
  </div>
 
</div>
 

  

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="{{asset('js/index.js')}}"></script>
@endsection