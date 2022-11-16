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
    {{-- floating contact person --}}
    <button onclick="buttonHandler()" title="Contact Person"
        class="fixed z-20 bottom-4 right-4 sm:bottom-6 sm:right-6 w-12 h-12 sm:w-16 sm:h-16 rounded-full drop-shadow-lg flex justify-center items-center text-white text-4xl hover:bg-gray-600 hover:drop-shadow-2xl hover:animate-bounce duration-300">
        <a target="_blank" href="http://wa.me/6281235493328">
            <img src="{{ asset('assets/img/icon-wa.png') }}" alt="Whatsapp">
        </a>
    </button>

    <!-- popup modal -->
    {{-- <div id="popup-modal" data-modal-show="true" tabindex="-1" class="z-50 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 md:inset-0 h-modal md:h-full justify-center items-center" aria-hidden="true">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                        Hai, Amictarian!
                        <br>
                        Kuota Pendaftaran terbatas!!!
                        <div class="text-left">
                            <br>
                            Jangan sampai kelewatan untuk ikut Multitrack Talkshow bersama pemateri-pemateri expert ya :)
                            <br>
                            🗓 : 15 November 2022 <br>
                            ⏱ : 09:00 - Selesai / 13:00 - selesai <br>
                            📍 : CITRA 1 <br>
                            💸 : GRATIS
                        </div>
                    </h3>
                    <a href="{{ route('event.index') }}" data-modal-toggle="popup-modal" type="button" class="mb-2 text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Daftar Sekarang
                    </a>
                    <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tutup</button>
                </div>
            </div>
        </div>
    </div> --}}


    <section id="particles-js"></section>
    <!-- navbar -->
    <div id="navbar" class="grid grid-cols-3 items-center px-2 sm:px-12 pt-3">
        <div class="w-20 lg:w-30"><a href="index.html"><img src="{{ asset('assets/img/logo-white.png') }}"
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
                <div class="z-10 self-center text-xs mx-3 lg:text-sm"><a href="#main-issue">Lomba</a></div>
                <div class="z-10 self-center text-xs mx-3 lg:text-sm"><a href="#description">Tentang</a></div>
                <a href="#" class="z-10 self-center text-xs mx-3 lg:text-sm button-color p-3 rounded-xl shadow-md hover:bg-orange-700 hover:shadow-lg active:bg-orange-800 active:shadow-lg">
                    Rulebook Lomba
                </a>
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
                <p class="mt-3 text-xs lg:text-sm">AMICTA 2022 adalah Kompetisi inovasi produk digital
                    tingkat fakultas ilmu komputer (FIK) untuk memecahkan masalah masyarakat Indonesia, khususnya pada
                    sektor Industri UMKM, Pertanian & Perikanan atau Antisipasi Perubahan Iklim.</p>
                <div class="button-hero flex justify-center mt-3 sm:mt-6 mb-3">
                    <!-- add href inside after register is opened -->
                    <a class="z-10 self-center button-color p-2 lg:p-3 rounded-3xl mr-6 text-xs lg:text-sm shadow-md hover:bg-orange-700 hover:shadow-lg active:bg-orange-800 active:shadow-lg" data-tooltip-target="tooltip-click" data-tooltip-trigger="click" 
                        href="#">
                        Login Dashboard Team
                    </a>
                    <!-- add href inside after register is opened -->
                    <a class="z-10 self-center bg-button-color p-2 lg:p-3 rounded-3xl text-xs lg:text-sm shadow-md hover:bg-orange-700 hover:shadow-lg active:bg-orange-800 active:shadow-lg" data-tooltip-target="tooltip-click" data-tooltip-trigger="click"
                        href="#">
                        Daftar Team
                    </a>
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
            <div class="w-52 sm:w-[250px] lg:w-[300px] justify-self-center mb-2 z-10"><img
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
                <div class="mt-3 text-xs lg:text-sm">AMICTA 2022 adalah Kompetisi inovasi produk digital
                    tingkat fakultas ilmu komputer (FIK) untuk memecahkan masalah masyarakat Indonesia, khususnya pada
                    sektor Industri UMKM, Pertanian & Perikanan atau Antisipasi Perubahan Iklim.</div>
                <br>
                <div class="text-xs lg:text-sm">Solusi-solusi yang dilombakan harus menggunakan salah
                    satu dari empat teknologi berikut (1) Internet of Things, (2) Kecerdasan Buatan, (3) AR/VR atau (4)
                    Animasi.</div>
                <br>
                <div class="text-red-600 text-sm sm:text-[20px] lg:text-[40px] lg:leading-[46px] p-700">"Hack The
                    Future"</div>
                <div class="mt-3 text-xs lg:text-sm">Sepuluh persen dari 2000 Mahasiswa aktif di
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
                        <p class="mt-3 text-xs lg:text-sm">Hadiah Jutaan Rupiah</p>
                    </div>
                    <div class="text-center mx-2 mb-6 sm:mb-0">
                        <div class="flex justify-center">
                            <img class="w-14 sm:w-20 lg:w-28" src="{{ asset('assets/img/icon8.svg') }}"
                                alt="">
                        </div>
                        <p class="mt-3 text-xs lg:text-sm">Kesempatan Internship di Industri Technology
                            Nasional</p>
                    </div>
                    <div class="text-center mx-2 mb-6 sm:mb-0">
                        <div class="flex justify-center">
                            <img class="w-14 sm:w-20 lg:w-28" src="{{ asset('assets/img/icon9.svg') }}"
                                alt="">
                        </div>
                        <p class="mt-3 text-xs lg:text-sm">Peluang Investasi Startup Ratusan Juta Rupiah
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
        <p class="mt-3 text-xs lg:text-sm">Empat narasumber professional industri teknologi, secara
            paralel berbagi kisah sukses, lesson learned dalam perjalanannya menyelesaikan berbagai masalah menggunakan
            teknologi. Inspiring and Insightful.</p>
        <br>
        <!-- pemateri -->
        <section class="px-[8px] sm:px-[50px] lg:px-[150px]">
            <div class="text-center bg-white drop-shadow-lg rounded-3xl py-6">
                <h2 class="text-xl sm:text-3xl p-700 mb-12 text-black">Pemateri</h2>

                <div id="carouselExampleCaptions" class="carousel slide relative carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner relative w-full overflow-hidden">
                        <!-- loop card data pemateri -->
                        <div class="carousel-item active relative float-left w-full">
                            <img class="rounded-full shadow-xl bg-gray-100 mb-6 mx-auto"
                                src="{{ asset('assets/img/fathin.png') }}" alt="avatar"
                                style="width: 150px; height:150px;" />
                            <div class="flex flex-wrap justify-center">
                                <div class="grow-0 shrink-0 basis-auto w-full lg:w-8/12 px-3">
                                    <h5 class="text-black text-sm sm:text-lg font-bold mb-3">Fathin Naufal - Product Manager at Gojek</h5>
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
                                    <h5 class="text-black text-sm sm:text-lg font-bold mb-3">Alwy Herfian S - CEO at Widya Robotic</h5>
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
                                    <h5 class="text-black text-sm sm:text-lg font-bold mb-3">Andrean N - CEO at WHOUSE</h5>
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
                                    <h5 class="text-black text-sm sm:text-lg font-bold mb-3">Delta Purna W - CEO at Qiscus</h5>
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

        <br>
        <p class="mt-3 text-xs lg:text-sm">Sayangnya tempat terbatas. Siapa cepat dia dapat! Yuks Daftar Segera!</p>
        <br>
        <div class="mt-6">
            <a class="text-xs lg:text-sm button-color p-3 rounded-xl shadow-md hover:bg-orange-700 hover:shadow-lg active:bg-orange-800 active:shadow-lg"
                href="{{ route('event.index') }}">Daftar Sekarang</a>
        </div>

        <!-- main issue -->
        <div id="main-issue">
            <h1 class="mt-14 p-700 text-sm sm:text-2xl lg:text-5xl">Main Issue</h1>
            <p class="mt-3 text-xs lg:text-sm">Tiga topik berikut menjadi sasaran utama kasus yang perlu
                dipecahkan melalui seluruh cabang kompetisi AMICTA 2022</p>
            <div class="mt-6 grid grid-cols-3 justify-items-center">
                <div class="text-center w-14 sm:w-20 lg:w-40">
                    <img class="w-full" src="{{ asset('assets/img/icon1.png') }}" alt="">
                    <p class="mt-3 text-xs lg:text-sm">Fenomena Perubahan Iklim</p>
                </div>
                <div class="text-center w-14 sm:w-20 lg:w-40">
                    <img class="w-full" src="{{ asset('assets/img/icon2.png') }}" alt="">
                    <p class="mt-3 text-xs lg:text-sm">Sektor UMKM</p>
                </div>
                <div class="text-center w-14 sm:w-20 lg:w-40">
                    <img class="w-full" src="{{ asset('assets/img/icon3.png') }}" alt="">
                    <p class="mt-3 text-xs lg:text-sm">Sektor Pertanian Dan Perikanan</p>
                </div>
            </div>
        </div>

        <!-- kompetisi -->
        <h1 class="mt-14 p-700 text-sm sm:text-2xl lg:text-5xl">COMPETITION</h1>
        <p class="mt-3 text-xs lg:text-sm">Ajang pencarian solusi nyata atas ruang lingkup permasalahan
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
        <div class="mt-6 mb-[164px] flex justify-center">
            <img class="w-[90%] md:w-3/4" src="{{ asset('assets/img/timeline.png') }}" alt="">
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
                                <p class="text-xs lg:text-sm text-gray-500 mb-6">
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
                                <p class="text-xs lg:text-sm text-gray-500 mb-6">
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
                            src="{{ asset('assets/img/if.png') }}" />
                        <img class="lg:mb-6 mx-1 sm:mx-8 w-[35px] sm:w-[50px] lg:w-[100px]"
                            src="{{ asset('assets/img/hmif.png') }}" />
                        <img class="lg:mb-6 mx-1 sm:mx-8 w-[35px] sm:w-[50px] lg:w-[100px]"
                            src="{{ asset('assets/img/fa.png') }}" />
                        <img class="lg:mb-6 mx-1 sm:mx-8 w-[35px] sm:w-[50px] lg:w-[100px]"
                            src="{{ asset('assets/img/himmi.png') }}" />
                        <img class="lg:mb-6 mx-1 sm:mx-8 w-[35px] sm:w-[50px] lg:w-[100px]"
                            src="{{ asset('assets/img/himti.png') }}" />
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

        <div class="accordion text-black" id="accordionExample">
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingOne">
                <button class="accordion-button relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Kak, kompetisi AMICTA ini dilaksanakan secara online atau offline?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-xs lg:text-sm">
                  Halo sobat AMICTA, kompetisi ini akan dilaksanakan secara <strong>offline</strong>.
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
                <div class="text-black text-left accordion-body py-4 px-5 text-xs lg:text-sm">
                  Halo sobat AMICTA, untuk mengikuti TM kategori <strong>Hackathon</strong> diwajibkan untuk hadir dan mengikuti seluruh rangkaian TM, dan untuk kategori <strong>Product Based</strong> boleh perwakilan dari masing-masing team yaaa.
                </div>
              </div>
            </div>
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingThree">
                <button class="accordion-button collapsed relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  Kak, apakah peserta lomba yang tidak juara juga akan mendapatkan sertifikat?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-xs lg:text-sm">
                  Halo sobat AMICTA, Jadi untuk peserta yang gagal menuju tahap selanjutnya akan mendapatkan e-sertifikat, dengan catatan peserta harus lulus tahap 2 (submit video).
                </div>
              </div>
            </div>
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingFour">
                <button class="accordion-button collapsed relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                  Apakah acara AMICTA 2022 ada biaya pendaftaran? 
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-xs lg:text-sm">
                  Halo sobat AMICTA, untuk pendaftaran tidak ada biaya sama sekali alias gratis. 
                </div>
              </div>
            </div>
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingFive">
                <button class="accordion-button collapsed relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                  Apakah ada ketentuan format dan bahasa pemrograman pada aplikasi yang dibuat?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-xs lg:text-sm">
                  Halo sobat AMICTA, Format dan Bahasa dibebaskan, namun perlu diingat bahwa proyek harus mengandung IOT, Kecerdasan buatan, AR/VR, dan Animasi.
                </div>
              </div>
            </div>
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingSix">
                <button class="accordion-button collapsed relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                  Jika misalnya saat pengumpulan proposal ada kendala teknis gimanaya Kak?
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-xs lg:text-sm">
                  Halo sobat AMICTA, jika terjadi kendala saat pengumpulan proposal bisa disampaikan kepada narahubung yang tersedia ya.
                </div>
              </div>
            </div>
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingSeven">
                <button class="accordion-button collapsed relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                    Kak, kalau sudah mendaftarkan Tim 3 orang kemudian saat hari H acara salah satu anggota tidak bisa hadir apakah bisa di ganti tidak ya?
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-xs lg:text-sm">
                    Halo sobat AMICTA, untuk tim yang sudah mendaftarkan anggotanya tidak dapat di ganti ya.
                </div>
              </div>
            </div>
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingEight">
                <button class="accordion-button collapsed relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                    Kak, apakah diizinkan untuk mengganti proyek untuk Kategori Product Based yang sudah di submit?
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-xs lg:text-sm">
                    Halo sobat AMICTA, untuk mengganti proyek tidak bisa ya karena untuk submit proposal hanya bisa dilakukan 1 kali. Jadi, harap sebelum mengumpulkan bisa di fix kan ya.
                </div>
              </div>
            </div>
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingNine">
                <button class="accordion-button collapsed relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                    Apakah ada ketentuan produk akhir dalam bentuk apa? Apakah produk akhir harus berbentuk aplikasi yang sudah jadi?
                </button>
              </h2>
              <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-xs lg:text-sm">
                    Halo sobat AMICTA, untuk ketentuan produk akhir harus berbentuk prototype ya.
                </div>
              </div>
            </div>
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingTen">
                <button class="accordion-button collapsed relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                    Hak aplikasi yang di-submit apakah sepenuhnya milik panitia atau dapat dikembangkan lagi menjadi produk untuk pribadi?
                </button>
              </h2>
              <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-xs lg:text-sm">
                    Halo sobat AMICTA, Hak intelektual masih menjadi milik peserta selama belum ada kesepakatan peralihan hak intelektual dari penyelenggara, namun ide yang dihasilkan dapat diadopsi dengan kesepakatan dari kedua belah pihak.
                </div>
              </div>
            </div>
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingEleven">
                <button class="accordion-button collapsed relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                    Peserta yang dapat mendaftar AMICTA siapa aja ya kak?
                </button>
              </h2>
              <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-xs lg:text-sm">
                    Halo sobat AMICTA, acara AMICTA dapat diikuti oleh seluruh mahasiswa Amikom ya.
                </div>
              </div>
            </div>
            <div class="accordion-item bg-white border-gray-200 mb-3">
              <h2 class="accordion-header mb-0" id="headingTwelve">
                <button class="accordion-button collapsed relative flex text-left sm:items-center w-full py-4 px-5 text-sm lg:text-base p-700 bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                    Kak, saya orangnya gak punya ide yang bagus, apakah masih bisa ikut AMICTA?
                </button>
              </h2>
              <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                <div class="text-black text-left accordion-body py-4 px-5 text-xs lg:text-sm">
                    Halo sobat AMICTA, tentu saja bisa kak, jika tidak punya ide pun AMICTA masih ada perlombaan Fun Tech, yang dimana perlombaan lebih Have Fun :)
                </div>
              </div>
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

    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="{{ asset('assets/js/particles.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>
