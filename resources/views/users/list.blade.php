{{$active='users'}}
@extends('auth_user_template')

@section('main_content')
<br>
     <a class="btn btn-success" href="{{url('users/create')}}">ADD&nbsp;<i class="glyphicon glyphicon-plus"></i></a> 
     <div class="table-responsive">
      <table class="table table-striped">
      	<thead >
      		<tr>
      		    <th>ID</th>
      		    <th>NAME</th>
                      <th>TYPE</th>
      		</tr>
      	</thead>
      	<tbody>
      		@foreach ($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
                        <td>{{$user->usergroups}}</td>
			</tr>
			@endforeach	
      	</tbody>
      </table>
      </div>
    
@stop