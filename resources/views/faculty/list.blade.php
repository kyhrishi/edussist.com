{{$active='faculty'}}
@extends('auth_user_template')

@section('main_content')
<br>
      Faculty page!!
      @foreach ($faculties as $faculty)
			<tr>
				<td>{{$faculty->id}}</td>
				<td>{{$faculty->firstname}}</td>
			</tr>
			@endforeach	
@stop
