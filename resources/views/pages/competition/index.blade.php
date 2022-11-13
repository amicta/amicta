@extends('layouts.app')

@section('title', 'Lomba')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="border-radius: 10px">
                    <div class="rounded-5 w-100 p-500" style="padding: 20px; font-size: 20px; color: black;">Lomba</div>
                </div>
            </div>
        </div>

        @include('partials.flash')

        <div class="row">
            @forelse ($data['competitions'] as $competition)
                <div class="col-md-4">
                    <div class="card h-100 d-flex justify-content-between" style="padding: 25px;">
                        <div>
                            <div class="text-center p-600 mb-2" style="color: black">{{ $competition->name }}</div>
                            <div class="d-flex justify-content-center">
                                @if ($competition->type == 'product')
                                    <img src="{{ asset('assets/img/icon4.svg') }}" class="card-img-top" alt="Product Based"
                                        style="width: 100px">
                                @elseif ($competition->type == 'hackathon')
                                    <img src="{{ asset('assets/img/icon5.svg') }}" class="card-img-top" alt="Hackathon"
                                        style="width: 100px">
                                @else
                                    <img src="{{ asset('assets/img/icon6.svg') }}" class="card-img-top" alt="Fun Games"
                                        style="width: 100px">
                                @endif

                                {{-- <br>
                                <p>{{ $competition->description }}</p> --}}
                            </div>
                        </div>
                        <div>
                            <form action="{{ route('competitions.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="competition_id" value="{{ $competition->id }}">

                                @if (!$competition->categories->isEmpty())
                                    <p style="margin-bottom: 0px">Kategori Lomba</p>

                                    <select class="form-control" style="border-radius: 3px" name="category_id"
                                        required @if ($competition->is_registered) disabled @endif>

                                        <option value="" selected disabled hidden>Pilih Kategori Lomba
                                        </option>

                                        @foreach ($competition->categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if (Auth::user()->teams->isNotEmpty()) @if ($competition->teams[0]->category_id == $category->id) selected @endif
                                                @endif>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                @endif

                                @if ($competition->is_registered)
                                    <button class="w-100 btn text-white mt-4 btn-secondary" disabled>Telah Daftar</button>
                                @elseif ($competition->is_open)
                                    {{-- <button class="btn btn-primary" type="submit">Daftar</button> --}}
                                    <button type="submit" class="w-100 btn text-white mt-4 button-base">Daftar</button>
                                @else
                                    <button class="w-100 btn text-white mt-4 btn-secondary" disabled>Pendaftaran Ditutup</button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                    <h4>Belum ada lomba</h4>
                @endforelse
            </div>
        </div>
    @endsection
