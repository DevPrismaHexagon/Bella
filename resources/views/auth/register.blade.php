@extends('layouts.app')

@section('content')
<div class="container-fluid" id="login">
    <div class="row">
        <div class="form d-flex align-items-center">
            <form method="POST" action="{{ route('register') }}" class="p-5 mx-auto landr">
                @csrf
                <h2 class="mb-4 text-center">Register</h2>
                <div class="form-group row">                   
                    <div class="input-group mb-3">
                        
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror p-4 mb-4" name="name" value="{{ old('name') }}" required autocomplete="email" placeholder="Full Name*">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="input-group mb-3">
                        
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror p-4 mb-4" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Mail*">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    
                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control p-4 mb-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password*">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input id="password-confirm" type="password" class="form-control p-4 mb-4" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password*">
                    </div>

                    <div class="input-group d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary p-3 mb-3">
                            {{ __('Register') }}
                        </button>

                        <p class="fs-5 text-center fw-bolder">or already have  an <a href="{{ route('login') }}" class="">account</a></p>
                    
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
