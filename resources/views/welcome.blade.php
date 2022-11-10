<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMICTA 2022 | Amikom Innovative, Creative, Technology, Awards</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/output.css') }}">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
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
</head>

<body>
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
                                        href="#main-issue">Lomba</a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-xs sm:text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                        href="#description">Tentang</a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-xs sm:text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                        href="#">
                                        <div class="button-color rounded p-2 text-white">Rulebook Lomba</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- default navbar -->
            <div class="flex text-white p-700 text-center navbar">
                <div class="z-50 self-center text-xs mx-3 lg:text-sm"><a href="{{ route('welcome') }}">Home</a></div>
                <div class="z-50 self-center text-xs mx-3 lg:text-sm"><a href="{{ route('event.index') }}">Seminar</a>
                </div>
                <div class="z-50 self-center text-xs mx-3 lg:text-sm"><a href="#main-issue">Lomba</a></div>
                <div class="z-50 self-center text-xs mx-3 lg:text-sm"><a href="#description">Tentang</a></div>
                <div
                    class="z-50 self-center text-xs mx-3 lg:text-sm button-color p-3 rounded-xl shadow-md hover:bg-orange-700 hover:shadow-lg active:bg-orange-800 active:shadow-lg">
                    <a href="#">Rulebook Lomba</a>
                </div>
            </div>
        </div>
    </div>

    <!-- hero -->
    <section id="hero">
        <div
            class="flex flex-col-reverse sm:grid sm:grid-cols-2 md:grid md:grid-cols-2 lg:grid lg:grid-cols-2 px-4 sm:px-12 items-center">
            <div class="text-white text-center">
                <h1 class="font-bold text-sm sm:text-[20px] lg:text-[40px] lg:leading-[46px] p-700">Amikom Innovative,
                    Creative, Technology, Awards</h1>
                <p class="mt-3 text-[11px] sm:text-xs lg:text-sm">AMICTA 2022 adalah Kompetisi inovasi produk digital
                    tingkat fakultas ilmu komputer (FIK) untuk memecahkan masalah masyarakat Indonesia, khususnya pada
                    sektor Industri UMKM, Pertanian & Perikanan atau Antisipasi Perubahan Iklim.</p>
                <div class="button-hero flex justify-center mt-3 sm:mt-6 mb-3">
                    <!-- add href inside anchor after register is opened -->
                    <button class="z-50" data-tooltip-target="tooltip-click" data-tooltip-trigger="click"
                        type="button">
                        <a
                            class="self-center button-color p-2 lg:p-3 rounded-3xl mr-6 text-[11px] sm:text-xs lg:text-sm shadow-md hover:bg-orange-700 hover:shadow-lg active:bg-orange-800 active:shadow-lg">Login
                            Dashboard Team</a>
                    </button>
                    <!-- add href inside anchor after register is opened -->
                    <button class="z-50" data-tooltip-target="tooltip-click" data-tooltip-trigger="click"
                        type="button">
                        <a
                            class="self-center button-color p-2 lg:p-3 rounded-3xl text-[11px] sm:text-xs lg:text-sm shadow-md hover:bg-orange-700 hover:shadow-lg active:bg-orange-800 active:shadow-lg">Daftar
                            Team</a>
                    </button>
                    <!-- disable if registered is opened -->
                    <div id="tooltip-click" role="tooltip"
                        class="z-[51] inline-block absolute invisible w-64 text-sm font-light text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 transition-opacity duration-300 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                        <div
                            class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">
                            <h3 class="font-semibold text-gray-900 dark:text-white">Coming Soon</h3>
                        </div>
                        <div class="py-2 px-3">
                            <p>Tunggu sampai waktu pendaftaran dibuka ya...</p>
                        </div>
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <!-- disable if registered is opened -->

                </div>
            </div>
            <div class="w-52 sm:w-[250px] lg:w-[300px] justify-self-center mb-2 z-50"><img
                    src="{{ asset('assets/img/hero-bg.png') }}" alt=""></div>
        </div>
    </section>
    <div class="wave-white">
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </div>

    <!-- description -->
    <section id="description">
        <div class="bg-white px-12 text-center">
            <div class="flex justify-center">
                <img class="w-40 lg:w-64" src="{{ asset('assets/img/logo-normal.png') }}" alt="">
            </div>
            <div class="px-[8px] sm:px-[50px] lg:px-[200px]">
                <div class="p-700 text-sm sm:text-[20px] lg:text-[40px] lg:leading-[46px]">Apa itu AMICTA ?</div>
                <div class="mt-3 text-[11px] sm:text-xs lg:text-sm">AMICTA 2022 adalah Kompetisi inovasi produk digital
                    tingkat fakultas ilmu komputer (FIK) untuk memecahkan masalah masyarakat Indonesia, khususnya pada
                    sektor Industri UMKM, Pertanian & Perikanan atau Antisipasi Perubahan Iklim.</div>
                <br>
                <div class="text-[11px] sm:text-xs lg:text-sm">Solusi-solusi yang dilombakan harus menggunakan salah
                    satu dari empat teknologi berikut (1) Internet of Things, (2) Kecerdasan Buatan, (3) AR/VR atau (4)
                    Animasi.</div>
                <br>
                <div class="text-red-600 text-sm sm:text-[20px] lg:text-[40px] lg:leading-[46px] p-700">"Hack The
                    Future"</div>
                <div class="mt-3 text-[11px] sm:text-xs lg:text-sm">Sepuluh persen dari 2000 Mahasiswa aktif di
                    lingkungan FIK diharapkan dapat merasakan impact sekaligus berpartisipasi dalam kompetisi AMICTA
                    2022. Mahasiswa dapat berpartisipasi melalui ragam kegiatan antara lain Talkshow, Product
                    Competition, Hackathon atau Fun Tech Games.</div>
            </div>

            <div class="px-[80px] lg:px-[150px] benefit">
                <h1 class="mt-14 p-700 text-sm sm:text-2xl lg:text-5xl">Benefit Mengikuti AMICTA 2022</h1>
                <div class="mt-7 flex flex-col sm:grid sm:grid-cols-3 justify-items-center">
                    <div class="text-center mx-2 mb-6 sm:mb-0">
                        <div class="flex justify-center">
                            <img class="w-14 sm:w-20 lg:w-28" src="{{ asset('assets/img/icon7.svg') }}"
                                alt="">
                        </div>
                        <p class="mt-3 text-[11px] sm:text-xs lg:text-sm">Hadiah Jutaan Rupiah</p>
                    </div>
                    <div class="text-center mx-2 mb-6 sm:mb-0">
                        <div class="flex justify-center">
                            <img class="w-14 sm:w-20 lg:w-28" src="{{ asset('assets/img/icon8.svg') }}"
                                alt="">
                        </div>
                        <p class="mt-3 text-[11px] sm:text-xs lg:text-sm">Kesempatan Internship di Industri Technology
                            Nasional</p>
                    </div>
                    <div class="text-center mx-2 mb-6 sm:mb-0">
                        <div class="flex justify-center">
                            <img class="w-14 sm:w-20 lg:w-28" src="{{ asset('assets/img/icon9.svg') }}"
                                alt="">
                        </div>
                        <p class="mt-3 text-[11px] sm:text-xs lg:text-sm">Peluang Investasi Startup Ratusan Juta Rupiah
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="wave-green">
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
        </div>
    </section>

    <section class="text-center text-white px-[50px] lg:px-[150px]">

        <!-- multitrack seminar -->
        <h1 class="mt-6 p-700 text-sm sm:text-2xl lg:text-5xl">Multitrack Seminar AMICTA 2022</h1>
        <p class="mt-3 text-[11px] sm:text-xs lg:text-sm">Empat narasumber professional industri teknologi, secara
            paralel berbagi kisah sukses, lesson learned dalam perjalanannya menyelesaikan berbagai masalah menggunakan
            teknologi. Inspiring and Insightful.</p>
        <br>
        <p class="mt-3 text-[11px] sm:text-xs lg:text-sm">Yuks Daftar Segera!</p>
        <br>
        <div class="mt-6">
            <a class="text-xs lg:text-sm button-color p-3 rounded-xl shadow-md hover:bg-orange-700 hover:shadow-lg active:bg-orange-800 active:shadow-lg"
                href="{{ route('event.index') }}">Daftar Sekarang</a>
        </div>

        <!-- main issue -->
        <div id="main-issue">
            <h1 class="mt-14 p-700 text-sm sm:text-2xl lg:text-5xl">Main Issue</h1>
            <p class="mt-3 text-[11px] sm:text-xs lg:text-sm">Tiga topik berikut menjadi sasaran utama kasus yang perlu
                dipecahkan melalui seluruh cabang kompetisi AMICTA 2022</p>
            <div class="mt-6 grid grid-cols-3 justify-items-center">
                <div class="text-center w-14 sm:w-20 lg:w-40">
                    <img class="w-full" src="{{ asset('assets/img/icon1.png') }}" alt="">
                    <p class="mt-3 text-[11px] sm:text-xs lg:text-sm">Fenomena Perubahan Iklim</p>
                </div>
                <div class="text-center w-14 sm:w-20 lg:w-40">
                    <img class="w-full" src="{{ asset('assets/img/icon2.png') }}" alt="">
                    <p class="mt-3 text-[11px] sm:text-xs lg:text-sm">Sektor UMKM</p>
                </div>
                <div class="text-center w-14 sm:w-20 lg:w-40">
                    <img class="w-full" src="{{ asset('assets/img/icon3.png') }}" alt="">
                    <p class="mt-3 text-[11px] sm:text-xs lg:text-sm">Sektor Pertanian Dan Perikanan</p>
                </div>
            </div>
        </div>

        <!-- kompetisi -->
        <h1 class="mt-14 p-700 text-sm sm:text-2xl lg:text-5xl">COMPETITION</h1>
        <p class="mt-3 text-[11px] sm:text-xs lg:text-sm">Ajang pencarian solusi nyata atas ruang lingkup permasalahan
            yang telah ditentukan menggunakan inovasi produk digital. Produk tidak terbatas pada aplikasi Android/iOS,
            Desktop atau Web. Kompetisi dibagi menjadi tiga jalur (track) dengan rincian sebagai berikut.</p>

        <div class="mt-10">
            <div class="mb-5 bg-white p-6 rounded-3xl">
                <div class="flex flex-col sm:grid sm:grid-cols-6 gap-0.5 lg:gap-2 items-center">
                    <div class="w-16 lg:w-28 p-1 mb-2 sm:mb-0"><img src="{{ asset('assets/img/icon4.svg') }}"
                            alt=""></div>
                    <div class="col-span-5 text-black text-left">
                        <h2 class="text-center sm:text-left p-700 text-sm sm:text-lg lg:text-3xl">Product Based</h2>
                        <p class="text-[10px] sm:text-xs lg:text-sm">Mahasiswa mengunggah gagasan sekaligus prototype
                            produk. Gagasan-gagasan akan dikelompokkan dalam empat kategori berikut :</p>
                        <p class="text-[10px] sm:text-xs lg:text-sm">Artificial Intelligence, Internet Of Things,
                            AR/VR, Animasi.</p>
                    </div>
                </div>
            </div>
            <div class="mb-5 bg-white p-6 rounded-3xl">
                <div class="flex flex-col sm:grid sm:grid-cols-6 gap-0.5 lg:gap-2 items-center">
                    <div class="w-16 lg:w-28 p-1 mb-2 sm:mb-0"><img src="{{ asset('assets/img/icon5.svg') }}"
                            alt=""></div>
                    <div class="col-span-5 text-black text-left">
                        <h2 class="text-center sm:text-left p-700 text-sm sm:text-lg lg:text-3xl">Hackathon</h2>
                        <p class="text-[10px] sm:text-xs lg:text-sm">Mahasiswa mengikuti serangkaian kegiatan Hackathon
                            untuk mewujudkan Gagasan dalam rentang waktu tertentu. Pendaftaran jalur ini bersifat
                            individu dan akan melalui tahap Team Building :</p>
                        <p class="text-[10px] sm:text-xs lg:text-sm">Idea Submission, Speed Dating ( Team Building ),
                            Hackathon.</p>
                    </div>
                </div>
            </div>
            <div class="mb-5 bg-white p-6 rounded-3xl">
                <div class="flex flex-col sm:grid sm:grid-cols-6 gap-0.5 lg:gap-2 items-center">
                    <div class="w-16 lg:w-28 p-1 mb-2 sm:mb-0"><img src="{{ asset('assets/img/icon6.svg') }}"
                            alt=""></div>
                    <div class="col-span-5 text-black text-left">
                        <h2 class="text-center sm:text-left p-700 text-sm sm:text-lg lg:text-3xl">Fun Tech Games</h2>
                        <p class="text-[10px] sm:text-xs lg:text-sm">Mahasiswa dapat memvalidasi potensi skill individu
                            sekaligus membangun reputasi positif melalui aneka kegiatan berikut :</p>
                        <p class="text-[10px] sm:text-xs lg:text-sm">Fast Typing Competition, Coding Competition.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- timeline -->
        <h1 class="mt-14 p-700 text-2xl lg:text-5xl">TIMELINE</h1>
        <!-- <p class="mt-3 text-xs lg:text-sm">Tiga topik berikut menjadi sasaran utama kasus yang perlu dipecahkan melalui seluruh cabang kompetisi AMICTA 2022</p> -->
        <div class="mt-6 mb-[164px]">
            <div class="bg-white p-5 base-text p-700 text-3xl sm:text-8xl">COMING SOON</div>
        </div>
    </section>

    <!-- pemenang tahun lalu -->
    <section class="px-[8px] sm:px-[50px] lg:px-[150px] relative">
        <div
            class="text-center bg-white drop-shadow-lg rounded-3xl py-6 absolute top-[-90px] left-[10px] right-[10px] sm:left-[150px] sm:right-[150px]">
            <h2 class="text-xl sm:text-3xl p-700 mb-12">Pemenang Tahun Lalu</h2>

            <div id="carouselExampleCaptions" class="carousel slide relative carousel-dark" data-bs-ride="carousel">
                <div class="carousel-inner relative w-full overflow-hidden">
                    <!-- loop card data pemenang -->
                    <div class="carousel-item active relative float-left w-full">
                        <img class="rounded-full shadow-lg mb-6 mx-auto"
                            src="{{ asset('assets/img/comingsoon.gif') }}" alt="avatar"
                            style="width: 150px; height: 150px;" />
                        <div class="flex flex-wrap justify-center">
                            <div class="grow-0 shrink-0 basis-auto w-full lg:w-8/12 px-3">
                                <h5 class="text-sm sm:text-lg font-bold mb-3">COMING SOON</h5>
                                <p class="text-xs lg:text-sm font-medium text-gray-700 mb-4">Juara 1 ...</p>
                                <p class="text-[11px] sm:text-xs lg:text-sm text-gray-500 mb-6">
                                    Ditunggu ya untuk informasi pemenang kerennya..
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item relative float-left w-full">
                        <img class="rounded-full shadow-lg mb-6 mx-auto"
                            src="{{ asset('assets/img/comingsoon.gif') }}" alt="avatar"
                            style="width: 150px; height: 150px;" />
                        <div class="flex flex-wrap justify-center">
                            <div class="grow-0 shrink-0 basis-auto w-full lg:w-8/12 px-3">
                                <h5 class="text-sm sm:text-lg font-bold mb-3">COMING SOON</h5>
                                <p class="text-xs lg:text-sm font-medium text-gray-700 mb-4">Juara 2 ...</p>
                                <p class="text-[11px] sm:text-xs lg:text-sm text-gray-500 mb-6">
                                    Ditunggu ya untuk informasi pemenang kerennya..
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

    <!-- sponsor -->
    <section class="text-center bg-white mt-[300px] px-8 sm:px-[50px] lg:px-[150px] pt-[300px]">
        <h1 class="my-7 sm:my-14 p-700 text-sm sm:text-2xl lg:text-5xl">IN COLLABORATION WITH</h1>
        <div class="flex justify-center mb-7 sm:mb-14">
            <img class="w-[50px] sm:w-[100px] lg:w-[180px] mx-auto" src="{{ asset('assets/img/aws.png') }}"
                alt="">
            <img class="w-[50px] sm:w-[100px] lg:w-[300px] mx-auto" src="{{ asset('assets/img/vibicloud.png') }}"
                alt="">
            <img class="w-[50px] sm:w-[100px] lg:w-[180px] mx-auto" src="{{ asset('assets/img/abp.png') }}"
                alt="">
        </div>

        <h1 class="my-7 sm:my-14 p-700 text-sm sm:text-2xl lg:text-5xl">OUR COMMUNITY PARTNER</h1>
        <div id="carouselExample" class="carousel slide relative carousel-dark" data-bs-ride="carousel">
            <div class="carousel-inner relative w-full">
                <!-- loop card data media partner -->
                <div class="carousel-item active relative float-left w-full">
                    <div class="flex justify-center">
                        <img class="lg:mb-6 mx-1 sm:mx-8 w-[35px] sm:w-[50px] lg:w-[100px]"
                            src="{{ asset('assets/img/hmif.png') }}" />
                        <img class="lg:mb-6 mx-1 sm:mx-8 w-[35px] sm:w-[50px] lg:w-[100px]"
                            src="{{ asset('assets/img/fa.png') }}" />
                        <img class="lg:mb-6 mx-1 sm:mx-8 w-[35px] sm:w-[50px] lg:w-[100px]"
                            src="{{ asset('assets/img/himmi.png') }}" />
                        <img class="lg:mb-6 mx-1 sm:mx-8 w-[35px] sm:w-[50px] lg:w-[100px]"
                            src="{{ asset('assets/img/himti.png') }}" />
                        <!-- <img class="lg:mb-6 mx-1 sm:mx-8 w-[35px] sm:w-[50px] lg:w-[100px]" src="{{ asset('assets/img/hmif.png') }}" /> -->
                    </div>
                </div>
                <!-- <div class="carousel-item relative float-left w-full">
                <div class="flex justify-center">
                    <img class="lg:mb-6 mx-1 sm:mx-8 w-[35px] sm:w-[50px] lg:w-[100px]" src="{{ asset('assets/img/hmif.png') }}" />
                    <img class="lg:mb-6 mx-1 sm:mx-8 w-[35px] sm:w-[50px] lg:w-[100px]" src="{{ asset('assets/img/hmif.png') }}" />
                </div>
              </div> -->
            </div>
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <div class="wave-green">
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </div>

    <!-- faq -->
    <section class="text-center px-8 sm:px-[50px] lg:px-[150px]">
        <h1 class="text-white my-7 sm:my-14 p-700 text-base sm:text-2xl lg:text-4xl">Frequently asked questions</h1>
        <div class="bg-white p-5 base-text p-700 text-3xl sm:text-8xl">COMING SOON</div>

        <!-- <div class="accordion text-black" id="accordionExample">
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingOne">
                <button class="accordion-button relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Kak, kompetisi CODE ini dilaksanakan secara online atau offline?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-[11px] sm:text-xs lg:text-sm">
                  <strong>This is the first item's accordion body.</strong>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingTwo">
                <button class="accordion-button collapsed relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Kak, untuk mengikuti TM nanti apakah harus full team ya? atau boleh perwakilan?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-[11px] sm:text-xs lg:text-sm">
                  <strong>This is the first item's accordion body.</strong>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingThree">
                <button class="accordion-button collapsed relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Saya masih Mahasiswa baru, apakah saya boleh mengikuti kompetisi ini?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-[11px] sm:text-xs lg:text-sm">
                  <strong>This is the first item's accordion body.</strong>
                </div>
              </div>
            </div>
        </div> -->
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
            <div class="text-[11px] sm:text-xs lg:text-sm">Contact Person : 081235493328</div>
            <div class="text-[11px] sm:text-xs lg:text-sm">© 2022 AMICTA. Orginized by AMCC</div>
        </footer>
    </section>

    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="{{ asset('assets/js/particles.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>
