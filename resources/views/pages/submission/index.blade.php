@extends('layouts.app')

@section('content')
<div id="submission" class="container" style="color: black">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="border-radius: 10px">
                <div class="rounded-5 w-100 p-500" style="padding: 20px; font-size: 20px; color: black;">Submission</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-base p-500">Submission</div>
            <p>Melalui halaman ini, Kami sewaktu-waktu mengirimkan permintaan submisi yang harus kamu upload dan isi</p>
        </div>
    </div>
        <div class="row">
            <div class="col-md-8">
                <div class="text-base p-500">Product Based</div>
                <table class="table table-bordered">
                    <tr>
                        <td style="border-bottom: 1px solid #dee2e6" class="d-flex justify-content-between align-items-center">
                            <div>
                                Tahap 2 : Pengumpulan Pitch Deck & Video
                            </div>
                            <div class="badge-yellow">
                                Direview
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex justify-content-between align-items-center">
                            <div>
                                Tahap 1 : Pengumpulan Berkas
                            </div>
                            <div class="badge-green">
                                Diterima
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="text-base p-500">Hackathon</div>
                <table class="table table-bordered">
                    <tr>
                        <td style="border-bottom: 1px solid #dee2e6" class="d-flex justify-content-between align-items-center">
                            <div>
                                Tahap 2 : Pengumpulan Pitch Deck & Video
                            </div>
                            <div class="badge-yellow">
                                Direview
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex justify-content-between align-items-center">
                            <div>
                                Tahap 1 : Pengumpulan Berkas
                            </div>
                            <div class="badge-green">
                                Diterima
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
</div>
@endsection

