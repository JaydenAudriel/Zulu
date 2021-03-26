@extends('home.layouts.app')

@section('main_container')

<div id="top-wizard">
    <div id="progressbar"></div>
</div>

<div class="svg-box">
    <svg class="circular red-stroke">
        <circle class="path" cx="75" cy="75" r="50" fill="none" stroke-width="5" stroke-miterlimit="10" />
    </svg>
    <svg class="cross red-stroke">
        <g transform="matrix(0.79961,8.65821e-32,8.39584e-32,0.79961,-502.652,-204.518)">
            <path class="first-line" d="M634.087,300.805L673.361,261.53" fill="none" />
        </g>
        <g transform="matrix(-1.28587e-16,-0.79961,0.79961,-1.28587e-16,-204.752,543.031)">
            <path class="second-line" d="M634.087,300.805L673.361,261.53" />
        </g>
    </svg>
</div>

<!-- /top-wizard -->
<h2 class="main_question text-danger">Purchase failed!</h2>
<h3 class="main_question">Your purchase could not be completed or processed successfully.</h3>
<h3 class="main_question">Please contact an administrator for support with your transaction details.</h3>
<button class="btn_1 rounded">Go Back</button>

@endsection