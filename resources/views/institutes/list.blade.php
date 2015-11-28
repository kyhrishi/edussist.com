{{$active='institute'}}
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
      		@foreach ($institutes as $institute)
			<tr>
				<td>{{$institute->id}}</td>
				<td>{{$institute->name}}</td>
			</tr>
			@endforeach	
      	</tbody>
      </table>
      </div>
    
@stop
