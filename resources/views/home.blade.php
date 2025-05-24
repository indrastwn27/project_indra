@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-green-100 shadow-md rounded-lg text-center p-8">
        <h1 class="text-3xl md:text-4xl font-bold text-green-900 mb-4">
            Selamat datang di <span class="text-green-700">SampahBaik</span>
        </h1>
        <p class="text-gray-700 text-base md:text-lg">
            Bersama kita wujudkan lingkungan bersih dan sehat melalui pengelolaan sampah yang baik dan berkelanjutan.
        </p>
        <button class="mt-4 inline-flex items-center bg-green-700 text-white px-6 py-2 rounded hover:bg-green-600 transition duration-200">
            Pelajari Cara Terbaik
        </button>
    </div>
</div>

<!-- Pengelolaan Sampah Section -->
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg p-8">
        <h2 class="text-xl font-semibold text-green-700 mb-4">Mengapa pengelolaan sampah itu penting</h2>
        <p class="text-gray-700 text-base md:text-lg">
            Pengelolaan sampah yang baik dapat mengurangi pencemaran lingkungan, menjaga kesehatan masyarakat,
            serta mendukung ekonomi sirkular melalui daur ulang dan pengurangan sampah.
        </p>
</section>
</div>
<!-- Jenis Sampah -->
<div class="container mx-auto px-4 mt-10">
  <section class="bg-green-50 shadow-md p-6 rounded-lg">
    <h2 class="text-2xl font-semibold text-green-700 mb-4 text-center">Jenis Sampah & Cara Mengolahnya</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <div class="bg-white p-4 rounded shadow text-center">
        <h3 class="font-bold text-green-600 mb-2">Sampah Organik</h3>
        <p class="text-sm text-gray-700">Dapat dijadikan kompos atau bahan biogas alami.</p>
      </div>
      <div class="bg-white p-4 rounded shadow text-center">
        <h3 class="font-bold text-green-600 mb-2">Sampah Anorganik</h3>
        <p class="text-sm text-gray-700">Bisa didaur ulang menjadi barang baru dan bermanfaat.</p>
      </div>
      <div class="bg-white p-4 rounded shadow text-center">
        <h3 class="font-bold text-green-600 mb-2">Sampah B3</h3>
        <p class="text-sm text-gray-700">Perlu penanganan khusus karena bersifat berbahaya.</p>
      </div>
    </div>
  </section>
</div>

<!-- Komunitas -->
<div class="container mx-auto px-4 mt-10">
  <section class="bg-white shadow-md p-6 rounded-lg text-center">
    <h2 class="text-2xl font-semibold text-green-700 mb-3">Bergabung Bersama Komunitas</h2>
    <p class="text-gray-700 mb-4 text-base">
      Ikut serta dalam gerakan peduli sampah dan menjadi bagian dari perubahan lingkungan yang lebih baik.
    </p>
    <button class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-600 transition duration-200">
      Daftar Sekarang
    </button>
  </section>
</div>
