@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="border-radius: 10px">
                <div class="rounded-5 w-100 p-500" style="padding: 20px; font-size: 20px; color: black;">Lomba</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card h-100 d-flex justify-content-between" style="padding: 25px;">
                <div>
                    <div class="text-center p-600 mb-2" style="color: black">Product Base</div>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/img/icon4.svg') }}" class="card-img-top" alt="Hackathon" style="width: 100px">
                    </div>
                </div>
                <div>
                    <p style="margin-bottom: 0px">Kategori Lomba</p>
                    <form action="" method="post">
                        <select style="border-radius: 3px" class="form-select select" id="productBase">
                            <option disabled selected>Pilih kategori</option>
                            <option value="artificialintelligence">Artificial Intelligence</option>
                            <option value="internetofthings">Internet Of Things</option>
                            <option value="arvr">AR/VR</option>
                            <option value="animasi">Animasi</option>
                          </select>
    
                        <button type="submit" class="w-100 btn text-white mt-4 button-base">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 d-flex justify-content-between" style="padding: 25px;">
                <div>
                    <div class="text-center p-600 mb-2" style="color: black">Hackathon</div>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/img/icon5.svg') }}" class="card-img-top" alt="Hackathon" style="width: 100px">
                    </div>
                </div>
                <div>
                    <form action="" method="post">
                        <button type="submit" class="w-100 btn text-white mt-4 button-base">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 d-flex justify-content-between" style="padding: 25px;">
                <div>
                    <div class="text-center p-600 mb-2" style="color: black">Fun Tech Games</div>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/img/icon6.svg') }}" class="card-img-top" alt="Hackathon" style="width: 100px">
                    </div>
                </div>
                <div>
                    <p style="margin-bottom: 0px">Kategori Lomba</p>
                    <form action="" method="post">
                        <select style="border-radius: 3px" class="form-select select" id="productBase">
                            <option disabled selected>Pilih kategori</option>
                            <option value="fasttypingcompetition">Fast Typing Competition</option>
                            <option value="codingcompetition">Coding Competition</option>
                          </select>
    
                        <button type="submit" class="w-100 btn text-white mt-4 button-base">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

