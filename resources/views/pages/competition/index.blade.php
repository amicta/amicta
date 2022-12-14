@extends('layouts.app')

@section('title', 'Lomba')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="border-radius: 10px">
                    <div class="rounded-5 w-100 p-500" style="padding: 20px; font-size: 20px; color: black;">Lomba</div>
                </div>
            </div>
        </div>

        @include('partials.flash')

        <div class="row">
            @forelse ($data['competitions'] as $competition)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 d-flex justify-content-between" style="padding: 25px;">
                        <div>
                            <h4 class="text-center p-600 mb-2" style="color: black; font-size: 16px">
                                {{ $competition->name }}</h4>
                            <br>
                            <div class="d-flex justify-content-center">
                                @if ($competition->type == 'product')
                                    <img src="{{ asset('assets/img/icon4.svg') }}" class="card-img-top" alt="Product Based"
                                        style="width: 100px">
                                @elseif ($competition->type == 'hackathon')
                                    <img src="{{ asset('assets/img/icon5.svg') }}" class="card-img-top" alt="Hackathon"
                                        style="width: 100px">
                                @else
                                    <img src="{{ asset('assets/img/icon6.svg') }}" class="card-img-top" alt="Fun Games"
                                        style="width: 100px">
                                @endif
                            </div>
                            <br>
                            <p>{{ $competition->description }}</p>
                        </div>
                        <div>
                            <form action="{{ route('competitions.store') }}" method="POST">
                                @csrf

                                <input type="hidden" name="competition_id" value="{{ $competition->id }}">

                                @if (!$competition->categories->isEmpty())
                                    <p class="p-700" style="margin-bottom: 0px">Kategori Lomba</p>

                                    <select class="form-control @error('category_id') is-invalid @enderror" style="border-radius: 3px" name="category_id" required
                                        @if ($competition->is_registered) disabled @endif>

                                        <option value="" selected disabled hidden>
                                            Pilih Kategori Lomba
                                        </option>

                                        @foreach ($competition->teams as $team)
                                            <option selected disabled hidden>{{ $team->category->name }}</option>
                                        @endforeach

                                        @foreach ($competition->user_categories as $category)
                                            <option selected disabled hidden>{{ $category->name }}</option>
                                        @endforeach

                                        @foreach ($competition->categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($category->is_publish == false) disabled hidden @endif>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                @else
                                    <input type="hidden" name="category_id" value="0">
                                @endif

                                @if ($competition->is_registered)
                                    <button class="w-100 btn text-white mt-4 btn-secondary" disabled>Telah Daftar</button>
                                @elseif ($competition->is_open)
                                    <button type="submit"
                                        class="w-100 btn text-white mt-4 button-base register_confirm">Daftar</button>
                                @else
                                    <button class="w-100 btn text-white mt-4 btn-secondary" disabled>
                                        Pendaftaran Ditutup
                                    </button>
                                @endif
                            </form>
                            @if ($competition->type == 'product')
                                <a target="_blank" href="https://ungu.in/product-based"
                                    class="w-100 btn mt-2 button-base-outline">Detail</a>
                            @elseif ($competition->type == 'hackathon')
                                <a target="_blank" href="https://ungu.in/hackathon"
                                    class="w-100 btn mt-2 button-base-outline">Detail</a>
                            @else
                                <a target="_blank" href="{{ route('funcoding') }}" class="w-100 btn mt-2 button-base-outline">Detail</a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <h4>Belum ada lomba</h4>
            @endforelse
        </div>
    </div>
@endsection

@push('javascript')
    <script>
        $('.register_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah kamu yakin ingin mendaftar lomba ini?`,
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
