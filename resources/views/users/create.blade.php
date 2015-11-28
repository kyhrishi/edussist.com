{{$active='users'}}
@extends('auth_user_template')

@section('main_content')
<br>
<form method="POST" action="{{url('users/store')}}">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Usertype
        <select name="usergroups">
        <option value="1">Administrator</option>}
         <option value="2">Faculty</option>
         <option value="3">Student</option>        
        </select>
    </div>

    <div>
        <input type="hidden" name="institute_id"> 
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>     
    
@stop