<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ijen Blue Fire') }}</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Icon --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('snippets.navbar')
        
        @include('snippets.sidebar')
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{-- Carousel Content --}}
            <div id="controls-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden md:h-96 shadow-md">
                    <!-- Item 1 -->
                    <div class="block duration-700 ease-in-out" data-carousel-item>
                        <figure class="relative block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 transition-all duration-300 cursor-pointer">
                            <a href="#">
                                <img class="rounded-lg" src="{{ asset('assets/ijen.jpg') }}" alt="image description">
                            </a>
                            <figcaption class="absolute px-4 text-4xl text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                <p>Kawah Ijen</p>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Item 2 -->
                    <div class="block duration-700 ease-in-out" data-carousel-item>
                        <figure class="relative block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 transition-all duration-300 cursor-pointer">
                            <a href="#">
                                <img class="rounded-lg" src="{{ asset('assets/mount.jpg') }}" alt="image description">
                            </a>
                            <figcaption class="absolute px-4 text-4xl text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                <p>Gunung Baung</p>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- Item 3 -->
                    <div class="block duration-700 ease-in-out" data-carousel-item>
                        <figure class="relative block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 transition-all duration-300 cursor-pointer">
                            <a href="#">
                                <img class="rounded-lg" src="{{ asset('assets/wurung.jpg') }}" alt="image description">
                            </a>
                            <figcaption class="absolute px-4 text-4xl text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                <p>Kawah Wurung</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            {{-- End Carousel Content --}}

            {{-- menu card --}}
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5">
                <!--Card 1-->
                <a class="btn btn-ghost h-32 rounded-lg overflow-hidden shadow-lg bg-white">
                  <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-center">
                        <span class="material-icons">
                            shopping_cart
                        </span>
                    </div>
                    <p class="text-gray-700 text-base">
                      Pemesanan Tiket
                    </p>
                  </div>
                </a>
                
                <!--Card 2-->
                <a class="btn btn-ghost h-32 rounded-lg overflow-hidden shadow-lg bg-white">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2 text-center">
                          <span class="material-icons">
                              history
                          </span>
                      </div>
                      <p class="text-gray-700 text-base">
                        Riwayat Pemesanan
                      </p>
                    </div>
                  </a>

                <!--Card 3-->
                <a class="btn btn-ghost h-32 rounded-lg overflow-hidden shadow-lg bg-white">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2 text-center">
                          <span class="material-icons">
                              info
                          </span>
                      </div>
                      <p class="text-gray-700 text-base">
                        FAQ
                      </p>
                    </div>
                </a>

                <!--Card 4-->
                <a class="btn btn-ghost h-32 rounded-lg overflow-hidden shadow-lg bg-white">
                    <div class="px-6 py-4">
                      <div class="font-bold text-xl mb-2 text-center">
                          <span class="material-icons">
                              confirmation_number
                          </span>
                      </div>
                      <p class="text-gray-700 text-base">
                        Harga Tiket
                      </p>
                    </div>
                </a>
              </div>
            {{-- end menu card --}}

            {{-- Information Card --}}
            <div class="px-10">
                <div class="w-full bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                    <h1 class="p-2 text-lg font-medium text-center text-white border-gray-200 rounded-t-lg bg-yellow-300 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                        Informasi
                    </h1>
                    <div class="block p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <h2 class="mb-7 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Mohon untuk melakukan Reload halaman terlebih dahulu untuk memastikan booking, karena sudah dilakukan pemutakhiran sistem</h2>
                        <p class="mb-2 text-lg text-gray-500 dark:text-gray-400">Dear Pengunjung,</p>
                        <ol class="mb-7">
                            <li class="text-sm text-gray-500 dark:text-gray-400">1. Web ini untuk fasilitas pemesanan tiket masuk kawasan TWA Kawah Ijen, TWA Gunung Baung, TWA Tretes dan Suaka Margasatwa Dataran Tinggi Hyang.</li>
                            <li class="text-sm text-gray-500 dark:text-gray-400">2. Pembukaan dan penutupan dapat dilihat di kuota kunjungan hariandan atau pengumuman secara resmi di medsos BBKSDA Jawa Timur.</li>
                            <li class="text-sm text-gray-500 dark:text-gray-400">3. Booking tiket wajib secara online, melalui web ini, tunjukkan kode booking kepada petugas dan lakukan pembayaran manual di loket lokasi dan dapatkan e-ticket.</li>
                            <li class="text-sm text-gray-500 dark:text-gray-400">4. Metode pembayaran hanya melalui metode pembayaran di tempat pendakian (ON THE SPOT).</li>
                            <li class="text-sm text-gray-500 dark:text-gray-400">5. Informasi pemesanan dan e-ticket terkirim ke email, cek inbox / spam atau melalui menu riwayat pembelian di web ini.</li>
                            <li class="text-sm text-gray-500 dark:text-gray-400">6. Siapkan KTP/Kartu Identitas lain untuk mengisi pemesanan, dan Membawa KTP/Kartu Identitas untuk Check in kawasan, serta kartu vaksin melalui web/app pedulilindungi. Tanpa dokumen itu, berpotensi ditolak masuk kawasan.</li>
                            <li class="text-sm text-gray-500 dark:text-gray-400">7. Penjelasan rinci silahkan membaca aturan di menu <strong>FAQ</strong> | <strong>Frequently Asked Questions</strong>.</li>
                            <li class="text-sm text-gray-500 dark:text-gray-400">8. Quota harian dapat dilihat pada menu "Pemesanan Tiket", untuk pembatasan pengunjung.</li>
                            <li class="text-sm text-gray-500 dark:text-gray-400">9. Maaf, setiap hari Jumat pada minggu pertama, tidak menerima kunjungan wisata ke "TWA Kawah Ijen", kami melaksanakan kegiatan "<strong>Ijen Rijik</strong>" atau "<strong>Ijen Bersih</strong>".</li>
                            <li class="text-sm text-gray-500 dark:text-gray-400">10. Pastikan pemesanan  tidak salah tanggal, <strong>Contoh memilih hari kunjungan ke TWA Kawah Ijen, apabila datang di lokasi (paltuding) hari sabtu malam maka pembelian tiket pilih hari minggu bukan hari sabtu, karena jam kunjungan mulai jam 02.00 pagi s/d 12.00 siang</strong>.</li>
                            <li class="text-sm text-gray-500 dark:text-gray-400">11. Mohon kiranya dapat mengisi kuisioner melalui tautan : <a href="http://url.bbksdajatim.org/kuisioner" class="link link-secondary">http://url.bbksdajatim.org/kuisioner</a> untuk peningkatan pelayanan kami.</li>
                        </ol>
                        <p class=" text-3xl text-gray-900 dark:text-gray-400 text-center">Terima kasih</p>
                    </div>
                </div>
            </div>
            {{-- End Information Card --}}

            {{-- Konservasi Card --}}
            {{-- Masih mau dijadikan carousel --}}
            <div class="flex justify-center pt-10 pb-5">
                <img src="{{ asset("assets/konservasi.png") }}" alt="">
            </div>
            
            <div class="px-10 pb-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                <!--Card 1-->
                <div class="rounded overflow-hidden shadow-lg">
                  <img class="w-full" src="{{ asset('assets/ijen.jpg') }}" alt="Mountain">
                  <div class="px-6 py-4">
                    <p class="text-gray-700 text-base">
                        Taman Wisata Alam
                    </p>
                    <div class="font-bold text-xl">TWA Kawah Ijen</div>
                  </div>
                  <div class="px-6 pt-2 pb-4 text-end">
                    <button class="btn btn-outline">More Info</button>
                  </div>
                </div>

                <!--Card 2-->
                <div class="rounded overflow-hidden shadow-lg">
                  <img class="w-full" src="{{ asset('assets/ijen.jpg') }}" alt="Mountain">
                  <div class="px-6 py-4">
                    <p class="text-gray-700 text-base">
                        Taman Wisata Alam
                    </p>
                    <div class="font-bold text-xl">TWA Tretes</div>
                  </div>
                  <div class="px-6 pt-2 pb-4 text-end">
                    <button class="btn btn-outline">More Info</button>
                  </div>
                </div>
            
                <!--Card 3-->
                <div class="rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="{{ asset('assets/ijen.jpg') }}" alt="Mountain">
                    <div class="px-6 py-4">
                      <p class="text-gray-700 text-base">
                          Taman Wisata Alam
                      </p>
                      <div class="font-bold text-xl">TWA Gunung Baung</div>
                    </div>
                    <div class="px-6 pt-2 pb-4 text-end">
                      <button class="btn btn-outline">More Info</button>
                    </div>
                </div>
            </div>
            {{-- End Konservasi Card --}}


            {{-- Berita --}}
            <div class="flex justify-center pt-10 pb-5">
                <img src="{{ asset("assets/berita.png") }}" alt="">
            </div>

            
            

            <!-- component -->
            <div class="px-10 w-full pb-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 gap-5">
                <a href="#" class="p-10 flex flex-col overflow-hidden items bg-white border border-gray-200 rounded-lg shadow md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-48 md:h-auto md:w-48" src="{{ asset('assets/berita1.webp') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="pb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Telah Resmi, Kabupaten Kediri Ditetapkan Sebagai  Pusat Ficus Nasional Pertama di Indonesia</h5>
                        <div class="flex justify-end">
                            <span class="material-icons">
                                calendar_month
                            </span>
                            <p class=" font-normal text-gray-700 dark:text-gray-400">
                                24-03-2022 08:36
                            </p>
                        </div>
                    </div>
                </a>  

                <a href="#" class="p-10 flex flex-col overflow-hidden items bg-white border border-gray-200 rounded-lg shadow md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-48 md:h-auto md:w-48" src="{{ asset('assets/berita1.webp') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="pb-10 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Telah Resmi, Kabupaten Kediri Ditetapkan Sebagai  Pusat Ficus Nasional Pertama di Indonesia</h5>
                        <div class="flex justify-end">
                            <span class="material-icons">
                                calendar_month
                            </span>
                            <p class=" font-normal text-gray-700 dark:text-gray-400">
                                24-03-2022 08:36
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            
            {{-- End Berita --}}



            </div>

            
        </main>

        @include('snippets.footer')
    </div>
</body>

</html>
