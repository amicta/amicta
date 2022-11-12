@extends('layouts.auth')

@section('content')
    <div class="card card-primary" style="border-top: 2px solid #206F80;">
        <div class="card-header">{{ __('Reset Password') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" style="background-color: #206F80; border: 2px solid #206F80;">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <style>
        input#email.form-control:focus {
            border-color: #206F80 !important;
        }
        button.btn.btn-primary:hover {
            background-color: #123e48 !important;
        }
        button.btn.btn-primary:focus {
            background-color: #123e48 !important;
        }
        form button:hover {
            background-color: #123e48 !important;
        }
        .btn-primary, .btn-primary.disabled {
            box-shadow: 0 2px 6px #9fe5f5;
            background-color: #206F80;
            border-color: #206F80;
        }
    </style>
@endsection
