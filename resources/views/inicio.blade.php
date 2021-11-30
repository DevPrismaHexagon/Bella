@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row" id="inicio">
        <div class="row presentation mx-auto my-auto">
            <div class="caja p-5 col-md-12">
                <h2 class="mb-5">Welcome Back</h2>
                <a href="{{ route('login') }}" class="btn btn-primary p-3 text-center mb-4">Sign in</a>
                <a href="{{ route('register') }}" class="btn btn-primary p-3 text-center mb-4">Sign up</a>
                <!-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif -->
            </div>
        </div>
    </div>
</div>
@endsection

