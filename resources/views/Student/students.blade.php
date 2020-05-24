@extends('index')

@section('content')
	<div class="container">
	<div class="row">
		<a class="btn btn-info" href="{{ url('student/create') }}"> Add Student </a>
	</div>
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <table width="100%";>
		<tr>
			<th>Student Name</th>
			<th>Email</th>
			<th>Address</th>
			
		</tr>
		
		@foreach($students as $student)
			<tr style="border-bottom: 1px solid #ddd;">
				<td style="padding: 5px; font-size:16px;"> {{ $student->name }} </td>
				<td style="padding: 5px; font-size:16px;"> {{ $student->email }} </td>
				<td style="padding: 5px; font-size:16px;"> {{ $student->address }} </td>
				<td style="padding: 5px; font-size:16px;"> 
					<a class="btn-primary btn-sm" href="{{ url('student/'.$student->id.'/edit') }}"> 
						Edit
					</a>
				</td>
				<td style="padding: 5px; font-size:16px;"> 
					<form action="{{ url('student/'.$student->id) }}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn-danger btn-sm"> Delete</button>
					</form>
					
				</td>
			</tr>
		@endforeach
			
	</table>
 	
      </div>
    </div>
  </div>
  {{ $students->links() }}
@endsection
