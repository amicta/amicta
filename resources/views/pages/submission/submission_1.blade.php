@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="border-radius: 10px">
                <div class="rounded-5 w-100 p-500" style="padding: 20px; font-size: 20px; color: black;">Submisi: Tahap 1 - Pengumpulan Berkas</div>
            </div>
        </div>
    </div>
    <div class="row submission">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="padding: 25px;">
                        <div class="p-500 mb-2" style="color: black">Penjelasan</div>
                        <p>1</p>
                    </div>
                </div>                
                <div class="col-md-12">
                    <div class="card" style="padding: 25px;">
                        <div class="p-500 mb-2" style="color: black">Reviewer Note</div>
                        <p>good</p>
                    </div>
                </div>                
                <div class="col-md-12">
                    <div class="card" style="padding: 25px;">
                        <p style="border: 1px solid #6c757d; padding: 10px; border-radius: 3px;">good</p>
                    </div>
                </div>                
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="padding: 25px;">
                <div class="p-500 mb-2" style="color: black">Diberikan kepada kamu</div>
                <p>4 hari yang lalu</p>
                <div class="p-500 mb-2" style="color: black">Terkhir diperbarui</div>
                <p>2022-08-12</p>
                <div class="p-500 mb-2" style="color: black">Status</div>
                <div class="badge-green">Diterima</div>
            </div>
        </div>
    </div>
</div>
@endsection

