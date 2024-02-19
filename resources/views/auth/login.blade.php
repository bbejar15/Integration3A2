@extends('layouts.app')

@section('content')
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-10 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-4">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Enter Username and Password</h1>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}" class="user">
                                    @csrf
                                    <div class="row mb-6">
                                                <label for="email" class="col-md-5 col-form-label text-md-end">{{ __('User Name') }}</label>
                                                <div class="col-md-12">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-5">
                                                <label for="password" class="col-md-5 col-form-label text-md-end">{{ __('Password') }}</label>

                                                <div class="col-md-12">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        <button class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
