@extends('index')

@section('content')

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif


	<form action="{{route('store.category')}}" method="post">
		@csrf
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Category Name</label>
		    <input type="text" class="form-control" name="name">
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Slug</label>
		    <input type="text" class="form-control" name="slug">
		  </div>

		  <div class="form-group">
		    <input type="submit" class="btn btn-primary">
		  </div>
	</form>
	
@endsection