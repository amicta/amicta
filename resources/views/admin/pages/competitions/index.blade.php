@extends('admin.layouts.app')

@section('title', 'Lomba')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Lomba</h1>
            {{-- <div class="section-header-button">
                <button class="btn btn-primary btn-icon icon-left" data-toggle="modal" data-target="#modal-add">
                    <i class="fas fa-plus"></i> Baru
                </button>
            </div> --}}
        </div>

        @include('admin.partials.flash')

        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <h4>Basic DataTables</h4>
                    </div> --}}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Jenis</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data['competitions'] as $competition)
                                        <tr>
                                            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $competition->name }}</td>
                                            <td>{{ $competition->description }}</td>
                                            <td>{{ $competition->type }}</td>
                                            <td>
                                                @if ($competition->is_open)
                                                    <div class="badge badge-success">Open</div>
                                                @else
                                                    <div class="badge badge-danger">Closed</div>
                                                @endif
                                                @if ($competition->is_publish)
                                                    <div class="badge badge-success">Published</div>
                                                @else
                                                    <div class="badge badge-light">Archived</div>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    {{-- <a href="{{ route('admin.competitions.edit', ['competition' => $competition['id']]) }}" class="btn btn-sm btn-warning btn-icon">
                                                    <i class="fas fa-check"></i> Edit
                                                    </a> --}}
                                                    <form class="mx-1"
                                                        action="{{ route('admin.competitions.update', ['competition' => $competition['id']]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('patch')

                                                        @if ($competition['is_open'])
                                                            <input type="hidden" name="is_open" value="0" />
                                                            <button type="submit" class="btn btn-sm btn-danger btn-icon">
                                                                <i class="fas fa-times-circle"></i> Tutup
                                                            </button>
                                                        @else
                                                            <input type="hidden" name="is_open" value="1" />
                                                            <button type="submit" class="btn btn-sm btn-success btn-icon">
                                                                <i class="fas fa-check"></i> Buka
                                                            </button>
                                                        @endif

                                                    </form>

                                                    <form class="mx-1"
                                                        action="{{ route('admin.competitions.update', ['competition' => $competition['id']]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('patch')

                                                        @if ($competition['is_publish'])
                                                            <input type="hidden" name="is_publish" value="0" />
                                                            <button type="submit" class="btn btn-sm btn-danger btn-icon">
                                                                <i class="fas fa-times-circle"></i> Arsipkan
                                                            </button>
                                                        @else
                                                            <input type="hidden" name="is_publish" value="1" />
                                                            <button type="submit" class="btn btn-sm btn-success btn-icon">
                                                                <i class="fas fa-check"></i> Publish
                                                            </button>
                                                        @endif

                                                    </form>
                                                    {{-- <form
                                                        action="{{ route('admin.competitions.destroy', ['competition' => $competition['id']]) }}"
                                                        method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-outline-danger btn-icon mx-1">
                                                            <i class="fas fa-trash"></i> Hapus
                                                        </button>
                                                    </form> --}}
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
        <div class="section-body">
        </div>
    </section>

    <!-- Modal Add -->
    {{-- <div class="modal fade" tabindex="-1" role="dialog" id="modal-add">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('admin.events.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Nama*</label>
                            <input type="text" id="name" class="form-control" name="name" placeholder="Nama"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="location">Lokasi*</label>
                            <input type="text" id="location" class="form-control" name="location" placeholder="Lokasi"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="quota">Quota*</label>
                            <input type="number" id="quota" class="form-control" name="quota" placeholder="Quota"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea id="description" class="form-control" name="description" placeholder="Deskripsi" style="min-height: 100px;"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
@endsection
