@extends('admin.layouts.app')

@section('title', 'Peserta Event')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Peserta Event</h1>
            {{-- <div class="section-header-button">
                <button class="btn btn-primary btn-icon icon-left" data-toggle="modal" data-target="#modal-add">
                    <i class="fas fa-plus"></i> Baru
                </button>
            </div> --}}
            <a href="{{ route('admin.participants.export') }}" class="btn btn-success btn-icon icon-left mx-2"
                target="_blank"><i class="fas fa-file-download mr-1"></i>EXPORT EXCEL</a>
        </div>

        @include('admin.partials.flash')

        @forelse ($data['events'] as $event)
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $event->name }}</h4>
                            <div class="card-header-action">
                                <a data-collapse="#event-{{ $event->id }}" class="btn btn-icon btn-warning"
                                    href="#"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="collapse" id="event-{{ $event->id }}">
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
                                            @forelse ($event->participants as $participant)
                                                <tr>
                                                    <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $participant->nim }}</td>
                                                    <td>{{ $participant->name }}</td>
                                                    <td>{{ $participant->program_study }}</td>
                                                    <td>{{ $participant->email }}</td>
                                                    <td>{{ $participant->phone }}</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            {{-- <a href="{{ route('admin.events.edit', ['event' => $event['id']]) }}" class="btn btn-sm btn-warning btn-icon">
                                                    <i class="fas fa-check"></i> Edit
                                                    </a> --}}
                                                            <form
                                                                action="{{ route('admin.participants.destroy', ['participant' => $participant['id']]) }}"
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
            </div>
        @empty
            <div class="row">
                <div class="col">
                    <h5 class="text-center">Belum ada event aktif.</h5>
                </div>
            </div>
        @endforelse

        <div class="section-body">
        </div>
    </section>
@endsection
