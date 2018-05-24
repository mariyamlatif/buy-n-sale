@extends('layouts.app')

@section('title','App- BNS')
@section('content') 
 
<div class="container" align="center" >
  <br><br><br>
   
    
    <div class="container">
        <p style="visibility: hidden;">{{$auth->id}}</p>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2"><img src="{{url('images/buyy.png')}}"
             class="img-responsive" style="border-radius:3%"></div>
            <div class="col-md-2"></div>

            <div class="col-md-2"><img src="{{url('images/sell.png')}}" class="img-responsive" style="border-radius:3%"></div>
           
        </div><br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4"><h3 style="margin-left: -12%;color:#4eade5" ><b><u><a href="{{action('UserController@index')}}">Registered User's Record</a></u></b></h3></div>
            <div class="col-md-2"></div>
            <div class="col-md-4"><h3 style="margin-left: -135%;color:#4eade5"><b><u><a href="{{action('ItemController@index')}}">Registered Item's Record</a></u></b></h3></div>
        </div>
    </div>
     
</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="{{asset('js/index.js')}}"></script>
@endsection
