@extends('layouts.dashboard')

@section('title')
Enquiry
@endsection

@section('content-header')
	<h1>
	    Dashboard
	    <small>Enquiry Responses</small>
  	</h1>
@endsection

@section('content')
<div class="row">
	<div class="col-xs-12">
	  <div class="box">
	    <div class="box-header">
	      <h3 class="box-title">Users</h3>
		</div>
	    <!-- /.box-header -->
	    <div class="box-body table-responsive no-padding">
	      <table class="table table-hover">
	      	<thead>
	      		<tr>
	        	<th>Name</th>
				<th>Time</th>
				<th>Action</th>
		        </tr>	
	      	</thead>
	        <tbody>
				@foreach ($enquiries as $enquiry)
					<tr>
						<td>{{ $enquiry->name }}</td>
						<td>{{ Carbon\Carbon::parse($enquiry->created_at)->diffForHumans() }}</td>
						<td><a href="{{ url('viewcareer')}}/{{ $enquiry->email }}">View Detials</a></td>
					</tr>
				@endforeach
	        </tbody>
		  </table>
	    </div>
	  </div>
	</div>
</div>
@endsection