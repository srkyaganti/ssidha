@extends('layouts.app')

@section('title')
	Interior Designing and Home Automation
@endsection

@section('logo-link')
{{ url('/') }}
@endsection

@section('header-background')
{{ url('img/index.jpg') }}
@endsection

@section('content')
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Login | SSIDHA</h2>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                    @include('partials.errors')
            		<form action="{{ url('login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                        	<h5 class="section-heading">Email</h5>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                        	<h5 class="section-heading">Password</h5>
							<input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group text-center">
                        	<button type="submit" class="btn btn-xl">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
</script>
@endsection