@extends('layouts.app')

@section('title', 'Lomba')

@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Lomba</h1>
        </div>

        @include('partials.flash')

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    @forelse ($data['competitions'] as $competition)
                        <div class="card">

                            <div class="card-header">
                                <h4>{{ $competition->name }}</h4>
                            </div>

                            <div class="card-body">
                                @if ($competition->type == 'product')
                                    <p>Logo Product Based</p>
                                    <p>{{ $competition->description }}</p>
                                @elseif ($competition->type == 'hackathon')
                                    <p>Logo Hackathon</p>
                                    <p>{{ $competition->description }}</p>
                                @else
                                    <p>Logo Fun Games</p>
                                    <p>{{ $competition->description }}</p>
                                @endif

                                <form action="{{ route('competitions.store') }}" method="POST">
                                    @csrf

                                    <input type="hidden" name="competition_id" value="{{ $competition->id }}">

                                    @if (!$competition->categories->isEmpty())
                                        <div class="form-group">
                                            <label>Kategori Lomba</label>
                                            <select class="form-control" name="category_id" required
                                                @if ($competition->is_registered) disabled @endif>

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
                                        </div>
                                    @endif

                                    <div class="card-footer text-right">
                                        @if ($competition->is_registered)
                                            <button class="btn btn-secondary" disabled>Telah Daftar</button>
                                        @elseif ($competition->is_open)
                                            <button class="btn btn-primary" type="submit">Daftar</button>
                                        @else
                                            <button class="btn btn-secondary" disabled>Pendaftaran Ditutup</button>
                                        @endif
                                    </div>
                                </form>
                            </div>

                        </div>

                        @empty
                            <h4>Belum ada lomba</h4>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
