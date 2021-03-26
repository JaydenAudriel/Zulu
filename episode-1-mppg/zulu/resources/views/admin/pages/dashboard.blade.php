@extends('admin.layouts.app')

@section('container')
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="row row-sm">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body iconfont text-left">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-3">Total Coins</h4>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="">
                                <h4 class="mb-1 font-weight-bold">{{ $totals->cash . ' ' . env('PAYPAL_ITEM_SELLING') }}</h4>
                                <p class="mb-2 tx-12 text-muted"><i class="fas fa-arrow-circle-down text-danger"></i>
                                    Coins delivered in
                                    total
                                </p>
                            </div>
                            <div class="card-chart bg-primary-transparent brround ml-auto mt-0">
                                <i class="typcn typcn-shopping-cart text-primary tx-24"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body iconfont text-left">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-3">Total Earnings</h4>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="">
                                <h4 class="mb-1 font-weight-bold">{{ $totals->price . ' ' . env('PAYPAL_CURRENCY_CODE') }}</h4>
                                <p class="mb-2 tx-12 text-muted"><i class="fas fa-arrow-circle-up text-success"></i>
                                    Total money
                                    generated
                                </p>
                            </div>
                            <div class="card-chart bg-primary-transparent brround ml-auto mt-0">
                                <i class="typcn typcn-chart-line-outline text-primary tx-24"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-header pb-0 pd-t-25">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title mb-0">Latest purchases</h3>
                        </div>
                        <p class="tx-12 text-muted mb-0">
                            Here you can see the total number of {{ env('PAYPAL_ITEM_SELLING') }} delivered in total
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered text-nowrap" style="width:100%">
                                <thead>
                                    <tr class="bold">
                                        <th class="border-bottom-0">Username </th>
                                        <th class="border-bottom-0">Total</th>
                                        <th class="border-bottom-0">Coins earned</th>
                                        <th class="border-bottom-0">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($latest as $user)
                                    <tr>
                                        <td class="font-weight-bold">
                                            {{ $user->user_buyer }}
                                        </td>
                                        <td>{{ $user->price . ' ' . env('PAYPAL_CURRENCY_CODE') }}</td>
                                        <td>{{ $user->cash . ' ' . env('PAYPAL_ITEM_SELLING') }}</td>
                                        <td>{{ $user->date }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-header pb-0 pd-t-25">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title mb-0">Top Buyers</h3>
                        </div>
                        <p class="tx-12 text-muted mb-0">
                            Here you can see the total earnings
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered text-nowrap" style="width:100%">
                                <thead>
                                    <tr class="bold">
                                        <th class="border-bottom-0">Username </th>
                                        <th class="border-bottom-0">Total purchases</th>
                                        <th class="border-bottom-0">Coins earned</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($top_buyers as $user)
                                    <tr>
                                        <td class="font-weight-bold">
                                            {{ $user->user_buyer }}
                                        </td>
                                        <td>{{ $user->price . ' ' . env('PAYPAL_CURRENCY_CODE') }}</td>
                                        <td>{{ $user->cash . ' ' . env('PAYPAL_ITEM_SELLING') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection