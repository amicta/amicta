@extends('layouts.auth')

@section('title', 'Daftar')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4>PENDAFTARAN AMICTA</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Nama Lengkap*</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="nim">NIM*</label>
                        <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror"
                            name="nim" value="{{ old('nim') }}" placeholder="xx.xx.xxxx" required>

                        @error('nim')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                        <label for="program_study">Program Studi*</label>
                        <select id="program_study" class="form-control @error('program_study') is-invalid @enderror"
                            name="program_study" required>
                            <option value="" disabled selected hidden>Pilih Program Studi</option>
                            <option value="D3 - Teknik Informatika">D3 - Teknik Informatika</option>
                            <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                            <option value="S1 - Akuntansi">S1 - Akuntansi</option>
                            <option value="S1 - Arsitektur">S1 - Arsitektur</option>
                            <option value="S1 - Geografi">S1 - Geografi</option>
                            <option value="S1 - Ilmu Komunikasi">S1 - Ilmu Komunikasi</option>
                            <option value="S1 - Informatika">S1 - Informatika</option>
                            <option value="S1 - Perencanaan Wilayah dan kota">S1 - Perencanaan Wilayah dan kota</option>
                            <option value="S1 - Teknologi Informasi">S1 - Teknologi Informasi</option>
                            <option value="S1 - Ekonomi">S1 - Ekonomi</option>
                            <option value="S1 - Hubungan Internasional">S1 - Hubungan Internasional</option>
                            <option value="S1 - Ilmu Pemerintahan">S1 - Ilmu Pemerintahan</option>
                            <option value="S1 - Kewirausahaan">S1 - Kewirausahaan</option>
                            <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
                            <option value="S1 - Teknik Komputer">S1 - Teknik Komputer</option>
                            <option value="S2 - Magister Teknik Informatika">S2 - Magister Teknik Informatika</option>
                        </select>

                        @error('program_study')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="email">Email*</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" placeholder="example@students.amikom.ac.id" required>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                        <label for="phone">Nomor WhatsApp*</label>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                            name="phone" value="{{ old('phone') }}" placeholder="08XXXXXXXXXX" required>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="password" class="d-block">Password*</label>
                        <input id="password" type="password"
                            class="form-control pwstrength @error('password') is-invalid @enderror"
                            data-indicator="pwindicator" name="password" required autocomplete="new-password">
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group col-6">
                        <label for="password2" class="d-block">Konfirmasi Password*</label>
                        <input id="password2" type="password" class="form-control" name="password_confirmation" required
                            autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                        <label class="custom-control-label" for="agree">Saya berkomitmen akan mengikuti seluruh rangkaian
                            kegiatan
                            AMICTA hingga selesai</label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
