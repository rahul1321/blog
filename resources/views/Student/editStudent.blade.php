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

	<label>Edit Student Here</label>
	<form action="{{ url('student/'.$student->id) }}" method="post">
		@csrf
		@method('put')
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" class="form-control" name="name" value="{{ $student->name }}">
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Email</label>
		    <input type="email" class="form-control" name="email" value="{{ $student->email }}">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Address</label>
		    <input type="text" class="form-control" name="address" value="{{ $student->address }}">
		  </div>

		  <div class="form-group">
		    <input type="submit" class="btn btn-primary">
		  </div>
	</form>
	
@endsection
