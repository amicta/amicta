@extends('layouts.app')

@section('title', 'Lomba')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="border-radius: 10px">
                    <div class="rounded-5 w-100 p-500" style="padding: 20px; font-size: 20px; color: black;">AMICTA x Skyshi
                        Fun Coding Competition</div>
                </div>
            </div>
        </div>

        @include('partials.flash')

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card h-100 d-flex justify-content-between" style="padding: 25px;">
                    <div>
                        <h4 class="text-center p-600 mb-2" style="color: black; font-size: 16px">AMICTA x Skyshi Fun Coding
                            Competition</h4>
                        <br>
                        <ul>
                            <li>Fun Competition Programming dilaksanakan pada tanggal 17 - 27 November 2022 pukul 23.59</li>
                            <li>Peserta diminta untuk membuat akun pada link dibawah ini <br>
                                <a target="_blank" style="color: #206F80"
                                    href="https://gethired.id/employee/signup">https://gethired.id/employee/signup</a>
                            </li>
                            <li>Peserta dapat melihat bussines flow pada link dibawah ini <br>
                                <a target="_blank" style="color: #206F80"
                                    href="https://drive.google.com/drive/folders/1ZTEFAIbm3tG4yUTo-e1F_CAmXXOw73rF?usp=sharing">https://drive.google.com/drive/folders/1ZTEFAIbm3tG4yUTo-e1F_CAmXXOw73rF?usp=sharing</a>
                            </li>
                            <li>Pilih kategori dibawah ini. Peserta diperbolehkan mengikuti keduanya</li>
                        </ul>
                        <div class="row my-3">
                            <div class="col-md-12 text-center">
                                <img width="50%" src="{{ asset('assets/img/flyer_ss.png') }}" alt="">
                            </div>
                        </div>
                        @if ($registeredFunCoding)
                            <div class="row">
                                <div class="col-md-6">
                                    <a target="_blank" href="https://devcode.gethired.id/challenge/fe-getjadwal-amicta"
                                        class="w-100 btn mt-2 button-base text-white">Join Front-End Programming</a>
                                </div>
                                <div class="col-md-6">
                                    <a target="_blank" href="https://devcode.gethired.id/challenge/be-getjadwal-amicta"
                                        class="w-100 btn mt-2 button-base text-white">Join Back-End Programming</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a target="_blank" href="https://chat.whatsapp.com/GS81zNkEgkTCSnUknXaFuC"
                                        class="w-100 btn mt-2 btn-warning text-white">Join Grup WhatsApp</a>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{ route('competitions.index') }}"
                                        class="w-100 btn mt-2 btn-warning text-white">Daftar Coding Competition</a>
                                </div>
                            </div>
                        @endif
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
