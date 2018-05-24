@extends('layouts.userpanel')

@section('title','App- BankService')
@section('content')
<br><br><br><br><br><br><br>
<div class= "container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-9" style="color:#66c9aa;font-size: 290%">ThankYou for using HBL Web Bank Service. </div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="color:#66c9aa;font-size: 290%">Click here to <a href="{{action('LoginController@logout')}}" style="color:#66c9aa"><u>Login</u> </a></div>
		</div>
</div>