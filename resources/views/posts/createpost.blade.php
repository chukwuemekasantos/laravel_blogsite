
	@extends('layouts.masters')



	@section('content')


		<div class="container">

			<h1>Create New Posts</h1>


			<form method="POST" action="/posts">

					{{ csrf_field() }}
		       
				<div class="form-group">
					
					 <label for="posttitle" class="sr-only">Enter Post Title</label>

		       		 <input type="text" id="posttitle" name="title" class="form-control" placeholder="Enter Post Title">

				</div>

				<div class="form-group">
		       
			        <label for="post" class="sr-only">Body</label>
			        <textarea  name="body" class="form-control" id="post"></textarea>
		        </div>

		       <div class="form-group">
		       
		       	 <button class="btn btn-lg btn-primary btn-block" type="submit">Publish</button>
     		
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

	

</body>
</html>