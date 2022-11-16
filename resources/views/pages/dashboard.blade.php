@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div id="dashboard" class="container section">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card section-header" style="border-radius: 10px;align-items: unset; margin-bottom: unset;">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="row dashboard">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Lomba</h2>
                    <p class="section-lead">Berikut Adalah Lomba  yang anda Ikuti</p>
                    <ul class="list-group">
                        <li class="list-group-item">Product Based - Kategori Lomba</li>
                        <li class="list-group-item">Hackaton</li>
                        <li class="list-group-item">Fun Tech Games - Kategori Lomba</li>
                    </ul>
                </div>               
                <div class="col-md-12">
                    <h2 class="section-title">Tim Saya</h2>
                    <p class="section-lead">Informasi tim kamu</p>
                    <div class="card">
                        <div class="card-header">
                            <h4 style="color: black">Product Based</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr style="background-color: transparent">
                                    <td class="align-top" style="color: black">Nama</td>
                                    <td class="align-top">Dland Studio</td>
                                </tr>
                                <tr style="background-color: transparent">
                                    <td class="align-top" style="color: black">Kategori</td>
                                    <td class="align-top">Animasi</td>
                                </tr>
                                <tr style="background-color: transparent">
                                    <td class="align-top" style="color: black">Email</td>
                                    <td class="align-top">ikhbaadnet@gmail.com</td>
                                </tr>
                                <tr style="background-color: transparent">
                                    <td class="align-top" style="color: black">Ketua</td>
                                    <td class="align-top">Fauzan Ganteng</td>
                                </tr>
                                <tr style="background-color: transparent">
                                    <td class="align-top" style="color: black">Anggota</td>
                                    <td class="align-top">
                                        <div class="">Mutul sudarsono</div>
                                        <div class="">Mutul sudarsono</div>
                                        <div class="">Mutul sudarsono</div>
                                    </td>
                                </tr>
                            </table>        
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 style="color: black">Hackathon</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr style="background-color: transparent">
                                    <td class="align-top" style="color: black">Nama</td>
                                    <td class="align-top">Dland Studio</td>
                                </tr>
                                <tr style="background-color: transparent">
                                    <td class="align-top" style="color: black">Kategori</td>
                                    <td class="align-top">Animasi</td>
                                </tr>
                                <tr style="background-color: transparent">
                                    <td class="align-top" style="color: black">Email</td>
                                    <td class="align-top">ikhbaadnet@gmail.com</td>
                                </tr>
                                <tr style="background-color: transparent">
                                    <td class="align-top" style="color: black">Ketua</td>
                                    <td class="align-top">Fauzan Ganteng</td>
                                </tr>
                                <tr style="background-color: transparent">
                                    <td class="align-top" style="color: black">Anggota</td>
                                    <td class="align-top">
                                        <div class="">Mutul sudarsono</div>
                                        <div class="">Mutul sudarsono</div>
                                        <div class="">Mutul sudarsono</div>
                                    </td>
                                </tr>
                            </table>        
                        </div>
                    </div>
                </div>               
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Pusat Bantuan</h2>
                    <p class="section-lead">Perlu bantuan ? kami akan membantumu melalui tautan berikut</p>
                    <div class="card">
                        <ul class="list-group">
                            <li class="gap-1 list-group-item d-flex justify-content-between align-items-center">
                                <a style="color: #6c757d" target="_blank" href="http://wa.me/6281235493328">CP Bantuan</a>
                                <a class="badge-green" target="_blank" href="http://wa.me/6281235493328">Tersedia</a>
                            </li>
                            <li class="gap-1 list-group-item d-flex justify-content-between align-items-center">
                                <a style="color: #6c757d" target="_blank" href="#">Rulebook Peserta Lomba</a>
                                <a class="badge-green" target="_blank" href="#">Tersedia</a>
                            </li>
                        </ul>    
                    </div>
                </div> 
                <div class="col-md-12">
                    <h2 style="margin-top: unset;" class="section-title">Menunggu Submisi</h2>
                    <p class="section-lead">Permintaan submisi lomba berikut menunggu kamu untuk di respon</p>
                    <div class="card">
                        <div class="card-header">
                            <h4 style="color: black">Product Based</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-col">
                                    <span>Tahap 2 : Pengumpulan Pitch Deck & Video</span>
                                    <span class="badge-yellow">Menunggu Respon</span>
                                </li>
                            </ul>    
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 style="color: black">Hackathon</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-col">
                                    <span>Tahap 1 : Upload Submisi dan Menambahkan Tim</span>
                                    <span class="badge-yellow">Menunggu Respon</span>
                                </li>
                            </ul>    
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection

