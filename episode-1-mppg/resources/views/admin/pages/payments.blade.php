@extends('admin.layouts.app')

@section('container')
<div class="row">
    <div class="col-lg-6 col-md-6 mx-auto">
        <div class="card">
            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Well done!</strong> {{ session('message') }}
                </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Error!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li><em>{{ $error }}</em></li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="main-content-label mg-b-5">
                    Add Payments Form
                </div>
                <p class="mg-b-20 card-sub-title tx-12 text-muted">Complete the form to add new purchase prices with their respective award.</p>
                <form method="POST" action="{{ route('payments.store') }}" data-parsley-validate="">
                    @csrf
                    <div class="row row-sm">
                        <div class="col-12">
                            <label class="form-label">Price to Sell: <span class="tx-danger">*</span></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">{{ env('PAYPAL_CURRENCY_CODE') }}</span>
                                </div>
                                <input aria-label="Amount (to the nearest dollar)" class="form-control" name='price' type="text">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label"><strong>{{ env('PAYPAL_ITEM_SELLING') }}</strong> to Give: <span class="tx-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input aria-describedby="basic-addon2" name='cash' class="form-control" type="text">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">{{ env('PAYPAL_ITEM_SELLING') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12"><button class="btn btn-main-primary pd-x-20 mg-t-10" type="submit">Add Payment</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0 pd-t-25">
                @if(session('delete-message'))
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Well done!</strong> {{ session('delete-message') }}
                </div>
                @endif
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">Current Payment Available</h4>
                </div>
                <p class="tx-12 text-muted mb-2">Here you can see all the prices and {{ env('PAYPAL_ITEM_SELLING') }} available for sale.</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 text-md-nowrap border">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Price</th>
                                <th>{{ env('PAYPAL_ITEM_SELLING') }}</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prices as $price)
                            <tr>
                                <th scope="row">{{ $price->id }}</th>
                                <td>{{ $price->price }}</td>
                                <td>{{ $price->cash . ' ' . env('PAYPAL_ITEM_SELLING') }}</td>
                                <td>
                                    <form method="POST" action="{{ route('payments.destroy', ['payment' => $price->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-4 mx-auto">{{ $prices->links() }}</div>
    </div>
</div>
@endsection