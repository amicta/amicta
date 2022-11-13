@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="border-radius: 10px">
                <div class="rounded-5 w-100 p-500" style="padding: 20px; font-size: 20px; color: black;">Submisi: Tahap 2 - Pengumpulan Pitch Deck & Video</div>
            </div>
        </div>
    </div>
    <div class="row submission">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="padding: 25px;">
                        <div class="p-500 mb-2" style="color: black">Penjelasan</div>
                        <p>Selamat! tim kamu telah berhasil lolos ke tahap I. Selanjutnya untuk memenuhi persyaratan seleksi tahap II, dimohon untuk membuat video dengan detail seperti yang tertera di Rulebook. Unggah video ke kanal YouTube masing-masing dan kiriman link video tersebut ke Form Submisi dibawah.</p>
                    </div>
                </div>               
                <div class="col-md-12">
                    <div class="card" style="padding: 25px;">
                        <form action="" method="post">
                            <textarea placeholder="Paste link file submisi kamu disini" style="border: 1px solid #6c757d; padding: 10px; border-radius: 3px; width: 100%" name="submission-2" id="submission-2"></textarea>
                        </form>
                        <button style="border: none; padding: 8px" class="align-self-end button-base text-white" type="submit">Kirim Submisi</button>
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
                <div class="badge-yellow">Direview</div>
            </div>
        </div>
    </div>
</div>
@endsection

