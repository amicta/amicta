@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div id="dashboard" class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="border-radius: 10px">
                <div class="rounded-5 w-100 p-500" style="padding: 20px; font-size: 20px; color: black;">Dashboard</div>
            </div>
        </div>
    </div>
    <div class="row dashboard">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-500" style="color: black"><span><img style="width: 30px; margin-right: 5px" src="{{ asset('assets/img/icon-line.svg')}}" alt=""></span>Lomba</div>
                    <p>Berikut Adalah Lomba  yang anda Ikuti</p>
                    <table class="table table-bordered rounded">
                        <tr>
                            <td style="border-bottom: 1px solid #dee2e6" class="d-flex justify-content-between align-items-center">
                                Product Based - Kategori Lomba
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom: 1px solid #dee2e6" class="d-flex justify-content-between align-items-center">
                                Hackaton
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom: 1px solid #dee2e6" class="d-flex justify-content-between align-items-center">
                                Fun Tech Games - Kategori Lomba
                            </td>
                        </tr>
                    </table>
                </div>               
                <div class="col-md-12">
                    <div class="p-500" style="color: black"><span><img style="width: 30px; margin-right: 5px" src="{{ asset('assets/img/icon-line.svg')}}" alt=""></span>Tim Saya</div>
                    <p>Informasi tim kamu</p>
                    <div class="p-500 p-600" style="color: black">Product Based</div>
                    <table class="table">
                        <tr style="background-color: transparent">
                            <td style="color: black">Nama</td>
                            <td>Dland Studio</td>
                        </tr>
                        <tr style="background-color: transparent">
                            <td style="color: black">Kategori</td>
                            <td>Animasi</td>
                        </tr>
                        <tr style="background-color: transparent">
                            <td style="color: black">Email</td>
                            <td>ikhbaadnet@gmail.com</td>
                        </tr>
                        <tr style="background-color: transparent">
                            <td style="color: black">Ketua</td>
                            <td>Fauzan Ganteng</td>
                        </tr>
                        <tr style="background-color: transparent">
                            <td style="color: black">Anggota</td>
                            <td>
                                <div class="">Mutul sudarsono</div>
                                <div class="">Mutul sudarsono</div>
                                <div class="">Mutul sudarsono</div>
                            </td>
                        </tr>
                    </table>

                    <div class="p-500 p-600" style="color: black">Hackathon</div>
                    <table class="table">
                        <tr style="background-color: transparent">
                            <td style="color: black">Nama</td>
                            <td>Dland Studio</td>
                        </tr>
                        <tr style="background-color: transparent">
                            <td style="color: black">Kategori</td>
                            <td>Animasi</td>
                        </tr>
                        <tr style="background-color: transparent">
                            <td style="color: black">Email</td>
                            <td>ikhbaadnet@gmail.com</td>
                        </tr>
                        <tr style="background-color: transparent">
                            <td style="color: black">Ketua</td>
                            <td>Fauzan Ganteng</td>
                        </tr>
                        <tr style="background-color: transparent">
                            <td style="color: black">Anggota</td>
                            <td>
                                <div class="">Mutul sudarsono</div>
                                <div class="">Mutul sudarsono</div>
                                <div class="">Mutul sudarsono</div>
                            </td>
                        </tr>
                    </table>
                </div>               
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-500" style="color: black"><span><img style="width: 30px; margin-right: 5px" src="{{ asset('assets/img/icon-line.svg')}}" alt=""></span>Pusat Bantuan</div>
                    <p>Perlu bantuan ? kami akan membantumu melalui tautan berikut</p>
                    <table class="table table-bordered rounded">
                        <tr>
                            <td style="border-bottom: 1px solid #dee2e6" class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a style="color: #6c757d" target="_blank" href="http://wa.me/6281235493328">CP Bantuan</a>
                                </div>
                                <a class="badge-green" target="_blank" href="http://wa.me/6281235493328">Tersedia</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom: 1px solid #dee2e6" class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a style="color: #6c757d" target="_blank" href="#">Rulebook Peserta Lomba</a>
                                </div>
                                <a class="badge-green" target="_blank" href="#">Tersedia</a>
                            </td>
                        </tr>
                    </table>
                </div> 
                <div class="col-md-12 dashboard-submission">
                    <div class="p-500" style="color: black"><span><img style="width: 30px; margin-right: 5px" src="{{ asset('assets/img/icon-line.svg')}}" alt=""></span>Menunggu Submisi</div>
                    <p>Permintaan submisi lomba berikut menunggu kamu untuk di respon</p>
                    <table class="table table-bordered rounded">
                        <div class="p-500 mb-2" style="color: black">Product Based</div>
                        <tr>
                            <td style="gap: 10px; border-bottom: 1px solid #dee2e6" class="d-flex justify-content-between align-items-center">
                                <div>
                                    Tahap 2 : Pengumpulan Pitch Deck & Video
                                </div>
                                <div class="badge-yellow">Menunggu Respon</div>
                            </td>
                        </tr>
                    </table>
                    <table class="table table-bordered rounded">
                        <div class="p-500 mb-2" style="color: black">Hackathon</div>
                        <tr>
                            <td style="gap: 10px; border-bottom: 1px solid #dee2e6" class="d-flex justify-content-between align-items-center">
                                <div>
                                    Tahap 2 : Upload Submisi dan Menambahkan Tim
                                </div>
                                <div class="badge-yellow">Menunggu Respon</div>
                            </td>
                        </tr>
                    </table>
                </div> 
            </div>
        </div>
    </div>
@endsection

