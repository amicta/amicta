@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="border-radius: 10px">
                <div class="rounded-5 w-100 p-500" style="padding: 20px; font-size: 20px; color: black;">Submisi: {{ $submission->assignment->title }}</div>
            </div>
        </div>
    </div>
    <div class="row submission">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="padding: 25px;">
                        <div class="p-500 mb-2" style="color: black">Penjelasan</div>
                        <p>{{ $submission->assignment->description }}</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card" style="padding: 25px;">
                        <div class="p-500 mb-2" style="color: black">Reviewer Note</div>
                        <p>{{ $submission->reviewer_note }}</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card" style="padding: 25px;">
                        <p style="border: 1px solid #6c757d; padding: 10px; border-radius: 3px;">{{ $submission->response }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="padding: 25px;">
                <div class="p-500 mb-2" style="color: black">Lomba</div>
                <p>{{ $submission->assignment->competition->name }}</p>
                <div class="p-500 mb-2" style="color: black">Deadline</div>
                <p>{{ $submission->assignment->due_date }}</p>
                <div class="p-500 mb-2" style="color: black">Status</div>
                @if ($submission->status == 'accepted')
                    <span class="badge badge-success">Diterima</span>
                @elseif ($submission->status == 'rejected')
                    <span class="badge badge-danger">Ditolak</span>
                @elseif ($submission->status == 'submited')
                    <span class="badge badge-primary">Dalam Review</span>
                @else
                    <span class="badge badge-warning">Belum dikumpulkan</span>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

