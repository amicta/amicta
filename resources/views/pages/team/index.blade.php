@extends('layouts.app')

@section('title', 'Tim Lomba')

@section('content')
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="border-radius: 10px">
                    <div class="rounded-5 w-100 p-500" style="padding: 20px; font-size: 20px; color: black;">Tim Lomba</div>
                </div>
            </div>
        </div>
        {{-- <div class="section-header" style="border-radius: 10px;">
            <h1>Tim Lomba</h1>
        </div> --}}

        @include('partials.flash')

        <div class="section-body">
            @if ($data['team'])
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 style="color: black">Tim Lomba Product Based - {{ $team->category->name }}</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('teams.update', ['team' => $data['team']->id]) }}" method="POST">
                                    @csrf
                                    @method('put')

                                    <div class="form-group">
                                        <label for="name">Nama Tim*</label>

                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name"
                                            @if ($data['team']->name == 'Belum dibuat') value="{{ old('name') }}" required
                                        @else
                                            value="{{ $data['team']->name }}" disabled @endif>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="product">Nama Produk*</label>

                                        <input type="text" class="form-control @error('product') is-invalid @enderror"
                                            id="product" name="product"
                                            @if ($data['team']->name == 'Belum dibuat') value="{{ old('product') }}" required
                                        @else
                                            value="{{ $data['team']->product }}" disabled @endif>

                                        @error('product')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Deskripsi Produk</label>
                                        @if ($data['team']->name == 'Belum dibuat')
                                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                                                style="min-height: 100px;">{{ old('description') }}</textarea>
                                        @else
                                            <textarea id="description" class="form-control" name="description" style="min-height: 100px;" disabled>{{ $data['team']->description }}</textarea>
                                        @endif
                                    </div>

                                    <div class="section-title mt-0">Ketua Tim</div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="member-nim">NIM*</label>
                                            <input type="text" class="form-control" id="member-nim"
                                                placeholder="xx.xx.xxxx" required value="{{ $data['user']->nim }}"
                                                disabled>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label for="member-name">Nama*</label>
                                            <input type="text" class="form-control" id="member-name"
                                                placeholder="Nama Lengkap" required value="{{ $data['user']->name }}"
                                                disabled>
                                        </div>
                                    </div>

                                    <div class="section-title mt-0">Anggota 1</div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="member-nim">NIM*</label>
                                            <input type="text"
                                                class="form-control @error('member[0]') is-invalid @enderror"
                                                id="member-nim" name="member[0][nim]" placeholder="xx.xx.xxxx" required
                                                @if ($data['team']->name != 'Belum dibuat') value="{{ $data['team']->member[0]['nim'] }}" disabled @endif>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label for="member-name">Nama*</label>
                                            <input type="text"
                                                class="form-control @error('member[0]') is-invalid @enderror"
                                                id="member-name" name="member[0][name]" placeholder="Nama Lengkap" required
                                                @if ($data['team']->name != 'Belum dibuat') value="{{ $data['team']->member[0]['name'] }}" disabled @endif>
                                        </div>

                                        @error('member[0]')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    @if (!empty($data['team']->member[1]) || $data['team']->name == 'Belum dibuat')
                                        <div class="section-title mt-0">Anggota 2</div>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="member2-nim">NIM</label>
                                                <input type="text" class="form-control" id="member2-nim"
                                                    name="member[1][nim]" placeholder="xx.xx.xxxx"
                                                    @if ($data['team']->name != 'Belum dibuat') value="{{ $data['team']->member[1]['nim'] }}" disabled @endif>
                                            </div>
                                            <div class="form-group col-md-9">
                                                <label for="member2-name">Nama</label>
                                                <input type="text" class="form-control" id="member2-name"
                                                    name="member[1][name]" placeholder="Nama Lengkap"
                                                    @if ($data['team']->name != 'Belum dibuat') value="{{ $data['team']->member[1]['name'] }}" disabled @endif>
                                            </div>
                                        </div>
                                    @endif

                                    @if ($data['team']->name == 'Belum dibuat')
                                        <button
                                            style="background-color: #206F80; border-color:#206F80; box-shadow:0 2px 6px #9fe5f5"
                                            class="btn btn-primary float-right save_confirm" type="submit">Simpan</button>
                                    @endif

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    @else
        <div class="alert alert-danger }} alert-has-icon show fade">
            <div class="alert-icon">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            Kamu belum mengikuti Lomba Product Based
        </div>
        @endif
    </section>
    <style>
        button.btn.btn-primary:focus {
            background-color: #123e48 !important;
        }

        button.btn.btn-primary:hover {
            background-color: #123e48 !important;
        }
    </style>
@endsection

@push('javascript')
    <script>
        $('.save_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah kamu yakin data Tim sudah benar?`,
                    text: "Data Tim tidak bisa diubah lagi.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willConfirm) => {
                    if (willConfirm) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
