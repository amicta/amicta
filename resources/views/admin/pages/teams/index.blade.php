@extends('admin.layouts.app')

@section('title', 'Tim Lomba')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tim Lomba</h1>
            {{-- <div class="section-header-button">
                <button class="btn btn-primary btn-icon icon-left" data-toggle="modal" data-target="#modal-add">
                    <i class="fas fa-plus"></i> Baru
                </button>
            </div> --}}
        </div>

        @include('admin.partials.flash')

        @forelse ($data['competitions'] as $competition)
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $competition->name }}</h4>
                            <div class="card-header-action">
                                <a data-collapse="#competition-{{ $competition->id }}" class="btn btn-icon btn-warning"
                                    href="#"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="collapse" id="competition-{{ $competition->id }}">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Ketua Tim</th>
                                                <th>Nama Tim</th>
                                                <th>Produk</th>
                                                {{-- <th>Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($competition->teams as $team)
                                                <tr>
                                                    <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $team->user->name }}</td>
                                                    <td @if ($team->name == 'Belum dibuat') class="text-danger" @endif>{{ $team->name }}</td>
                                                    <td>{{ $team->product }}</td>

                                                    {{-- <td>
                                                        <div class="btn-group">
                                                            <form
                                                                action="{{ route('admin.teams.destroy', ['team' => $team['id']]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-outline-danger btn-icon mx-1 delete_confirm">
                                                                    <i class="fas fa-trash"></i> Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td> --}}
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="20" class="text-center">Belum ada data</td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="row">
                <div class="col">
                    <h5 class="text-center">Belum ada lomba aktif.</h5>
                </div>
            </div>
        @endforelse

        <div class="section-body">
        </div>
    </section>
@endsection
