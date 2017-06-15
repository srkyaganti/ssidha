@if (count($errors) > 0)
	@foreach ($errors->all() as $error)
		<div class="alert alert-danger alert-with-icon alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>
			<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
			<span>{{ $error }}</span>
		</div>
	@endforeach
@endif