<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lily Florist - Landing Page</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:wght@300;400;500;700&family=Italianno&family=Great+Vibes&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2" defer></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        :root{
            --color-primary-dark: #6b3f3f;
            --color-hero-sub: #8b5a5a;
            --color-accent-pink: #d38b93;
            --color-hero-bg-1: #f6efef;
            --color-hero-bg-2: #f1e6e6;
        }

        .btn-pink {
          background-color: #cf9c9f;
          color: #543233;
          transition: background-color 0.2s;
        }

        .btn-pink:hover { background-color: #c28b8e; }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(180deg, var(--color-hero-bg-1) 0%, var(--color-hero-bg-2) 100%);
            color: #333;
        }

        .hero-heading{
            font-family: 'Playfair Display', serif;
            color: var(--color-primary-dark);
            font-weight: 700;
            line-height: 0.9;
            letter-spacing: -0.01em;
        }
        .hero-sub{
            font-family: 'Playfair Display', serif;
            color: var(--color-hero-sub);
            font-style: italic;
        }

        .btn-primary{
            background-color: var(--color-accent-pink);
            color: #fff;
            box-shadow: 0 6px 18px rgba(211,139,147,0.18);
        }

        .flowerSwiper .swiper-button-prev::after,
        .flowerSwiper .swiper-button-next::after {
            display: none;
            content: none;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(0,0,0,0.05);
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(92, 64, 64, 0.4);
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(92, 64, 64, 0.6);
        }

        @media (min-width:768px){
            .hero-heading{ font-size: 6.5rem; }
        }
        @media (max-width:767px){
            .hero-heading{ font-size: 3.2rem; }
        }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-dark': 'var(--color-primary-dark)',
                        'hero-sub': 'var(--color-hero-sub)',
                        'accent-pink': 'var(--color-accent-pink)',
                        'off-white': '#FDF6F6',
                        'card-bg-1': '#7b4f4f',
                        'card-bg-2': '#443131',
                        'light-mauve': '#f2dede',
                        'card-text-bg': '#443131'
                    },
                    fontFamily: {
                        'serif-display': ["'Playfair Display'", 'serif'],
                        'poppins': ['Poppins','sans-serif'],
                        'italianno': ['Italianno', 'cursive'],
                        'great-vibes': ['Great Vibes', 'cursive'],
                    }
                }
            }
        }
    </script>
</head>

