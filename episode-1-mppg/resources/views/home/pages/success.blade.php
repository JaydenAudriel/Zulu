@extends('home.layouts.app')

@section('main_container')
<div id="top-wizard">
    <div id="progressbar"></div>
</div>

<div class="svg-box">
    <svg class="circular green-stroke">
        <circle class="path" cx="75" cy="75" r="50" fill="none" stroke-width="5" stroke-miterlimit="10" />
    </svg>
    <svg class="checkmark green-stroke">
        <g transform="matrix(0.79961,8.65821e-32,8.39584e-32,0.79961,-489.57,-205.679)">
            <path class="checkmark__check" fill="none" d="M616.306,283.025L634.087,300.805L673.361,261.53" />
        </g>
    </svg>
</div>

<!-- /top-wizard -->
<h2 class="main_question text-success">Successful purchase!</h2>
<h3 class="main_question">Your purchase has been successfully completed and your order will be
    processed shortly.</h3>

<a href="{{ route('app.home') }}">
	<button class="btn_1 rounded">Buy More</button>
</a>

@endsection