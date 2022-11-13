@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="card card-primary" style="border-top: 2px solid #206F80;">
        <div class="card-header">
            <h4 style="color: #206F80">Login</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" autocomplete="email" name="email" tabindex="1" required autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" tabindex="2" required>

                    <div class="float-right">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-small" style="color: #206F80;" href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                        @endif
                    </div>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember-me">Remember Me</label>

                    </div>
                </div>

                <div class="form-group">
                    <button style="background-color: #206F80; border-color:#206F80; box-shadow:0 2px 6px #9fe5f5" type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .form-group input:focus {
            border-color: #206F80;
        }
        .form-group button:hover {
            background-color: #123e48 !important;
        }
        button.btn.btn-primary:focus {
            background-color: #123e48 !important;
        }
        .control-input:checked ~ .custom-control-label::before {
            background-color: #206F80 !important;
        }
        .custom-control-input:checked ~ .custom-control-label::before {
            color: #fff;
            border-color: #206F80;
            background-color: #206F80 !important;
        }
        .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
            fill: #206F80        
        }
        .was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
            color: #206F80;
        }
        .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
            border-color: #206F80;
        }
    </style>

    @if (Route::has('register'))
        <div class="mt-5 text-muted text-center">
            Belum memiliki akun? <a style="color: #206F80;" href="{{ route('register') }}">Daftar</a>
        </div>
    @endif
@endsection
