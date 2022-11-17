@extends('admin.layouts.app')

@section('title', 'Kategori')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kategori</h1>
            <div class="section-header-button">
                <button class="btn btn-primary btn-icon icon-left" data-toggle="modal" data-target="#modal-add">
                    <i class="fas fa-plus"></i> Baru
                </button>
            </div>
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
                                        <th>Nama Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data['categories'] as $category)
                                        <tr>
                                            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $category->competition->name }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>
                                                @if ($category->is_publish)
                                                    <div class="badge badge-success">Published</div>
                                                @else
                                                    <div class="badge badge-light">Archived</div>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    {{-- <a href="{{ route('admin.categories.edit', ['category' => $category['id']]) }}" class="btn btn-sm btn-warning btn-icon">
                                                    <i class="fas fa-check"></i> Edit
                                                    </a> --}}
                                                    <form
                                                        action="{{ route('admin.categories.update', ['category' => $category['id']]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('patch')

                                                        @if ($category['is_publish'])
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

                                                    <button class="btn btn-sm btn-outline-danger btn-icon mx-1 delete_confirm"
                                                        id="test">
                                                        <i class="fas fa-trash"></i> Test
                                                    </button>

                                                    <form
                                                        action="{{ route('admin.categories.destroy', ['category' => $category['id']]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-outline-danger btn-icon mx-1 delete_confirm">
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

@push('javascript')
@endpush
