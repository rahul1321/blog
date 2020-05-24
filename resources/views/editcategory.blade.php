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


	<form action="{{URL::to('update/category/'.$category->id)}}" method="post">
		@csrf
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Category Name</label>
		    <input type="text" class="form-control" name="name" value="{{$category->name}}">
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Slug</label>
		    <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
		  </div>

		  <div class="form-group">
		    <input type="submit" class="btn btn-primary" value="Update">
		  </div>
	</form>
	
@endsection