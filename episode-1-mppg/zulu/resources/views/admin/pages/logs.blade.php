@extends('admin.layouts.app')

@section('container')
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0 pd-t-25">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">Payment Logs</h4>
                </div>
                <p class="tx-12 text-muted mb-2">Here you can see all the donations that were successfully made.</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 text-md-nowrap border">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Price</th>
                                <th>{{ env('PAYPAL_ITEM_SELLING') }}</th>
                                <th>Transaction ID</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($logs as $log)
                            <tr>
                                <th scope="row">{{ $log->id }}</th>
                                <td>{{ $log->user_buyer }}</td>
                                <td>{{ $log->email_buyer }}</td>
                                <td>{{ $log->price . ' ' . env('PAYPAL_CURRENCY_CODE') }}</td>
                                <td>{{ $log->cash . ' ' . env('PAYPAL_ITEM_SELLING') }}</td>
                                <td>{{ $log->transaction_id }}</td>
                                <td>{{ $log->date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-4 mx-auto">{{ $logs->links() }}</div>
    </div>
</div>
@endsection