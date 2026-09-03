<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Profil Desa Sukamaju</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 antialiased overflow-x-hidden">

    <!-- NAVBAR -->
    <nav class="bg-gradient-to-r from-green-700 to-green-600 text-white sticky top-0 z-40 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between h-16 items-center">
            <!-- Logo & Nama Desa -->
            <div class="flex items-center gap-3">
                <img src="{{ asset('image/logo_kukar.png') }}" 
                     alt="Logo Kutai Kartanegara" 
                     class="h-10 w-auto object-contain p-1 rounded">
                <div class="flex flex-col">
                    <span class="font-bold text-lg leading-tight text-white">Desa Sukamaju</span>
                    <span class="text-[10px] text-green-100 opacity-90">Kab. Kutai Kartanegara</span>
                </div>
            </div>

            <!-- Menu Navigasi (Teks diperbaiki kontrasnya) -->
            <div class="flex space-x-6 text-sm font-medium text-white">
                <a href="#" class="hover:text-green-200 transition">Beranda</a>
                <a href="#profil" class="hover:text-green-200 transition">Profil</a>
                <a href="#potensi" class="hover:text-green-200 transition">Potensi</a>
                <a href="#berita" class="hover:text-green-200 transition">Berita</a>
                <a href="#kontak" class="hover:text-green-200 transition">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="relative bg-gray-900 text-white min-h-[480px] flex items-center justify-center overflow-hidden">
        <img src="{{ asset('image/foto.1atar.jpeg') }}" alt="Desa Sukamaju" class="absolute inset-0 w-full h-full object-cover opacity-40">
        
        <div class="relative z-10 text-center max-w-3xl px-6 py-12">
            <span class="bg-green-600/90 text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider mb-4 inline-block">
                Website Resmi
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4 drop-shadow-md">
                Selamat Datang di Desa Sukamaju
            </h1>
            <p class="text-gray-200 text-sm md:text-base mb-8 max-w-xl mx-auto leading-relaxed">
                Mewujudkan masyarakat Desa Sukamaju yang sejahtera, mandiri, dan berdaya saing melalui pelayanan publik yang transparan.
            </p>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="#profil" class="px-6 py-3 bg-green-600 hover:bg-green-700 text-white text-sm font-semibold rounded-xl shadow-lg transition duration-300">
                    Lihat Profil Desa
                </a>
                <a href="#kontak" class="px-6 py-3 bg-white/10 hover:bg-white/20 text-white backdrop-blur-md text-sm font-semibold rounded-xl transition duration-300 border border-white/20">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    <!-- SAMBUTAN KEPALA DESA -->
    <section class="py-12 bg-white border-b border-gray-200">
        <div class="max-w-5xl mx-auto px-4">
            <div class="bg-gray-50 rounded-2xl p-6 md:p-8 shadow-sm border border-gray-100 grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
                
                <!-- Foto Kades -->
                <div class="md:col-span-4 text-center">
                    <div class="relative inline-block rounded-2xl overflow-hidden shadow-md border-4 border-white mb-3">
                        <img src="{{ asset('image/foto_kades.jpeg') }}" alt="Kepala Desa Sukamaju" class="w-full h-64 md:h-72 object-cover">
                    </div>
                    <h3 class="font-bold text-gray-900 text-base">Bapak Kuswara</h3>
                    <p class="text-xs text-green-600 font-medium">Kepala Desa Sukamaju</p>
                </div>

                <!-- Isi Sambutan -->
                <div class="md:col-span-8">
                    <div class="inline-block px-3 py-1 bg-green-100 text-green-700 font-semibold text-xs rounded-lg mb-3">
                        Sambutan Kepala Desa
                    </div>
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">
                        Selamat Datang di Portal Resmi Desa Sukamaju
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        Website ini hadir sebagai wujud keterbukaan informasi publik dan peningkatan kualitas pelayanan bagi seluruh warga masyarakat Desa Sukamaju.
                    </p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Kami berkomitmen untuk terus berinovasi dan memberikan pelayanan terbaik secara transparan, akuntabel, serta efisien menuju desa yang mandiri dan sejahtera.
                    </p>
                    
                    <div class="border-t border-gray-200 pt-4">
                        <span class="text-xs text-gray-500 italic">"Melayani dengan Hati, Membangun Desa Mandiri"</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROFIL, SEJARAH, & DEMOGRAFI -->
    <section id="profil" class="py-12 bg-gray-50 border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4">
            
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800">PROFIL & SEJARAH DESA</h2>
                <p class="text-gray-600 mt-2 text-sm">Mengenal lebih dekat sejarah, batas wilayah, dan struktur pemerintahan Desa Sukamaju.</p>
                <div class="w-20 h-1 bg-green-600 mx-auto mt-3 rounded-full"></div>
            </div>

            <!-- Sejarah Desa -->
            <div class="bg-white rounded-2xl shadow-md p-6 md:p-8 mb-10 border border-gray-100">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="p-3 bg-green-100 text-green-700 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C20.832 18.477 19.247 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Sejarah Ringkas Desa</h3>
                </div>
                <div class="text-gray-600 space-y-3 text-sm leading-relaxed">
                    <p>
                        Desa Sukamaju berdiri sejak tahun 1982 yang awalnya merupakan kawasan pemukiman transmigrasi. Seiring berjalannya waktu dan pesatnya perkembangan di sektor pertanian serta potensi alam, kawasan ini berkembang menjadi desa definitif.
                    </p>
                    <p>
                        Nama <strong>"Sukamaju"</strong> diambil dari cita-cita luhur para tokoh masyarakat awal yang mengharapkan desa ini selalu mengalami kemajuan dalam kebersamaan, gotong royong, dan kesejahteraan seluruh warganya.
                    </p>
                </div>
            </div>

            <!-- Grid 3 Kartu -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Peta Wilayah -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
                    <div class="h-44 bg-gray-200 relative">
                        <img src="{{ asset('image/foto_goa_batu.jpeg') }}" alt="Peta Desa" class="w-full h-full object-cover">
                        <span class="absolute top-3 left-3 bg-green-600 text-white text-xs px-2.5 py-1 rounded-full font-semibold">Geografis</span>
                    </div>
                    <div class="p-5">
                        <h4 class="text-lg font-bold text-gray-800 mb-2">Peta & Batas Wilayah</h4>
                        <p class="text-xs text-gray-600 mb-4 leading-relaxed">
                            Desa Sukamaju memiliki luas wilayah ± 1,250 Ha dengan batas wilayah utara berbatasan langsung dengan sungai utama.
                        </p>
                        <button onclick="openModal('modalPeta')" class="inline-flex items-center text-xs font-semibold text-green-600 hover:text-green-700">
                            Lihat Detail Peta &rarr;
                        </button>
                    </div>
                </div>

                <!-- Data Demografi -->
                <div class="bg-white rounded-2xl shadow-sm p-5 border border-gray-100 hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <h4 class="text-lg font-bold text-gray-800">Data Demografi</h4>
                            <span class="p-2 bg-blue-50 text-blue-600 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </span>
                        </div>
                        <p class="text-xs text-gray-600 mb-4">Gambaran singkat komposisi jumlah penduduk Desa Sukamaju saat ini:</p>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center text-xs bg-gray-50 p-2.5 rounded-lg">
                                <span class="text-gray-600">Total Penduduk</span>
                                <span class="font-bold text-gray-800">1.420 Jiwa</span>
                            </div>
                            <div class="flex justify-between items-center text-xs bg-gray-50 p-2.5 rounded-lg">
                                <span class="text-gray-600">Kepala Keluarga (KK)</span>
                                <span class="font-bold text-gray-800">385 KK</span>
                            </div>
                            <div class="flex justify-between items-center text-xs bg-gray-50 p-2.5 rounded-lg">
                                <span class="text-gray-600">Jumlah RT</span>
                                <span class="font-bold text-gray-800">12 RT</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Struktur Organisasi -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
                    <div class="h-44 bg-gray-200 relative">
                        <img src="{{ asset('image/foto_kades.jpeg') }}" alt="Struktur Organisasi Desa" class="w-full h-full object-cover">
                        <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs px-2.5 py-1 rounded-full font-semibold">Pemerintahan</span>
                    </div>
                    <div class="p-5">
                        <h4 class="text-lg font-bold text-gray-800 mb-2">Struktur Organisasi</h4>
                        <p class="text-xs text-gray-600 mb-4 leading-relaxed">
                            Bagan tata kelola dan susunan perangkat Desa Sukamaju yang bertugas merawat & melayani warga.
                        </p>
                        <button onclick="openModal('modalStruktur')" class="inline-flex items-center text-xs font-semibold text-green-600 hover:text-green-700">
                            Buka Bagan Organisasi &rarr;
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- POTENSI DESA -->
    <section id="potensi" class="py-12 bg-white border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4">
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900">POTENSI DESA</h2>
                <p class="text-xs text-gray-500 mt-1">Wisata, UMKM, dan hasil bumi unggulan Desa Sukamaju</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card Wisata -->
                <div class="border border-gray-200 bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <img src="{{ asset('image/foto_goa_batu.jpeg') }}" alt="Wisata" class="w-full h-44 object-cover rounded-lg mb-4">
                        <h3 class="font-bold text-lg text-gray-800 mb-1">Wisata Desa</h3>
                        <p class="text-xs text-gray-500 line-clamp-2">Jelajahi keindahan alam dan destinasi lokal unggulan desa.</p>
                    </div>
                    <a href="#" class="inline-block mt-4 text-xs font-semibold text-green-600 hover:text-green-700">
                        Lihat Selengkapnya &rarr;
                    </a>
                </div>

                <!-- Card UMKM -->
                <div class="border border-gray-200 bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <img src="{{ asset('image/foto_umkm.jpeg') }}" alt="UMKM" class="w-full h-44 object-cover rounded-lg mb-4">
                        <h3 class="font-bold text-lg text-gray-800 mb-1">UMKM Lokal</h3>
                        <p class="text-xs text-gray-500 line-clamp-2">Dukungan penuh untuk produk dan usaha kreatif milik warga.</p>
                    </div>
                    <a href="#" class="inline-block mt-4 text-xs font-semibold text-green-600 hover:text-green-700">
                        Lihat Selengkapnya &rarr;
                    </a>
                </div>

                <!-- Card Hasil Bumi -->
                <div class="border border-gray-200 bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <img src="{{ asset('image/foto_hasilbumi.jpeg') }}" alt="Hasil Bumi" class="w-full h-44 object-cover rounded-lg mb-4">
                        <h3 class="font-bold text-lg text-gray-800 mb-1">Hasil Bumi</h3>
                        <p class="text-xs text-gray-500 line-clamp-2">Potensi komoditas pertanian dan perkebunan unggulan desa.</p>
                    </div>
                    <a href="#" class="inline-block mt-4 text-xs font-semibold text-green-600 hover:text-green-700">
                        Lihat Selengkapnya &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- BERITA SECTION -->
    <section id="berita" class="py-12 bg-gray-50 border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Berita & Kegiatan Desa</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200 p-5">
                    <span class="text-xs text-green-600 font-semibold uppercase tracking-wider">Kegiatan Desa</span>
                    <h3 class="font-bold text-lg text-gray-800 mt-1 mb-2">Gotong Royong Kebersihan Lingkungan Desa Sukamaju</h3>
                    <p class="text-gray-600 text-sm mb-4">Warga Desa Sukamaju antusias mengikuti kegiatan gotong royong mingguan demi menjaga kebersihan lingkungan...</p>
                    <span class="text-xs text-gray-400">📅 4 Agustus 2026</span>
                </div>

                <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200 p-5">
                    <span class="text-xs text-green-600 font-semibold uppercase tracking-wider">Pengumuman</span>
                    <h3 class="font-bold text-lg text-gray-800 mt-1 mb-2">Pelatihan Digitalisasi UMKM Desa</h3>
                    <p class="text-gray-600 text-sm mb-4">Pemerintah Desa Sukamaju menggelar pelatihan pemasaran digital untuk mendorong pelaku UMKM lokal...</p>
                    <span class="text-xs text-gray-400">📅 2 Agustus 2026</span>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERI FOTO -->
    <section class="py-12 bg-white border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-900">GALERI FOTO</h2>
                <p class="text-xs text-gray-500 mt-1">Dokumentasi kegiatan dan suasana Desa Sukamaju</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="h-40 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition group">
                    <img src="{{ asset('image/foto_11.jpeg') }}" alt="Dokumentasi 1" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="h-40 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition group">
                    <img src="{{ asset('image/foto_111.jpeg') }}" alt="Dokumentasi 2" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="h-40 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition group">
                    <img src="{{ asset('image/foto_1111.jpeg') }}" alt="Dokumentasi 3" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="h-40 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition group">
                    <img src="{{ asset('image/foto_1.jpeg') }}" alt="Dokumentasi 4" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                </div>
            </div>
        </div>
    </section>

    <!-- PETA LOKASI DESA -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">PETA LOKASI DESA</h2>
            <div class="w-full h-80 rounded-xl overflow-hidden shadow-md border border-gray-200">
                <iframe 
                    src="https://maps.google.com/maps?q=-0.226162,117.079421&hl=id&z=16&output=embed" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <!-- MODAL POP-UP PETA WILAYAH -->
    <div id="modalPeta" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-3xl w-full p-6 relative shadow-2xl">
            <button onclick="closeModal('modalPeta')" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 bg-gray-100 rounded-full p-2">
                ✕
            </button>
            <h3 class="text-xl font-bold text-gray-800 mb-4">Detail Peta Wilayah Desa</h3>
            <div class="rounded-xl overflow-hidden max-h-[70vh]">
                <img src="{{ asset('image/foto_goa_batu.jpeg') }}" class="w-full h-auto object-contain" alt="Peta Besar">
            </div>
        </div>
    </div>

    <!-- MODAL POP-UP STRUKTUR ORGANISASI -->
    <div id="modalStruktur" class="fixed inset-0 bg-black/70 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-4xl w-full p-6 relative shadow-2xl border border-gray-100 max-h-[90vh] overflow-y-auto">
            <!-- Tombol Close -->
            <button onclick="closeModal('modalStruktur')" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-full w-9 h-9 flex items-center justify-center font-bold transition cursor-pointer">
                ✕
            </button>

            <h3 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Struktur Organisasi & Perangkat Desa Sukamaju</h3>

            <!-- 1. Foto / Gambar Bagan jika ada -->
            <div class="rounded-xl overflow-hidden bg-gray-50 p-2 border border-gray-200 mb-6">
                <img src="{{ asset('image/foto_kades.jpeg') }}" class="w-full h-auto max-h-[40vh] object-contain mx-auto rounded-lg" alt="Bagan Struktur Organisasi">
            </div>

            <!-- 2. Tabel Rincian Nama Perangkat Desa -->
            <div class="overflow-x-auto">
                <table class="w-full text-xs text-left text-gray-600 border border-gray-200 rounded-lg overflow-hidden">
                    <thead class="bg-green-700 text-white font-semibold">
                        <tr>
                            <th class="py-2.5 px-4">Jabatan</th>
                            <th class="py-2.5 px-4">Nama Perangkat Desa</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="bg-green-50 font-semibold text-green-900">
                            <td class="py-2 px-4">Kepala Desa</td>
                            <td class="py-2 px-4">Bapak Kuswara</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">Sekretaris Desa</td>
                            <td class="py-2 px-4">Imam Fauzi</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="py-2 px-4">Kaur Keuangan</td>
                            <td class="py-2 px-4">Dwi Rohana</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">Kaur Umum & Tata Usaha</td>
                            <td class="py-2 px-4">Sri Murni</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="py-2 px-4">Kaur Perencanaan</td>
                            <td class="py-2 px-4">Asih Kumalawati</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">Kasi Pemerintahan</td>
                            <td class="py-2 px-4">Ahmad Nurul Huda, S.T.</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="py-2 px-4">Kasi Kesejahteraan</td>
                            <td class="py-2 px-4">Ani Purwanti, S.Pd.</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">Kasi Pelayanan</td>
                            <td class="py-2 px-4">Eko Adi Prasetyo, S.Pd.</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="py-2 px-4">Kepala Dusun I</td>
                            <td class="py-2 px-4">Reken Wiharto</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">Kepala Dusun II</td>
                            <td class="py-2 px-4">Joko Danan Prihatin</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer id="kontak" class="bg-gray-900 text-gray-300 pt-10 pb-6">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 text-sm mb-8">
            <!-- Kolom 1: Kontak -->
            <div>
                <h4 class="font-bold text-white text-base mb-3 border-b border-gray-700 pb-2">Kontak Desa</h4>
                <p class="text-xs leading-relaxed text-gray-400 mb-2">
                    <strong>Alamat:</strong><br>
                    Jl. Poros Separi Besar No.1 Km 47, Desa Sukamaju, Kec. Tenggarong Seberang, Kab. Kutai Kartanegara, Kalimantan Timur 75572
                </p>
                <p class="text-xs text-gray-400"><strong>Telepon/WA:</strong> 0852-4556-9694</p>
                <p class="text-xs text-gray-400"><strong>Email:</strong> admin@desasukamaju.id</p>
            </div>

            <!-- Kolom 2: Tautan -->
            <div>
                <h4 class="font-bold text-white text-base mb-3 border-b border-gray-700 pb-2">Tautan Cepat</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="#" class="hover:text-green-400 transition">Beranda</a></li>
                    <li><a href="#profil" class="hover:text-green-400 transition">Profil & Sejarah Desa</a></li>
                    <li><a href="#potensi" class="hover:text-green-400 transition">Potensi Desa</a></li>
                    <li><a href="#berita" class="hover:text-green-400 transition">Berita & Kegiatan</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Sosmed -->
            <div>
                <h4 class="font-bold text-white text-base mb-3 border-b border-gray-700 pb-2">Sosial Media</h4>
                <p class="text-xs text-gray-400 mb-3">Ikuti perkembangan dan kegiatan Desa Sukamaju melalui media sosial resmi kami:</p>
                <div class="space-y-2 text-xs">
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="flex items-center text-gray-300 hover:text-green-400 transition gap-2">
                        <span>📷 Instagram:</span>
                        <span class="font-medium">pemdes_sukamaju</span>
                    </a>
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="flex items-center text-gray-300 hover:text-green-400 transition gap-2">
                        <span>📘 Facebook:</span>
                        <span class="font-medium">Desa Sukamaju Resmi</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-5 text-center text-xs text-gray-500 max-w-6xl mx-auto px-4">
            <p>© 2026 Pemerintah Desa Sukamaju. All rights reserved.</p>
            <p class="mt-1 text-[11px] text-gray-600">Dikembangkan oleh Tim KKN Mahasiswa untuk Desa Sukamaju</p>
        </div>
    </footer>

    <!-- SCRIPT POP-UP MODAL -->
    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }
        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }
    </script>
</body>
</html>