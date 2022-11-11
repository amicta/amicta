@extends('admin.layouts.app')

@section('title', 'Peserta Lomba')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Peserta Lomba</h1>
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
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Prodi</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($competition->users as $user)
                                                <tr>
                                                    <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $user->nim }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->program_study }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            {{-- <a href="{{ route('admin.users.edit', ['competition' => $competition['id']]) }}" class="btn btn-sm btn-warning btn-icon">
                                                    <i class="fas fa-check"></i> Edit
                                                    </a> --}}
                                                            <form
                                                                action="{{ route('admin.users.destroy', ['user' => $user['id']]) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-outline-danger btn-icon mx-1">
                                                                    <i class="fas fa-trash"></i> Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
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
                    <h5 class="text-center">Belum ada Lomba aktif.</h5>
                </div>
            </div>
        @endforelse

        <div class="section-body">
        </div>
    </section>
@endsection
