{{$active='students'}}
@extends('auth_user_template')

@section('main_content')
<br>
     <div class="table-responsive">
      <table class="table table-striped">
      	<thead >
      		<tr>
      			<th>ID</th>
      			<th>NAME</th>
      		</tr>
      	</thead>
      	<tbody>
      		@foreach ($students as $student)
			<tr>
				<td>{{$student->id}}</td>
				<td>{{$student->firstname}}</td>
			</tr>
			@endforeach	
      	</tbody>
      </table>
      </div>
    
@stop
