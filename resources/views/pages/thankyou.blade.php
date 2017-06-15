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
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Thankyou for your response,we will get back to you soon</div>
                <a href="{{ url('/') }}" class="page-scroll btn btn-xl">Go Back</a>
            </div>
        </div>
    </header>
@endsection