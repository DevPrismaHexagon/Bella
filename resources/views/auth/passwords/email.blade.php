@extends('layouts.app')

@section('content')

<div class="container-fluid" id="login">
    <div class="row" id="login">
        <div class="form d-flex align-items-center">
            <form method="POST" action="{{ route('password.email') }}" class="p-5 mx-auto landr">
                @csrf
                <h2 class="mb-4 text-center">Enter your email to reset the password</h2>
                <div class="form-group row">
                    <div class="input-group mb-3">

                        <input id="email" type="email" class="p-4 mb-4 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-primary p-3">
                            {{ __('Send Password Reset Link') }}
                        </button>  
                    </div>
                    <div class="text-center mt-4"><a href="{{ route('login') }}">Cancel</a></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
