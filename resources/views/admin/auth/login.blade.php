@extends('admin.layouts.auth')

@section('title', 'Admin Login')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h4>Admin Login</h4>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.login') }}" class="needs-validation" novalidate="">
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
                    @if (Route::has('admin.password.request'))
                        <a class="btn btn-link text-small" href="{{ route('admin.password.request') }}">
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
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
