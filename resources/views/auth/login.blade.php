@extends('layouts.app')

@section('content')

<div class="container-fluid" id="login">
    <div class="row">
        <div class="form d-flex align-items-center">
            <form method="POST" action="{{ route('login') }}" class="p-5 mx-auto landr">
                @csrf
                <h2 class="mb-4 text-center">Welcome Back!</h2>
                <div class="form-group row">
                    <div class="input-group mb-3">
                        
                        <input id="email" type="email" class=" form-control @error('email') is-invalid @enderror p-4 mb-4" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Mail*">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    
                    <div class="input-group mb-3">
                        <input id="password" type="password" class="p-4 mb-4 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password*">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group d-flex justify-content-center">
                        
                        @if (Route::has('password.request'))

                            <p class="mb-5 fs-5"><a href="{{ route('password.request') }}" class="forgot text-primary">{{ __('Forgot Your Password?') }}</a></p>
                            
                        @endif

                        <button type="submit" class="btn btn-primary p-3 mb-3">
                            {{ __('Login') }}
                        </button>

                        <p class=" text-center fw-bolder">Register  <a href="{{ route('register') }}" class="">User</a></p>
                
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
