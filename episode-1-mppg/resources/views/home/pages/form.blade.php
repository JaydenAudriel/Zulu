@extends('home.layouts.app')

@section('main_container')
<div id="top-wizard">
    <div id="progressbar"></div>
</div>

<!-- /top-wizard -->
<form id="wrapped" method="POST" action="{{ route('app.buy') }}">
    @csrf
    <div id="middle-wizard">
        <div class="step text-left">

            @if (session('alert_message'))
            <div class="alert alert-{{session('alert_message')['alert_type']}}" role="alert">
                {{session('alert_message')['message']}}
            </div>
            @endif


            <h2 class="main_question text-center">Welcome dear user!</h2>
            <h3 class="main_question">Please fill out the form to purchase the virtual currency.
            </h3>
            <p class="text-muted">Warning: Use your real data or you could fail the purchase and end
                up losing your money or the virtual currency.</p>
            <div class="form-group">
                <input type="text" name="username" class="form-control required" placeholder="Username" onchange="getVals(this, 'first_name');">
            </div>

            <div class="row">

                @foreach($prices as $price)

                <div class="col-6 pb-3">
                    <label>
                        <input type="radio" name="product" value="{{ $price->price }}" class="card-input-element" />

                        <div class="card card-input">
                            <div class="card-body">
                                <h5 class="card-title">{{ $price->cash . ' ' . env('PAYPAL_ITEM_SELLING') }}</h5>
                                <p class="card-text"><strong>{{ $price->price . ' ' . env('PAYPAL_CURRENCY_CODE') }}</strong></p>
                            </div>
                        </div>
                    </label>
                </div>

                @endforeach

            </div>

            <div class="text-center py-4">
                <button type="submit" class="submit">Buy</button>
            </div>
        </div>
    </div>
    <!-- /middle-wizard -->
</form>
@endsection