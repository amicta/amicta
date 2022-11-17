@extends('layouts.app')

@section('title', 'Submisi')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="border-radius: 10px">
                    <div class="rounded-5 w-100 p-500" style="padding: 20px; font-size: 20px; color: black;">Submisi:
                        {{ $submission->assignment->title }}</div>
                </div>
            </div>
        </div>

        @include('partials.flash')

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
                            <form action="{{ route('submissions.update', ['submission' => $submission->id]) }}"
                                method="POST">
                                @csrf
                                @method('patch')
                                <label for="description">Link File Submisi</label>
                                <textarea class="form-control @error('response') is-invalid @enderror" placeholder="Paste link file submisi kamu disini"
                                    style="min-height: 100px;" name="response" id="response" required></textarea>
                                @error('response')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <button style="border: none; padding: 8px"
                                    class="align-self-end button-base text-white float-right mt-3 submit_confirm"
                                    type="submit">Kirim Submisi</button>
                            </form>
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

@push('javascript')
    <script>
        $('.submit_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah kamu yakin link file submisi sudah benar?`,
                    text: "Data tidak bisa diubah lagi.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willConfirm) => {
                    if (willConfirm) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
