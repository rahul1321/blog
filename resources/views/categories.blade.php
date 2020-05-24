@extends('index')

@section('content')

	<div style="margin-bottom: 50px;">
		<a class="btn-info btn-sm" href="{{route('add.category')}}"> Add Category</a>
	</div>

	<table width="100%";>
		<tr>
			<th>Category Name</th>
			<th>Slug</th>
			
		</tr>
		
		@foreach($categories as $category)
			<tr style="border-bottom: 1px solid #ddd;">
				<td style="padding: 5px; font-size:16px;"> {{ $category->name }} </td>
				<td style="padding: 5px; font-size:16px;"> {{ $category->slug }} </td>
				<td style="padding: 5px; font-size:16px;"> 
					<a class="btn-primary btn-sm" href="{{URL::to('edit/category/'.$category->id)}}"> 
						Edit
					</a>
				</td>
				<td style="padding: 5px; font-size:16px;"> 
					<a class="btn-danger btn-sm" href="{{URL::to('delete/category/'.$category->id)}}"> Delete</a>
				</td>
			</tr>
		@endforeach
			
	</table>
	
	<div style="margin:10px;">
		{{$categories->links()}}
	</div>
	
 
@endsection 