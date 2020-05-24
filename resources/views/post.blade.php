@extends('index')

@section('content')

<div class="container">
	<div class="row">
		<a class="btn btn-info" href={{ route('add.post')}}> Add Post </a>
	</div>
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($posts as $post)
          <div class="post-preview" style="margin-top:50px;">
            <div>
              <div >
                  <img src="{{URL::to($post->imgpath)}}" style="width:100px;height:50px;">
              </div>
              <a href="post.html">
                <h2 class="post-title">
                 {{$post->title}}
                </h2>
                <h3 class="post-subtitle">
                 {{$post->name}}
                </h3>
              </a>

            </div>
          </div>
          <hr>
        @endforeach
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>
 
@endsection