@extends('layouts.app')

@section('title', 'Tim Lomba')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Tim Lomba</h1>
        </div>

        @include('partials.flash')

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    @if ($data['team'])
                        <div class="card">
                            <div class="card-header">
                                <h4>Tim Lomba Product Based - {{ $team->category->name }}</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('teams.update', ['team' => $data['team']->id]) }}" method="POST">
                                    @csrf
                                    @method('put')

                                    <div class="form-group">
                                        <label for="name">Nama Tim*</label>

                                        <input type="text" class="form-control" id="name" name="name"
                                            @if ($data['team']->name == 'Belum dibuat') value="{{ old('name') }}"
                                        @else
                                            value="{{ $data['team']->name }}" disabled @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="product">Nama Produk*</label>

                                        <input type="text" class="form-control" id="product" name="product"
                                            @if ($data['team']->name == 'Belum dibuat') value="{{ old('product') }}"
                                        @else
                                            value="{{ $data['team']->product }}" disabled @endif>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Deskripsi Produk</label>
                                        @if ($data['team']->name == 'Belum dibuat')
                                            <textarea id="description" class="form-control" name="description" style="min-height: 100px;">{{ old('description') }}</textarea>
                                        @else
                                            <textarea id="description" class="form-control" name="description" style="min-height: 100px;" disabled>{{ $data['team']->description }}</textarea>
                                        @endif
                                    </div>

                                    <div class="section-title mt-0">Anggota 1</div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="member-nim">NIM*</label>
                                            <input type="text" class="form-control" id="member-nim" name="member[0][nim]"
                                                placeholder="xx.xx.xxxx"
                                                @if ($data['team']->name != 'Belum dibuat') value="{{ $data['team']->member[0]['nim'] }}" disabled @endif>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label for="member-name">Nama*</label>
                                            <input type="text" class="form-control" id="member-name"
                                                name="member[0][name]" placeholder="Nama Lengkap"
                                                @if ($data['team']->name != 'Belum dibuat') value="{{ $data['team']->member[0]['name'] }}" disabled @endif>
                                        </div>
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

                            </div>
                            <div class="card-footer">
                                @if ($data['team']->name == 'Belum dibuat')
                                    <button class="btn btn-primary">Submit</button>
                                @endif
                            </div>
                            </form>
                        </div>
                    @else
                        <h4>Belum mengikuti lomba</h4>
                    @endif
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
