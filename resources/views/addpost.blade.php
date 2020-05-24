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


	<form action="{{ route('store.post') }}" method="post" enctype="multipart/form-data">
		@csrf
		  <div class="form-group">
		    <label>Title</label>
		    <input type="text" class="form-control" name="title">
		  </div>
		  <div class="form-group">
		    <label >Select category</label>
		    <select class="form-control" name="category_id">
		      @foreach($categories as $category)
		      	<option value="{{$category->id}}">{{$category->name}}</option>
		      @endforeach
		    </select>
		  </div>

		  <div class="form-group">
		    <label >Details</label>
		    <textarea class="form-control" rows="3" name="details"></textarea>
		  </div>

		  <div class="form-group">
		    <input type="file" Value="Upload" name="imgpath">
		  </div>

		  <div class="form-group">
		    <input type="submit" Value="Add Post" class="btn btn-primary">
		  </div>
	</form>
	
@endsection