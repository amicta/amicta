@extends('admin.layouts.app')

@section('title', 'Submisi')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Submisi</h1>
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
                                        <th>Lomba</th>
                                        <th>Tim</th>
                                        <th>Peserta/Ketua</th>
                                        <th>Tugas</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data['submissions'] as $submission)
                                        <tr>
                                            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $submission->competition->name }}</td>
                                            <td>{{ $submission->team->name ?? '-'}}</td>
                                            <td>{{ $submission->user->name }}</td>
                                            <td>{{ $submission->assignment->title }}</td>
                                            <td>
                                                @if ($submission->status == 'accepted')
                                                    <span class="badge badge-success">Diterima</span>
                                                @elseif ($submission->status == 'rejected')
                                                    <span class="badge badge-danger">Ditolak</span>
                                                @elseif ($submission->status == 'submited')
                                                    <span class="badge badge-primary">Dalam Review</span>
                                                @else
                                                    <span class="badge badge-warning">Belum dikumpulkan</span>
                                                @endif
                                            </td>
                                            {{-- <td>
                                                @if ($submission->assign_registered)
                                                    <div class="badge badge-success">Assigned</div>
                                                @else
                                                    <div class="badge badge-light">None</div>
                                                @endif
                                            </td> --}}
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.submissions.edit', ['submission' => $submission['id']]) }}"
                                                        class="btn btn-sm btn-warning btn-icon">
                                                        <i class="fas fa-eye"></i> Review
                                                    </a>
                                                    <form
                                                        action="{{ route('admin.submissions.destroy', ['submission' => $submission['id']]) }}"
                                                        method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
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
        <div class="section-body">
        </div>
    </section>

    <!-- Modal Add -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-add">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Lomba*</label>
                            <select class="form-control" name="competition_id" required>
                                <option value="" selected disabled hidden>Pilih Lomba</option>
                                @foreach ($data['competitions'] as $competition)
                                    <option value="{{ $competition->id }}">{{ $competition->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Kategori*</label>
                            <input type="text" id="name" class="form-control" name="name" placeholder="Nama"
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
    </div>
@endsection
