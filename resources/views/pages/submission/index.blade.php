@extends('layouts.app')

@section('title', 'Submisi')

@section('content')
    <div id="submission" class="container" style="color: black">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="border-radius: 10px">
                    <div class="rounded-5 w-100 p-500" style="padding: 20px; font-size: 20px; color: black;">Submission</div>
                </div>
            </div>
        </div>

        @include('partials.flash')

        <div class="row">
            <div class="col-md-12">
                <div class="text-base p-500">Submission</div>
                <p>Melalui halaman ini, kami sewaktu-waktu akan mengirimkan permintaan submisi yang harus kamu penuhi.
                    Bisa berupa pertanyaan-jawaban, pengumpulan link submisi, dan sebagainya.</p>
            </div>
        </div>

        @forelse ($data['competitions'] as $competition)
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $competition->name }}</h4>
                            <div class="card-header-action">
                                <a data-collapse="#quests-issued" class="btn btn-icon btn-warning" href="#"><i
                                        class="fas fa-minus"></i></a>
                            </div>
                        </div>
                        <div class="collapse show" id="quests-issued">
                            <div class="card-body">
                                <div class="list-group">
                                    @foreach ($competition->submissions as $submission)
                                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-1">
                                                    {{ $submission->assignment->title }}

                                                    @if ($submission->status == 'accepted')
                                                        <span class="badge badge-success">Diterima</span>
                                                    @elseif ($submission->status == 'rejected')
                                                        <span class="badge badge-danger">Ditolak</span>
                                                    @elseif ($submission->status == 'submited')
                                                        <span class="badge badge-primary">Dalam Review</span>
                                                    @else
                                                        <span class="badge badge-warning">Belum dikumpulkan</span>
                                                    @endif
                                                </h6>

                                                @if ($submission->status == 'assigned')
                                                    <a href="{{ route('submissions.edit', ['submission' => $submission->id]) }}"
                                                        class="btn btn-sm btn-warning">Lihat</a>
                                                @else
                                                    <a href="{{ route('submissions.show', ['submission' => $submission->id]) }}"
                                                        class="btn btn-sm btn-primary">Lihat</a>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @empty
            <h4>Belum mendaftar lomba</h4>
        @endforelse
    </div>
@endsection
