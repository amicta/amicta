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
                        <p class="section-lead">Berikut Adalah Lomba yang anda Ikuti</p>
                        <ul class="list-group">
                            @forelse ($user->competitions as $competition)
                                <li class="list-group-item">{{ $competition->name}}</li>
                            @empty
                                <li class="gap-1 list-group-item d-flex justify-content-between align-items-center">
                                    Belum ada lomba apapun yang kamu ikuti
                                    <a href="{{ route('competitions.index') }}" class="btn btn-primary">Daftar</a>
                                </li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <h2 class="section-title">Tim Saya</h2>
                        <p class="section-lead">Informasi tim kamu</p>
                        @forelse ($user->teams as $team)
                            <div class="card">
                                <div class="card-header">
                                    <h4 style="color: black">{{ $team->competition->name }}</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <tr style="background-color: transparent">
                                            <td class="align-top" style="color: black">Nama Tim</td>
                                            <td class="align-top">{{ $team->name }}</td>
                                        </tr>
                                        <tr style="background-color: transparent">
                                            <td class="align-top" style="color: black">Kategori</td>
                                            <td class="align-top">{{ $team->category->name }}</td>
                                        </tr>
                                        <tr style="background-color: transparent">
                                            <td class="align-top" style="color: black">Email</td>
                                            <td class="align-top">{{ $user->email }}</td>
                                        </tr>
                                        <tr style="background-color: transparent">
                                            <td class="align-top" style="color: black">Ketua</td>
                                            <td class="align-top">{{ $team->user->name }}</td>
                                        </tr>
                                        <tr style="background-color: transparent">
                                            <td class="align-top" style="color: black">Anggota</td>
                                            <td class="align-top">
                                                <div class="">{{ $team->member[0]['name'] }}</div>
                                                @if (!empty($data['team']->member[1]))
                                                    <div class="">{{ $team->member[1]['name'] }}</div>
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        @empty
                            <ul class="list-group">
                                <li class="list-group-item">Kamu belum memiliki tim</li>
                            </ul>
                        @endforelse
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
                                    Hotline Bantuan
                                    <a href="http://wa.me/6281235493328" target="_blank" class="btn text-white button-base">Hubungi</a>
                                </li>
                                <li class="gap-1 list-group-item d-flex justify-content-between align-items-center">
                                    Rulebook Peserta Lomba
                                    <a href="https://drive.google.com/drive/folders/1ak6mo6ZH35nphXSeM-rN5uPd4h5rgKAN?usp=share_link" target="_blank" class="btn text-white button-base">Lihat</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h2 style="margin-top: unset;" class="section-title">Menunggu Submisi</h2>
                        <p class="section-lead">Permintaan submisi lomba berikut menunggu kamu untuk di respon</p>
                        @forelse ($data['competitions'] as $competition)
                            <div class="card">
                                <div class="card-header">
                                    <h4 style="color: black">{{ $competition->name }}</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        @forelse ($data['submissions']->where('competition_id', $competition->id)->where('status', 'assigned') as $submission)
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center flex-col">
                                                <span>{{ $submission->assignment->title }}</span>

                                                @if ($submission->status == 'accepted')
                                                    <span class="badge badge-success">Diterima</span>
                                                @elseif ($submission->status == 'rejected')
                                                    <span class="badge badge-danger">Ditolak</span>
                                                @elseif ($submission->status == 'submited')
                                                    <span class="badge badge-primary">Dalam Review</span>
                                                @else
                                                    <span class="badge badge-warning">Belum dikumpulkan</span>
                                                @endif
                                            </li>
                                        @empty
                                        <ul class="list-group">
                                            <li class="list-group-item">Belum ada submisi yang harus kamu kumpulkan</li>
                                        </ul>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        @empty
                            <ul class="list-group">
                                <li class="list-group-item">Kamu belum memiliki submisi</li>
                            </ul>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    @endsection
