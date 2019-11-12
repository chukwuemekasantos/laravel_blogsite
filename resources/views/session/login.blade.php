

@extends('layouts.masters')

<br>

@section('content')

	<div class="container col-md-6">

		<br>

			<h4>Login</h4>

		<br>


			<form method="POST" action="/login">

					{{ csrf_field() }}
		       
			

				<div class="form-group">
		       
			     	<input type="email" id="posttitle" name="email" class="form-control" 
			     	placeholder="Enter Email">

		        </div>

		       <div class="form-group">
		       
			         <input type="password" id="posttitle" name="password" class="form-control" placeholder="Enter Password">

		        </div>


		        

		        <div class="form-group">
		       
			         <input type="submit" class="btn btn-success form-control" name="login" value="Login">

		        </div>


		       <div class="form-group">
		       
		        @if(count($errors))	

		       	@foreach($errors->all() as $error)

		       		<div class="alert alert-danger">
					  <strong>Danger!</strong> {{$error}}
					</div>

				@endforeach

				@endif

		       </div>

     	 </form>

		</div>


@endsection