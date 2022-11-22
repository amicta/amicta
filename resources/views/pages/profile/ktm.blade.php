@extends('layouts.auth')

@section('title', 'KTM')

@section('content')
    <div class="card card-primary" style="border-top: 2px solid #206F80;">
        <div class="card-header">
            <h4 style="color: #206F80">Upload KTM (Kartu Tanda Mahasiswa)</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required disabled>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input id="nim" type="text" class="form-control" name="nim" value="{{ $user->nim }}"
                        placeholder="xx.xx.xxxx" required disabled>

                    @error('nim')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group" style="margin-bottom: 50px">
                    <div class="section-title">Upload File</div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('ktm') is-invalid @enderror" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                    @error('ktm')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        {{-- <a href="{{ route('welcome') }}"
                            style="background-color: #206F80; border-color:#206F80; box-shadow:0 2px 6px #9fe5f5"
                            type="submit" class="btn btn-primary">
                            <span><svg style="width: 10px; fill: white;" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                                </svg></span> Kembali
                        </a> --}}
                        <button style="background-color: #206F80; border-color:#206F80; box-shadow:0 2px 6px #9fe5f5"
                            type="submit" class="btn btn-primary">
                            Upload
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <style>
        .section .section-title:before {
            background-color: #206F80 !important;
        }

        .form-group input:focus {
            border-color: #206F80;
        }

        .custom-file-input:focus+.custom-file-label {
            box-shadow: none;
            border-color: #206F80;
        }

        input.custom-file-input:focus {
            border-color: #206F80 !important;
        }

        select#program_study.form-control:focus {
            border-color: #206F80;
        }

        button.btn.btn-primary:focus {
            background-color: #123e48 !important;
        }

        a.btn.btn-primary:focus {
            background-color: #123e48 !important;
        }

        a.btn.btn-primary:hover {
            background-color: #123e48 !important;
        }

        .form-group button:hover {
            background-color: #123e48 !important;
        }

        .form-group button:focus {
            background-color: #123e48 !important;
        }

        .control-input:checked~.custom-control-label::before {
            background-color: #206F80 !important;
        }

        .custom-control-input:checked~.custom-control-label::before {
            color: #fff;
            border-color: #206F80;
            background-color: #206F80 !important;
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
            fill: #206F80
        }
    </style>

@endsection
