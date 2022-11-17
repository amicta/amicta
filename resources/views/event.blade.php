<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEMINAR AMICTA 2022 | Amikom Innovative, Creative, Technology, Awards</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/output.css') }}">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-93ZHXK6RDS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-93ZHXK6RDS');
    </script>
</head>

<body>
    {{-- floating contact person --}}
    <button onclick="buttonHandler()" title="Contact Person"
        class="fixed z-20 bottom-4 right-4 sm:bottom-6 sm:right-6 w-12 h-12 sm:w-16 sm:h-16 rounded-full drop-shadow-lg flex justify-center items-center text-white text-4xl hover:bg-gray-600 hover:drop-shadow-2xl hover:animate-bounce duration-300">
        <a target="_blank" href="http://wa.me/6281235493328">
            <img src="{{ asset('assets/img/icon-wa.png') }}" alt="Whatsapp">
        </a>
    </button>

    <section id="particles-js"></section>
    <!-- navbar -->
    <div id="navbar" class="grid grid-cols-3 items-center px-2 sm:px-12">
        <div class="w-20 lg:w-40"><a href="index.html"><img src="{{ asset('assets/img/logo-white.png') }}"
                    alt=""></a></div>
        <div class="col-span-2 justify-self-end">
            <!-- drop navbar -->
            <div class="drop z-51">
                <div class="flex justify-end">
                    <div>
                        <div class="dropdown relative">
                            <button
                                class="z-51 dropdown-toggle px-6 py-2.5 bg-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-200 hover:shadow-lg focus:bg-gray-200 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-300 active:shadow-lg active:text-black transition duration-150 ease-in-out flex items-center whitespace-nowrap"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down"
                                    class="w-2" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 320 512">
                                    <path fill="currentColor"
                                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                                </svg>
                            </button>
                            <ul class="dropdown-menu z-[51] min-w-max absolute hidden bg-white text-base float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none"
                                aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item text-xs sm:text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                        href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-xs sm:text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                        href="{{ route('event.index') }}">Seminar</a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-xs sm:text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                        href="{{ route('welcome') }}#main-issue">Lomba</a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-xs sm:text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                        href="{{ route('welcome') }}#description">Tentang</a>
                                </li>
                                <li>
                                    <a class="dropdown-item button-color rounded p-2 text-white text-xs sm:text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                        href="#">
                                        Rulebook Lomba
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- default navbar -->
            <div class="flex text-white p-700 text-center navbar">
                <div class="z-10 self-center text-xs mx-3 lg:text-sm"><a href="{{ route('welcome') }}">Home</a></div>
                <div class="z-10 self-center text-xs mx-3 lg:text-sm"><a href="{{ route('event.index') }}">Seminar</a>
                </div>
                <div class="z-10 self-center text-xs mx-3 lg:text-sm"><a
                        href="{{ route('welcome') }}#main-issue">Lomba</a></div>
                <div class="z-10 self-center text-xs mx-3 lg:text-sm"><a
                        href="{{ route('welcome') }}#description">Tentang</a></div>
                <a href="#"
                    class="z-10 self-center text-xs mx-3 lg:text-sm button-color p-3 rounded-xl shadow-md hover:bg-orange-700 hover:shadow-lg active:bg-orange-800 active:shadow-lg">
                    Rulebook Lomba
                </a>
            </div>
        </div>
    </div>

    <!-- hero -->
    <section>
        <div
            class="flex flex-col-reverse sm:grid sm:grid-cols-2 md:grid md:grid-cols-2 lg:grid lg:grid-cols-2 px-4 sm:px-12 items-center">
            <div class="text-white">
                <h1 class="font-bold text-sm sm:text-[20px] lg:text-[40px] lg:leading-[46px] p-700">MULTITRACK SEMINAR
                    AMICTA 2022</h1>
                <p class="mt-3 text-xs lg:text-sm">Empat narasumber professional industri teknologi,
                    secara paralel berbagi kisah sukses, lesson learned dalam perjalanannya menyelesaikan berbagai
                    masalah menggunakan teknologi. Inspiring and Insightful.</p>
                <div class="flex justify-start mt-3">
                    <a href="#form-daftar"
                        class="self-center button-color p-2 lg:p-3 rounded-3xl mr-6 text-xs lg:text-sm z-50">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
            <div class="w-56 sm:w-[300px] lg:w-[500px] justify-self-center mb-2 z-50"><img
                    src="{{ asset('assets/img/hero-seminar.png') }}" alt=""></div>
        </div>
        <div class="wave-white">
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
        </div>
    </section>

    <!-- form -->
    <section id="form-daftar">
        <div class="bg-white px-12 text-center">

            @if (session('status'))
                <div class="bg-green-100 rounded-lg py-5 px-6 my-10 text-base text-green-700 inline-flex items-center w-[85%]"
                    role="alert">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle"
                        class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                        </path>
                    </svg>
                    {{ session('status.message') }}
                </div>
            @endif

            @forelse ($data['events'] as $event)
                <div class="px-[8px] sm:px-[50px] lg:px-[100px]">
                    <div class="p-700 text-base sm:text-[20px] lg:text-[40px] lg:leading-[46px] pt-12">
                        Daftar {{ $event->name }}</div>
                    <div class="mt-3 sm:text-base">{{ $event->description . ' di ' . $event->location }}</div>
                    <div class="mt-3 sm:text-base">Sisa kuota peserta:
                        {{ $event->quota - $event->current_participant }}</div>
                    <br>

                    @if ($event->id == $data['events']->first()->id)
                        <div class="p-700 text-base">SESI 1</div>
                        <div class="flex flex-col sm:flex-row justify-center my-3">
                            <div class="mx-auto mb-2">
                                <div class="p-700">Track Product Development</div>
                                <div class="text-xs">How To Build Digital Product</div>
                                <div class="text-xs">Fathin - Product Manager at Gojek</div>
                            </div>
                            <div class="mx-auto">
                                <div class="p-700">Track Startup Journey</div>
                                <div class="text-xs">Startup Preneur Zillenials</div>
                                <div class="text-xs">Alwy Herfian S - CEO at Widya Robotic</div>
                            </div>
                        </div>
                    @else
                        <div class="p-700 text-base">SESI 2</div>
                        <div class="flex flex-col sm:flex-row justify-center my-3">
                            <div class="mx-auto mb-2">
                                <div class="p-700">Track Startup Journey</div>
                                <div class="text-xs">From Engineer to be Entrepreneur</div>
                                <div class="text-xs">Andrean N - CEO at WHOUSE</div>
                            </div>
                            <div class="mx-auto">
                                <div class="p-700">Track Startup Journey</div>
                                <div class="text-xs">From Engineer to be Entrepreneur</div>
                                <div class="text-xs">Delta Purna W - CEO at Qiscus</div>
                            </div>
                        </div>
                    @endif

                    <br>

                    @if ($event->is_available)
                        <form class="text-left" action="{{ route('event.register') }}" method="POST">
                            @csrf

                            <div class="form-group mb-6">
                                <label for="inputName"
                                    class="form-label text-sm sm:text-base inline-block mb-2 p-700">
                                    Nama Lengkap*</label>
                                <input type="text"
                                    class="form-control block w-full px-3 py-1.5 text-sm sm:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white @error('name') is-invalid @enderror"
                                    id="inputName" aria-describedby="nameHelp" placeholder="Masukkan nama"
                                    name="name" value="{{ old('name') }}" required>

                                @error('name')
                                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-6">
                                <label for="inputNIM"
                                    class="form-label text-sm sm:text-base inline-block mb-2 p-700">NIM*</label>
                                <input type="text"
                                    class="form-control block w-full px-3 py-1.5 text-sm sm:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white @error('nim') is-invalid @enderror"
                                    id="inputNIM" aria-describedby="nimHelp" placeholder="xx.xx.xxxx"
                                    name="nim" value="{{ old('nim') }}" required>

                                @error('nim')
                                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-6">
                                <label for="inputEmail"
                                    class="form-label text-sm sm:text-base inline-block mb-2 p-700">
                                    Email Address*
                                </label>
                                <input type="email"
                                    class="form-control block w-full px-3 py-1.5 text-sm sm:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white @error('email') is-invalid @enderror"
                                    id="inputEmail" aria-describedby="emailHelp"
                                    placeholder="example@students.amikom.ac.id" name="email"
                                    value="{{ old('email') }}" required>
                                <small id="emailHelp" class="block mt-1 text-xs text-gray-600">
                                    We'll never share your email with anyone else.
                                </small>

                                @error('email')
                                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-6">
                                <label for="inputPhone"
                                    class="form-label text-sm sm:text-base inline-block mb-2 p-700">
                                    No. Whatsapp*
                                </label>
                                <input type="tel"
                                    class="form-control block w-full px-3 py-1.5 text-sm sm:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white @error('phone') is-invalid @enderror"
                                    id="inputPhone" aria-describedby="phoneHelp" placeholder="08xxxxxxxxx"
                                    name="phone" value="{{ old('phone') }}" required>

                                @error('phone')
                                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-6">
                                <label for="inputProdi"
                                    class="form-label text-sm sm:text-base inline-block mb-2 p-700">
                                    Program Studi*
                                </label>
                                <select
                                    class="form-select appearance-none block w-full px-3 py-1.5 text-sm sm:text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white @error('program_study') is-invalid @enderror"
                                    aria-label="Default select example" name="program_study" required>
                                    <option value="" disabled selected hidden>Pilih Program Studi</option>
                                    <option value="D3 - Teknik Informatika">D3 - Teknik Informatika</option>
                                    <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                                    <option value="S1 - Akuntansi">S1 - Akuntansi</option>
                                    <option value="S1 - Arsitektur">S1 - Arsitektur</option>
                                    <option value="S1 - Geografi">S1 - Geografi</option>
                                    <option value="S1 - Ilmu Komunikasi">S1 - Ilmu Komunikasi</option>
                                    <option value="S1 - Informatika">S1 - Informatika</option>
                                    <option value="S1 - Perencanaan Wilayah dan kota">S1 - Perencanaan Wilayah dan kota
                                    </option>
                                    <option value="S1 - Teknologi Informasi">S1 - Teknologi Informasi</option>
                                    <option value="S1 - Ekonomi">S1 - Ekonomi</option>
                                    <option value="S1 - Hubungan Internasional">S1 - Hubungan Internasional</option>
                                    <option value="S1 - Ilmu Pemerintahan">S1 - Ilmu Pemerintahan</option>
                                    <option value="S1 - Kewirausahaan">S1 - Kewirausahaan</option>
                                    <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
                                    <option value="S1 - Teknik Komputer">S1 - Teknik Komputer</option>
                                    <option value="S2 - Magister Teknik Informatika">S2 - Magister Teknik Informatika
                                    </option>
                                </select>

                                @error('program_study')
                                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex justify-center">
                            </div>

                            <!-- checkbox -->
                            <div class="text-sm sm:text-base inline-block mb-2 p-700">
                                Tau informasi multitrack seminar dari mana ?
                            </div>
                            <div class="flex flex-col sm:flex-row sm:gap-4">
                                <div>
                                    <div class="form-group form-check mb-3.5">
                                        <input type="checkbox"
                                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-orange-600 checked:border-orange-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            id="poster" name="reference[]" value="Poster">
                                        <label class="form-check-label inline-block text-gray-800 text-sm sm:text-base"
                                            for="poster">Poster</label>
                                    </div>
                                    <div class="form-group form-check mb-3">
                                        <input type="checkbox"
                                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-orange-600 checked:border-orange-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            id="instagramAmicta" name="reference[]" value="Instagram @amicta.amikom">
                                        <label class="form-check-label inline-block text-gray-800 text-sm sm:text-base"
                                            for="instagramAmicta">Instagram @amicta.amikom</label>
                                    </div>
                                    <div class="form-group form-check mb-3">
                                        <input type="checkbox"
                                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-orange-600 checked:border-orange-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            id="instagramAmcc" name="reference[]" value="Instagram @amccamikom">
                                        <label class="form-check-label inline-block text-gray-800 text-sm sm:text-base"
                                            for="instagramAmcc">Instagram @amccamikom</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group form-check mb-3.5">
                                        <input type="checkbox"
                                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-orange-600 checked:border-orange-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            id="instagram" name="reference[]" value="Instagram Lain">
                                        <label class="form-check-label inline-block text-gray-800 text-sm sm:text-base"
                                            for="instagram">Instagram Lain</label>
                                    </div>
                                    <div class="form-group form-check mb-3">
                                        <input type="checkbox"
                                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-orange-600 checked:border-orange-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            id="dosen" name="reference[]" value="Dosen">
                                        <label class="form-check-label inline-block text-gray-800 text-sm sm:text-base"
                                            for="dosen">Dosen</label>
                                    </div>
                                    <div class="form-group form-check mb-3">
                                        <input type="checkbox"
                                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-orange-600 checked:border-orange-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            id="teman" name="reference[]" value="Teman">
                                        <label class="form-check-label inline-block text-gray-800 text-sm sm:text-base"
                                            for="teman">Teman</label>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="event_id" value="{{ $event->id }}">

                            <div class="flex justify-center">
                                <button type="submit"
                                    class="px-6 py-2.5 mt-6 bg-orange-600 text-white font-medium text-sm leading-tight uppercase rounded-lg shadow-md hover:bg-orange-700 hover:shadow-lg focus:bg-orange-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800 active:shadow-lg transition duration-150 ease-in-out">
                                    Daftar Sekarang
                                </button>
                            </div>
                        </form>
                    @else
                        <div class="mt-3 text-xs sm:text-base p-700">Maaf kuota peserta event ini sudah penuh.</div>
                    @endif
                </div>
            @empty
                <h2 class="text-xl sm:text-3xl p-700">Pendaftaran event belum dibuka.</h2>
            @endforelse
        </div>
        <div class="wave-green">
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
        </div>
    </section>

    <!-- pemateri -->
    <section class="px-[8px] sm:px-[50px] lg:px-[150px]">
        <div class="text-center bg-white drop-shadow-lg rounded-3xl py-6">
            <h2 class="text-xl sm:text-3xl p-700 mb-12">Pemateri</h2>

            <div id="carouselExampleCaptions" class="carousel slide relative carousel-dark" data-bs-ride="carousel">
                <div class="carousel-inner relative w-full overflow-hidden">
                    <!-- loop card data pemateri -->
                    <div class="carousel-item active relative float-left w-full">
                        <img class="rounded-full shadow-xl bg-gray-100 mb-6 mx-auto"
                            src="{{ asset('assets/img/fathin.png') }}" alt="avatar"
                            style="width: 150px; height:150px;" />
                        <div class="flex flex-wrap justify-center">
                            <div class="grow-0 shrink-0 basis-auto w-full lg:w-8/12 px-3">
                                <h5 class="text-sm sm:text-lg font-bold mb-3">Fathin Naufal - Product Manager at Gojek
                                </h5>
                                <p class="text-xs lg:text-sm font-medium text-gray-700 mb-4">
                                    Track Product Development : How to Build Digital Product
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <img class="rounded-full shadow-xl bg-gray-100 mb-6 mx-auto"
                            src="{{ asset('assets/img/alwy.png') }}" alt="avatar"
                            style="width: 150px; height:150px;" />
                        <div class="flex flex-wrap justify-center">
                            <div class="grow-0 shrink-0 basis-auto w-full lg:w-8/12 px-3">
                                <h5 class="text-sm sm:text-lg font-bold mb-3">Alwy Herfian S - CEO at Widya Robotic
                                </h5>
                                <p class="text-xs lg:text-sm font-medium text-gray-700 mb-4">
                                    Track Startup Journey : Startup Preneur Zillenials
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <img class="rounded-full shadow-xl bg-gray-100 mb-6 mx-auto"
                            src="{{ asset('assets/img/andrean.png') }}" alt="avatar"
                            style="width: 150px; height:150px;" />
                        <div class="flex flex-wrap justify-center">
                            <div class="grow-0 shrink-0 basis-auto w-full lg:w-8/12 px-3">
                                <h5 class="text-sm sm:text-lg font-bold mb-3">Andrean N - CEO at WHOUSE</h5>
                                <p class="text-xs lg:text-sm font-medium text-gray-700 mb-4">
                                    Track Startup Journey : From Engineer to be Entrepreneur
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <img class="rounded-full shadow-xl bg-gray-100 mb-6 mx-auto"
                            src="{{ asset('assets/img/delta.png') }}" alt="avatar"
                            style="width: 150px; height:150px;" />
                        <div class="flex flex-wrap justify-center">
                            <div class="grow-0 shrink-0 basis-auto w-full lg:w-8/12 px-3">
                                <h5 class="text-sm sm:text-lg font-bold mb-3">Delta Purna W - CEO at Qiscus</h5>
                                <p class="text-xs lg:text-sm font-medium text-gray-700 mb-4">
                                    Track Startup Journey : From Engineer to be Entrepreneur
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end loop data -->
                </div>
                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                    type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- footer -->
    <section>
        <div class="wave-white">
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
        </div>
        <footer class="text-center bg-white p-700 text-gray-500 p-7 sm:p-14">
            <div class="flex justify-center mb-3">
                <div class="w-8 sm:w-16 mx-2">
                    <img src="{{ asset('assets/img/amikom.png') }}" alt="">
                </div>
                <div class="w-8 sm:w-16 mx-2">
                    <img src="{{ asset('assets/img/amcc.png') }}" alt="">
                </div>
            </div>
            <div class="text-xs lg:text-sm">Contact Person : 081235493328</div>
            <div class="text-xs lg:text-sm">© 2022 AMICTA. Organized by AMCC</div>
        </footer>
    </section>

    <script src="{{ asset('assets/js/particles.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#inputNIM').mask('00.00.0000');
        });
    </script>
</body>

</html>
