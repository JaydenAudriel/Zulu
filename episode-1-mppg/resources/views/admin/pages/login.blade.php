@extends('admin.layouts.login')

@section('form')

<!-- main-signin-wrapper -->
<div class="my-auto page page-h">
    <div class="main-signin-wrapper error-wrapper">
        <div class="main-card-signin d-md-flex wd-100p">
            <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white">
                <div class="my-auto authentication-pages">
                    <div>
                        <img src="{{ asset('img/zulu-logo.svg') }}" width="150" class=" m-0 mb-4" alt="logo">
                        <h5 class="mb-4">Welcome to the administrative panel where you can configure the whole application!</h5>
                        <div class="copy text-center">© 2021 - <a style="color:#87ceeb" href="https://www.fregion.online" target="_blank">Fregion</a> -
                            {{ env('APP_NAME') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 wd-md-50p">
                <div class="main-signin-header">
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

                    @if(session('error-login'))
                    <div class="alert alert-danger" role="alert">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Error!</strong> {{ session('error-login') }}
                    </div>
                    @endif
                    
                    <h2>Welcome back!</h2>
                    <h4>Please sign in to continue</h4>
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        <div class="form-group">
                            <label>Username</label><input class="form-control" placeholder="Enter your username" name="username" type="text" value="">
                        </div>
                        <div class="form-group">
                            <label>Password</label> <input class="form-control" placeholder="Enter your password" name="password" type="password" value="">
                        </div><button class="btn btn-main-primary btn-block">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /main-signin-wrapper -->

@endsection