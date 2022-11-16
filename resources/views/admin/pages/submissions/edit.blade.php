@extends('admin.layouts.app')

@section('title', 'Review Submisi')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Submisi: {{ $submission->assignment->title }}</h1>
        </div>
        <div class="section-body">
            <form action="{{ route('admin.submissions.update', ['submission' => $submission->id]) }}" method="POST">
                @csrf
                @method('patch')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="content">Lomba</label>
                                    <input readonly type="text" id="competition" name="competition"
                                        class="form-control"
                                        value="{{ $submission->competition->name }}" required />
                                </div>
                                @if ($submission->competition->type == 'product')
                                <div class="form-group">
                                    <label for="content">Kategori</label>
                                    <input readonly type="text" id="category" name="category"
                                    class="form-control"
                                    value="{{ $submission->team->category->name }}" required />
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="description">Penjelasan</label>
                                    <textarea readonly id="description" name="description" class="form-control" style="min-height: 150px;" required>{{ $submission->assignment->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                @if($submission->competition->type == 'product')
                                <div class="form-group">
                                    <label for="content">Tim</label>
                                    <input readonly type="text" id="team" name="team" class="form-control"
                                    value="{{ $submission->team->name }}" required />
                                </div>
                                @else
                                <div class="form-group">
                                    <label for="content">Peserta</label>
                                    <input readonly type="text" id="participant" name="participant" class="form-control"
                                    value="{{ $submission->user->name }}" required />
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="response">Respon</label>
                                    <textarea readonly id="response" name="response" class="form-control" style="min-height: 246px;" required>{{ $submission->response }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="reviewer_note">Reviewer Note</label>
                            <textarea id="reviewer_note" name="reviewer_note" class="form-control @error('reviewer_note') is-invalid @enderror"
                                style="min-height: 100px;" placeholder="Berikan catatan (opsional)...">{{ old('reviewer_note') ?? $submission->reviewer_note }}</textarea>
                            <div class="invalid-feedback">
                                {{ $errors->first('reviewer_note') }}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('admin.submissions.index') }}" class="btn btn-default">Batalkan</a>
                        <button type="submit" class="btn btn-success" name="status" value="accepted">Simpan +
                            Terima</button>
                        <button type="submit" class="btn btn-danger" name="status" value="rejected">Simpan +
                            Tolak</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
