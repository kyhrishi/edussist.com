{{$active='faculty'}}
@extends('auth_user_template')

@section('main_content')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-theme.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">

<script src="{{url('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{url('assets/js/moment.js')}}"></script>
<script src="{{url('assets/js/transition.js')}}"></script>
<script src="{{url('assets/js/collapse.js')}}"></script>
<script src="{{url('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#personal_info">1. Personal Info&nbsp;<i class="glyphicon glyphicon-check glyphicon-primary"></i></a></li>
    <li><a data-toggle="tab" href="#qualification_info">2. Qualification Info</a></li>
    <li><a data-toggle="tab" href="#proffesional_info">3. Proffesional Info</a></li>
    <li><a data-toggle="tab" href="#research_info">4. Research Info</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="personal_info" class="tab-pane fade in active">
      <h3>HOME</h3>
      <form role="form" id="faculty_personal_info_form">
      <div class="row">
      <div class="col-md-6">
        <div class="form-group">
            <label for="firstname">Firstname:</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="form-group">
            <label for="middlename">Middlename:</label>
            <input type="text" class="form-control" name="middlename">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <div class="form-control">
            <label class="radio-inline"><input type="radio" value="Male" name="gender">Male</label>
            <label class="radio-inline"><input type="radio" value="Female" name="gender">Female</label>
            </div>
        </div>

        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="birth_date">Birth Date:</label>
            <!-- <input type="text" class="form-control" id="birth_date" name="birth_date"> -->
            <div class='input-group date' id='birth_date'>
                    <input type='text' class="form-control" name="birth_date"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" name="contact">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="">Address:</label>
            <textarea class="form-control" name="address"></textarea>
        </div>
        </div>
        </div>
        <div class="row">
       <div class="form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="submit" class="btn btn-danger">Cancel</button>       
        </div>
        </div>
      </form>
    </div>
    <div id="qualification_info" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="proffesional_info" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="research_info" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
  <script>
  $(function(){

  $('#birth_date').datetimepicker({
                 format: 'YYYY/MM/DD'
           });
  $('#faculty_personal_info_form').validate({
     rules:{
      firstname: 'required',
      lastname: 'required',
      email:{
        required:true,
        email:true
      },
      gender:'required',
      birth_date:{
        required:true,
        date:true
      },
      contact:'required',
     }  
  });

  });
  </script>
@stop