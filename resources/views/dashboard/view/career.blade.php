@extends('layouts.dashboard')

@section('title')
Careers
@endsection

@section('content-header')
	<h1>
	    Dashboard
	    <small>Careers Responses</small>
  	</h1>
@endsection

@section('content')
<div class="row">
	<div class="col-lg-10 col-lg-offset-1">
		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Password</h3>
              <a href="{{ url('deleteCareer') }}" class="btn btn-danger pull-right">SignOut of all devices</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        		<div class="form-horizontal"> 
              	  <div class="form-group">
	                <label for="name" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
	                  <p class="form-control" id="name">{{ $user->name }}</p>
	                </div>
	              </div>
					
	              <div class="form-group">
	              	<label for="email" class="col-sm-2 control-label">Email</label>
					
	                <div class="col-sm-10">
	                  <p class="form-control" id="email">{{ $user->email }}</p>
	                </div>
	              </div>

	              <div class="form-group">
	                <label for="phone" class="col-sm-2 control-label">Contact #</label>
	                <div class="col-sm-10">
	                  <p class="form-control" id="phone">{{ $user->phone }}</p>
	                </div>
	              </div>

	              <div class="form-group">
	                <label for="applyingfor" class="col-sm-2 control-label">Applying for</label>
	                <div class="col-sm-10">
	                  <p class="form-control" id="applyingfor">{{ $user->applyingfor }}</p>
	                </div>
	              </div>

	              <div class="form-group">
	                <label for="experience" class="col-sm-2 control-label">Experience</label>
	                <div class="col-sm-10">
	                  <p class="form-control" id="experience">{{ $user->experience }}</p>
	                </div>
	              </div>

	              <div class="form-group">
	                <label for="salary" class="col-sm-2 control-label">Salary Expectations</label>
	                <div class="col-sm-10">
	                  <p class="form-control" id="salary">{{ $user->salary }}</p>
	                </div>
	              </div>

	              <div class="form-group">
	                <label for="comments" class="col-sm-2 control-label"></label>
	                <div class="col-sm-10">
	                  <p class="form-control" id="comments">{{ $user->comments }}</p>
	                </div>
	              </div>

	              <div class="form-group">
	                <div class="col-sm-offset-2 col-sm-10">
	                  <button type="submit" class="btn btn-danger">Delete Record</button>
	                </div>
	              </div>
	            </div>
            </div>
            <!-- /.box-body -->
      	</div>
          <!-- /.box -->
	</div>
</div>
@endsection