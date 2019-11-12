

@extends('layouts.masters')

<br>

@section('content')

	<div class="container col-md-6">

		<br>

			<h4>Register</h4>

		<br>


			<form method="POST" action="/register">

					{{ csrf_field() }}
		       
				<div class="form-group">
					
					 <label for="posttitle" class="sr-only">Enter Name</label>

		       		 <input type="text" id="posttitle" name="name" class="form-control" placeholder="Enter Name">

				</div>

				<div class="form-group">
		       
			     	<input type="email" id="posttitle" name="email" class="form-control" 
			     	placeholder="Enter Email">

		        </div>

		       <div class="form-group">
		       
			         <input type="password" id="posttitle" name="password" class="form-control" placeholder="Enter Password">

		        </div>


		        <div class="form-group">
		       
			         <input type="password" id="posttitle" name="password_confirmation" class="form-control" placeholder="Enter Password Confirmation">

		        </div>


		        <div class="form-group">
		       
			         <input type="submit" class="btn btn-success form-control" name="register" value="Register">

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