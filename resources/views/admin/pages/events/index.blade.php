@extends('admin.layouts.app')

@section('title', 'Event')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Event</h1>
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
                                        <th>Nama</th>
                                        <th>Lokasi</th>
                                        <th>Peserta</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data['event'] as $event)
                                        <tr>
                                            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $event->name }}</td>
                                            <td>{{ $event->location }}</td>
                                            <td class="@if(!$event->is_available) text-danger @endif">
                                                {{ $event->current_participant . ' / ' . $event->quota }}
                                            </td>
                                            <td>
                                                @if ($event->is_publish)
                                                    <div class="badge badge-success">Published</div>
                                                @else
                                                    <div class="badge badge-light">Archived</div>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    {{-- <a href="{{ route('admin.events.edit', ['event' => $event['id']]) }}" class="btn btn-sm btn-warning btn-icon">
                                                    <i class="fas fa-check"></i> Edit
                                                    </a> --}}
                                                    <form
                                                        action="{{ route('admin.events.update', ['event' => $event['id']]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('patch')

                                                        @if ($event['is_publish'])
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
                                                    <form
                                                        action="{{ route('admin.events.destroy', ['event' => $event['id']]) }}"
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
    </div>
@endsection