<body class="font-poppins bg-gradient-to-b from-[#E0B8B8] from-15% to-white to-90%">

    <header id="beranda" class="relative bg-gray-100 min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0">
            <img 
                src="../img/landing1.png" 
                onerror="this.onerror=null;this.src='https://placehold.co/1200x800/8b5cf6/ffffff?text=Bouquet+Placeholder';"
                alt="Bouquet of Flowers" 
                class="w-screen h-screen object-cover object-left"
            >
            <div class="absolute inset-0 bg-gray-900 opacity-40"></div> 
        </div>

         <nav class="absolute top-0 left-0 right-0 z-20 p-6 md:p-8">
            <div class="max-w-7xl mx-auto flex justify-end">
                <div class="flex items-center space-x-6 md:space-x-8 text-white text-lg"> 
                    <a href="#beranda" class="hover:text-accent-pink font-semibold transition-colors duration-200">Beranda</a>
                    <a href="#tentang-kami" class="hover:text-accent-pink font-semibold transition-colors duration-200">Tentang Kami</a>
                    <a href="#katalog" class="hover:text-accent-pink font-semibold transition-colors duration-200">Katalog</a>
                    <a href="#kontak" class="hover:text-accent-pink font-semibold transition-colors duration-200">Kontak</a>
                </div>
            </div>
        </nav>

        <div class="relative z-10 max-w-7xl mx-5 px-7 w-full text-right">
            <div class="md:ml-auto md:w-3/5 lg:w-1/2 xl:w-2/5 pr-4 md:pr-0 mt-10 md:mt-0">
                <div class="hero-heading text-[5.5rem] md:text-[9rem] font-serif-display leading-tight mb-12 grid grid-cols-2 grid-rows-2 gap-4">
                    <div class="col-start-1 row-start-1">Lily</div>
                    <div class="col-start-2 row-start-2 text-right">Florist</div>
                </div>
                
                <p class="hero-sub text-[10rem] md:text-3xl mb-6 leading-relaxed text-white">
                    Wujudkan Keindahan dalam Setiap Rangkaian
                </p>
                <p class="text-white text-lg md:text-xl mb-8 leading-relaxed text-center">
                    Jadikan setiap momen lebih berkesan dengan rangkaian bunga dari toko Lily Florist
                </p>
                <button class="btn-primary hover:brightness-95 text-primary-dark font-semibold py-3 px-8 rounded-full transition-colors duration-300">
                    Belanja Sekarang
                </button>
            </div>
        </div>
    </header>

    <section class="bg-white py-16 md:py-20">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
          
          <div class="flex flex-col items-center text-center">
            <div class="w-36 h-36 rounded-full bg-[#a97070] flex items-center justify-center mb-4 overflow-hidden shadow-lg flex-shrink-0">
              <img src="../img/flower (1) 1.png" alt="Kualitas" class="w-full h-full object-contain p-6" />
            </div>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Kualitas Toko Bunga Tinggi</h3>
            <p class="text-sm text-gray-600">Menjamin produk bunga segar</p>
          </div>

          <div class="flex flex-col items-center text-center">
            <div class="w-36 h-36 rounded-full bg-[#a97070] flex items-center justify-center mb-4 overflow-hidden shadow-lg flex-shrink-0">
              <img src="../img/brand 1.png" alt="Serba Ada" class="w-full h-full object-contain p-6" />
            </div>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Toko Bunga Serba Ada</h3>
            <p class="text-sm text-gray-600">Berbagai produk toko bunga</p>
          </div>

          <div class="flex flex-col items-center text-center">
            <div class="w-36 h-36 rounded-full bg-[#a97070] flex items-center justify-center mb-4 overflow-hidden shadow-lg flex-shrink-0">
              <img src="../img/speech-bubble 1.png" alt="Disesuaikan" class="w-full h-full object-contain p-6" />
            </div>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Bunga Dapat Disesuaikan</h3>
            <p class="text-sm text-gray-600">Sebutkan kebutuhan spesifik</p>
          </div>

        </div>
      </div>
    </section>

    <div id="tentang-kami" class="bg-[#E0B8B8]">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 flex justify-center">
                <div class="w-[400px] overflow-hidden">
                    <img 
                        src="../img/Rectangle 2.png" 
                        alt="Florist merangkai bunga" 
                        class="w-full h-full "
                    >
                </div>
            </div>
            <div class="md:w-1/2 md:pl-12">
                <h2 class="text-4xl md:text-5xl font-bold mb-5 font-serif-display text-primary-dark">
                    Lily Florist
                </h2>
                <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                    Lily Florist adalah toko bunga di Depok yang menghadirkan berbagai pilihan bunga segar berkualitas untuk setiap momen spesial Anda. Mulai dari pernikahan, ulang tahun, ucapan selamat, hingga dekorasi acara, semua dirangkai dengan penuh cinta dan ketelitian.
                </p>
                <p class="text-gray-600 mb-6 italic text-lg font-serif-display">
                    "Lily Florist - Fresh Flowers, Fresh Feelings."
                </p>
                <p class="text-gray-500">
                    Jl. Akses UI, Kelapa Dua, Depok, Jawa Barat
                </p>
            </div>
        </div>
    </div>

    <div class="px-6 py-12 bg-gradient-to-b
    from-[#E0B8B8] from-15%
    via-rose-100 via-50%
    to-off-white to-85%">
        <h3 class="text-2xl font-serif-display text-center mb-12">Bunga Segar Kami</h3>

        <div class="relative px-16">
             <div class="flowerSwiper swiper">
                 <div class="swiper-wrapper">
                     <div class="swiper-slide flex flex-col items-center">
                         <img src="../img/lily.png" alt="Bunga Lily" class="w-32 h-32 object-contain mb-2">
                         <p class="text-sm">Bunga Lily</p>
                     </div>
                     <div class="swiper-slide flex flex-col items-center">
                         <img src="../img/matahari.png" alt="Bunga Matahari" class="w-32 h-32 object-contain mb-2">
                         <p class="text-sm">Bunga Matahari</p>
                     </div>
                     <div class="swiper-slide flex flex-col items-center">
                         <img src="../img/trisan.png" alt="Bunga Trisan" class="w-32 h-32 object-contain mb-2">
                         <p class="text-sm">Bunga Trisan</p>
                     </div>
                     <div class="swiper-slide flex flex-col items-center">
                         <img src="../img/mawar.png" alt="Bunga Mawar" class="w-32 h-32 object-contain mb-2">
                         <p class="text-sm">Bunga Mawar</p>
                     </div>
                     <div class="swiper-slide flex flex-col items-center">
                         <img src="../img/garbera.png" alt="Bunga Gerbera" class="w-32 h-32 object-contain mb-2">
                         <p class="text-sm">Bunga Gerbera</p>
                     </div>
                     <div class="swiper-slide flex flex-col items-center">
                         <img src="../img/aster.png" alt="Bunga Aster" class="w-32 h-32 object-contain mb-2">
                         <p class="text-sm">Bunga Aster</p>
                     </div>
                 </div>

                 <button type="button"
                       class="swiper-button-prev absolute left-3 md:left-4 top-1/2 -translate-y-1/2 z-40 flex h-10 w-10 items-center justify-center rounded-full bg-gray-200 text-gray-700 transition-colors hover:bg-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-2"
                       aria-label="Kembali">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                   </svg>
                   <span class="sr-only">Kembali</span>
                 </button>

                 <button type="button"
                       class="swiper-button-next absolute right-3 md:right-4 top-1/2 -translate-y-1/2 z-40 flex h-10 w-10 items-center justify-center rounded-full bg-gray-200 text-gray-700 transition-colors hover:bg-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-2"
                       aria-label="Lanjut">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5 15.75 12 8.25 19.5" />
                   </svg>
                   <span class="sr-only">Lanjut</span>
                 </button>
             </div>
         </div>
     </div>

    <section id="katalog" class="bg-off-white py-20">
      <div class="">
        <h2 class="text-4xl font-bold text-center mb-8 font-serif-display text-primary-dark">
          Pilih Rangkaian Bunga Anda
        </h2>

        <div class="p-12 mb-8 shadow-xl bg-gradient-to-l from-rose-100 from-5% via-[#E0B8B8] via-25% to-[#AA7B7B] to-85%">
          <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-14">

            <div class="group relative h-[350px] overflow-hidden shadow-lg bg-gray-200 rounded-tl-[1.25rem] rounded-br-[1.25rem] rounded-tr-0 rounded-bl-0">
                <img src="../img/buketbunga.png" alt="Buket Bunga" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <span class="absolute right-0 top-3 bg-card-text-bg text-white text-xs font-semibold px-6 py-2 rounded-l-full"
                      style="border-top-right-radius: 0; border-bottom-right-radius: 0;">
                  Buket Bunga
                </span>

                <div class="absolute bottom-5 left-0 right-0 flex justify-center">
                    <a href="KatalogBuket.php" class="bg-card-text-bg/85 text-white text-sm font-medium py-2 px-6 rounded-full shadow-lg hover:bg-white hover:text-primary-dark transition-all duration-300 inline-block">
                        Selengkapnya
                    </a>
                </div>
            </div>

            <div class="group relative h-[350px] overflow-hidden shadow-lg bg-gray-200 rounded-tl-[1.25rem] rounded-br-[1.25rem] rounded-tr-0 rounded-bl-0">
                <img src="../img/bungapapan.png" alt="Buket Bunga" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <span class="absolute right-0 top-3 bg-card-text-bg text-white text-xs font-semibold px-6 py-2 rounded-l-full"
                      style="border-top-right-radius: 0; border-bottom-right-radius: 0;">
                  Bunga Papan
                </span>


                <div class="absolute bottom-5 left-0 right-0 flex justify-center">
                    <a href="KatalogPapan.php" class="bg-card-text-bg/85 text-white text-sm font-medium py-2 px-6 rounded-full shadow-lg hover:bg-white hover:text-primary-dark transition-all duration-300 inline-block">
                        Selengkapnya
                    </a>
                </div>
            </div>

            <div class="group relative h-[350px] overflow-hidden shadow-lg bg-gray-200 rounded-tl-[1.25rem] rounded-br-[1.25rem] rounded-tr-0 rounded-bl-0">
                <img src="../img/standing.png" alt="Buket Bunga" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <span class="absolute right-0 top-3 bg-card-text-bg text-white text-xs font-semibold px-6 py-2 rounded-l-full"
                      style="border-top-right-radius: 0; border-bottom-right-radius: 0;">
                  Standing Flower
                </span>


                <div class="absolute bottom-5 left-0 right-0 flex justify-center">
                    <a href="KatalogStanding.php" class="bg-card-text-bg/85 text-white text-sm font-medium py-2 px-6 rounded-full shadow-lg hover:bg-white hover:text-primary-dark transition-all duration-300 inline-block">
                        Selengkapnya
                    </a>
                </div>
            </div>

            <div class="group relative h-[350px] overflow-hidden shadow-lg bg-gray-200 rounded-tl-[1.25rem] rounded-br-[1.25rem] rounded-tr-0 rounded-bl-0">
                <img src="../img/dekorasi.png" alt="Buket Bunga" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <span class="absolute right-0 top-3 bg-card-text-bg text-white text-xs font-semibold px-6 py-2 rounded-l-full"
                      style="border-top-right-radius: 0; border-bottom-right-radius: 0;">
                  Dekorasi Bunga
                </span>


                <div class="absolute bottom-5 left-0 right-0 flex justify-center">
                    <a href="KatalogDekorasi.php" class="bg-card-text-bg/85 text-white text-sm font-medium py-2 px-6 rounded-full shadow-lg hover:bg-white hover:text-primary-dark transition-all duration-300 inline-block">
                        Selengkapnya
                    </a>
                </div>
            </div>

          </div>
        </div>



        <div class="p-12 mb-8 shadow-xl bg-gradient-to-r from-rose-100 from-5% via-[#E0B8B8] via-25% to-[#AA7B7B] to-85%">
          <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-14">

            <div class="group relative h-[350px] overflow-hidden shadow-lg bg-gray-200 rounded-tl-0 rounded-br-0 rounded-tr-[1.25rem] rounded-bl-[1.25rem]">
                <img src="../img/bungabox.png" alt="Bunga Box" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <span class="absolute left-0 top-3 bg-card-text-bg text-white text-xs font-semibold px-6 py-2 rounded-r-full"
                      style="border-top-right-radius: 50; border-bottom-right-radius: 50;">
                  Bunga Box
                </span>


                <div class="absolute bottom-5 left-0 right-0 flex justify-center">
                    <a href="KatalogBox.php" class="bg-card-text-bg/85 text-white text-sm font-medium py-2 px-6 rounded-full shadow-lg hover:bg-white hover:text-primary-dark transition-all duration-300 inline-block">
                        Selengkapnya
                    </a>
                </div>
            </div>

            <div class="group relative h-[350px] overflow-hidden shadow-lg bg-gray-200 rounded-tl-0 rounded-br-0 rounded-tr-[1.25rem] rounded-bl-[1.25rem]">
                <img src="../img/bungameja.png" alt="Bunga Box" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <span class="absolute left-0 top-3 bg-card-text-bg text-white text-xs font-semibold px-6 py-2 rounded-r-full"
                      style="border-top-right-radius: 50; border-bottom-right-radius: 50;">
                  Bunga Meja
                </span>

                <div class="absolute bottom-5 left-0 right-0 flex justify-center">
                    <a href="KatalogMeja.php" class="bg-card-text-bg/85 text-white text-sm font-medium py-2 px-6 rounded-full shadow-lg hover:bg-white hover:text-primary-dark transition-all duration-300 inline-block">
                        Selengkapnya
                    </a>
                </div>
            </div>

            <div class="group relative h-[350px] overflow-hidden shadow-lg bg-gray-200 rounded-tl-0 rounded-br-0 rounded-tr-[1.25rem] rounded-bl-[1.25rem]">
                <img src="../img/bungamobil.png" alt="Bunga Box" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <span class="absolute left-0 top-3 bg-card-text-bg text-white text-xs font-semibold px-6 py-2 rounded-r-full"
                      style="border-top-right-radius: 50; border-bottom-right-radius: 50;">
                  Bunga Mobil
                </span>

                <div class="absolute bottom-5 left-0 right-0 flex justify-center">
                    <a href="KatalogMobil.php" class="bg-card-text-bg/85 text-white text-sm font-medium py-2 px-6 rounded-full shadow-lg hover:bg-white hover:text-primary-dark transition-all duration-300 inline-block">
                        Selengkapnya
                    </a>
                </div>
            </div>

            <div class="group relative h-[350px] overflow-hidden shadow-lg bg-gray-200 rounded-tl-0 rounded-br-0 rounded-tr-[1.25rem] rounded-bl-[1.25rem]">
                <img src="../img/bungaduka.png" alt="Bunga Box" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <span class="absolute left-0 top-3 bg-card-text-bg text-white text-xs font-semibold px-6 py-2 rounded-r-full"
                      style="border-top-right-radius: 50; border-bottom-right-radius: 50;">
                  Karangan Duka
                </span>

                <div class="absolute bottom-5 left-0 right-0 flex justify-center">
                    <a href="KatalogDuka.php" class="bg-card-text-bg/85 text-white text-sm font-medium py-2 px-6 rounded-full shadow-lg hover:bg-white hover:text-primary-dark transition-all duration-300 inline-block">
                        Selengkapnya
                    </a>
                </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <section id="kontak" class="bg-white py-20 md:py-24">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-center">
            
            <div class="w-full h-full min-h-[450px]">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2673238681!2d106.82496261524401!3d-6.359079595400266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec66e33614e5%3A0x90166649eccce920!2sTaman%20Bunga%20Wiladatika!5e0!3m2!1sid!2sid!4v1678888888888!5m2!1sid!2sid" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    class="rounded-lg shadow-xl w-full h-full min-h-[450px]"
                ></iframe>
            </div>

            <div class="bg-light-mauve p-8 md:p-12 rounded-lg shadow-lg">
                <h2 class="text-4xl font-bold mb-6 font-serif-display text-primary-dark">
                    Kontak Kami
                </h2>
                
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                    Kunjungi toko kami atau hubungi kami untuk pemesanan dan konsultasi.
                </p>

                <div class="space-y-4 text-gray-800">
                    <h3 class="text-xl font-bold text-primary-dark">Lily Florist</h3>
                    <p class="text-lg">Jl. Mawar Melati No. 123, Depok, Jawa Barat, Indonesia 16421</p>
                    
                    <h3 class="text-xl font-bold mt-4 text-primary-dark">Jam Buka</h3>
                    <p class="text-lg">Senin - Sabtu: 08:00 - 20:00 WIB<br>Minggu: 10:00 - 18:00 WIB</p>
                    
                    <h3 class="text-xl font-bold mt-4 text-primary-dark">Telepon</h3>
                    <p class="text-lg">(021) 123-4567</p>
                </div>

                <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-full shadow-lg transition-colors duration-300 mt-8">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.0-5.525 4.477-10 10-10s10 4.475 10 10-4.477 10-10 10c-2.098 0-4.14-.64-5.947-1.77L.057 24zM7.3 18.685l.405.239c1.676 1.04 3.58 1.597 5.57 1.597 4.41 0 8-3.592 8-8s-3.59-8-8-8-8 3.592-8 8c0 1.99.65 3.903 1.745 5.57l.24.405-1.106 4.027 4.13-1.08z"/></svg>
                    Hubungi kami di WhatsApp
                </a>
            </div>

        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 mb-24">
        <div class="bg-[#dfbaba] rounded-2xl p-8 md:p-10 shadow-xl">
            <h2 class="text-2xl md:text-3xl font-bold text-[#5c4040] mb-8 font-serif-display">
                Berikan Ulasan Anda Mengenai Toko Kami
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                
                <div class="border border-[#8f6363] rounded-xl p-6 md:p-8">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-[#5c4040] font-medium text-lg">Rate</span>
                        <div id="starRating" class="flex space-x-1">
                            <svg class="w-6 h-6 text-[#5c4040] cursor-pointer hover:fill-[#5c4040]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-rating="1"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg>
                            <svg class="w-6 h-6 text-[#5c4040] cursor-pointer hover:fill-[#5c4040]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-rating="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg>
                            <svg class="w-6 h-6 text-[#5c4040] cursor-pointer hover:fill-[#5c4040]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-rating="3"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg>
                            <svg class="w-6 h-6 text-[#5c4040] cursor-pointer hover:fill-[#5c4040]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-rating="4"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg>
                            <svg class="w-6 h-6 text-[#5c4040] cursor-pointer hover:fill-[#5c4040]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-rating="5"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg>
                        </div>
                        <input type="hidden" id="rating" name="rating" value="0" required>
                    </div>

                    <form id="reviewForm" class="space-y-4">
                        <input type="text" id="name" name="name" placeholder="Nama" class="w-full bg-transparent border border-[#8f6363] text-[#5c4040] placeholder-[#5c4040]/70 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#5c4040]" required>
                        
                        <textarea id="comment" name="comment" placeholder="Masukkan Ulasan Anda" rows="4" class="w-full bg-transparent border border-[#8f6363] text-[#5c4040] placeholder-[#5c4040]/70 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#5c4040] resize-none" required></textarea>
                        
                        <button type="submit" class="w-full bg-[#a97e7e] hover:bg-[#966b6b] text-[#3d2b2b] font-bold py-3 rounded-md shadow-md transition-colors duration-300">
                            Unggah
                        </button>
                    </form>
                </div>

                <div class="bg-[#c89b9b] rounded-xl p-6 md:p-8 flex flex-col h-full">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-bold text-[#3d2b2b] text-lg">Ulasan Anda</h3>
                        <a href="Ulasan.php" class="text-xs text-[#3d2b2b] underline hover:text-white">Lihat Semua</a>
                    </div>

                    <div id="reviewsContainer" class="overflow-y-auto max-h-[250px] space-y-4 pr-2 custom-scrollbar">
                        
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div id="reviewSuccess" class="fixed inset-0 z-60 hidden items-center justify-center bg-black/50 backdrop-blur-sm px-4">
        <div class="bg-white w-80 rounded-lg shadow-2xl p-8 text-center transform transition-all scale-100">
        
        
        <div class="mx-auto w-16 h-16 rounded-full border-2 border-gray-800 flex items-center justify-center mb-4">
          <svg class="w-8 h-8 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
        </div>

        <h3 class="text-base font-medium text-gray-800 mb-1">Ulasan Berhasil</h3>
        <p class="text-base font-medium text-gray-800 mb-6">Dikirim</p>
        
        <button id="reviewSuccessOk" class="btn-pink px-8 py-2 rounded shadow-sm text-sm font-medium">Oke</button>
      </div>
    </div>


    <footer class="bg-gray-800 text-gray-400 py-10">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div>
                <h3 class="text-2xl font-bold text-white mb-2 font-serif-display">Lily Florist</h3>
                <p class="italic font-serif-display">Wujudkan Keindahan dalam Setiap Rangkaian</p>
            </div>
            <div class="mt-6 md:mt-0">
                <p class="text-sm">© 2025 Lily Florist. All Rights Reserved.</p>
            </div>
        </div>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        
        const supabaseUrl = 'https://uorxpavndirbgapqzugn.supabase.co/'; 
        const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InVvcnhwYXZuZGlyYmdhcHF6dWduIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NjQwNDAxOTQsImV4cCI6MjA3OTYxNjE5NH0.ebEFOmTgUFwOefA9FvVAxmm9jcTDVLDi5OLx_3_wh8k'; 

        let supabase;
        if (typeof window.supabase !== 'undefined') {
            supabase = window.supabase.createClient(supabaseUrl, supabaseKey);
        } else {
            console.error('Supabase script not loaded. Please check your internet connection or CDN URL.');
            return; 
        }

        let currentPage = 1;
        const reviewsPerPage = 10;

        async function loadReviews(page = 1) {
            const from = (page - 1) * reviewsPerPage;
            const to = from + reviewsPerPage - 1;

            const { data, error, count } = await supabase
                .from('reviews')
                .select('*', { count: 'exact' })
                .order('created_at', { ascending: false })
                .range(from, to);

            if (error) {
                console.error('Error loading reviews:', error);
                return;
            }

            const container = document.getElementById('reviewsContainer');
            container.innerHTML = '';

            data.forEach(review => {
                const stars = '<span>★</span>'.repeat(review.rating);
                const date = new Date(review.created_at).toLocaleDateString('id-ID', {
                    year: 'numeric', month: 'long', day: 'numeric'
                });

                const reviewHTML = `
                    <div class="bg-[#b08585] p-4 rounded-lg shadow-sm">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h4 class="font-bold text-[#3d2b2b] text-sm">${review.name}</h4>
                                <div class="flex text-yellow-400 text-xs mt-1">${stars}</div>
                            </div>
                            <span class="text-xs text-[#3d2b2b]/70">${date}</span>
                        </div>
                        <p class="text-xs text-[#3d2b2b] leading-relaxed">${review.comment}</p>
                    </div>
                `;
                container.innerHTML += reviewHTML;
            });
        }

        const stars = document.querySelectorAll('#starRating svg');
        const ratingInput = document.getElementById('rating');
        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                const rating = index + 1;
                ratingInput.value = rating.toString();
                console.log('Bintang diklik:', rating, 'Nilai input:', ratingInput.value);
                stars.forEach(s => {
                    s.style.fill = 'none'; 
                    s.classList.remove('fill-[#5c4040]');
                    s.classList.add('text-[#5c4040]');
                });
                for (let i = 0; i < rating; i++) {
                    stars[i].style.fill = '#5c4040'; 
                    stars[i].classList.add('fill-[#5c4040]');
                    stars[i].classList.remove('text-[#5c4040]');
                }
            });
        });

        document.getElementById('reviewForm').addEventListener('submit', async (e) => {
            e.preventDefault(); 
            console.log('Form submit triggered'); 
        
            const name = document.getElementById('name').value?.trim();
            const ratingStr = document.getElementById('rating').value?.trim();
            const comment = document.getElementById('comment').value?.trim();
        
            console.log('Form submit - Name:', name, 'RatingStr:', ratingStr, 'Comment:', comment); 
        
            const rating = parseInt(ratingStr, 10);
            console.log('Parsed Rating:', rating); 
        
            if (!name || !comment) {
                alert('Nama dan ulasan wajib diisi.');
                return;
            }
            if (isNaN(rating) || rating < 1 || rating > 5) {
                alert('Silakan pilih rating bintang (1-5).');
                return;
            }
        
            try {
                const { error } = await supabase
                    .from('reviews')
                    .insert([{ name, rating, comment }]);
            
                if (error) {
                    console.error('Error submitting review:', error);
                    alert('Gagal mengirim ulasan. Coba lagi.');
                } else {
                    const modal = document.getElementById('reviewSuccess');
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                
                    document.getElementById('reviewForm').reset();
                    stars.forEach(s => {
                        s.style.fill = 'none';
                        s.classList.remove('fill-[#5c4040]');
                        s.classList.add('text-[#5c4040]');
                    });
                    ratingInput.value = '0';
                    loadReviews(currentPage); 
                }
            } catch (err) {
                console.error('Unexpected error:', err);
                alert('Terjadi kesalahan tak terduga. Coba lagi.');
            }
        });
        
        document.getElementById('reviewSuccessOk').addEventListener('click', () => {
            const modal = document.getElementById('reviewSuccess');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
        

        loadReviews();
    });

    document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
        var swiper = new Swiper(".flowerSwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            slidesPerGroup: 1,
            loop: false,
            navigation: {
                nextEl: ".flowerSwiper .swiper-button-next",
                prevEl: ".flowerSwiper .swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 24
                },
                1024: {
                    slidesPerView: 5,   // tampil 5 gambar di desktop
                    spaceBetween: 30
                }
            }
        });
</script>

</body>
</html>