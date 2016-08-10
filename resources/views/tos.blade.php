@extends('master')

@section('title', 'Term Of Service')

@push('css')
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" media="screen" charset="utf-8">
@endpush

@section('content')
  {{-- header --}}
  @include('component.navbar')

  <div class="container">
    <div class="blog-post">
      <h3 class="text-center">Term Of Service</h3>
      <span class="center"><img src="{{URL::asset('img\cloud.png')}}" alt="TOS" /></span>
  		<div class="content">
        <p>Terms of Services (TOS) adalah perjanjian dimana pelanggan menyetujui sebelum menggunakan layanannya. Perjanjian ini dibuat dan secara otomatis mengikat pengguna layanan internet CLEON. Perjanjian ini dibuat sedemikian rupa demi kepentingan bersama, serta keleluasaan dan keamanan pelanggan dalam memanfaatkan layanan internet CLEON.</p>
        <p>Deskripsi Layanan</p>
        <p>Layanan yang diberikan oleh CLEON meliputi secara garis besar layanan internet dengan menggunakan teknologi Wireless untuk dapat akses ke Internet yang berada di lokasi-lokasi tertentu yang memasang internet CLEON.</p>
        <p>Syarat dan Ketentuan User CLEON</p>
        <p>Setiap Pengguna CLEON (untuk selanjutnya disebut USER) bersedia terikat dan tunduk terhadap syarat dan ketentuan ini (untuk selanjutnya disebut PERATURAN). CLEON berhak dari waktu ke waktu merubah dan atau mengganti Peraturan tanpa ada pemberitahuan terlebih dahulu. User diwajibkan untuk selalu melihat syarat dan ketentuan ini.</p>
        <p>User &nbsp;dilarang untuk</p>
        <ul>
        <li>Melakukan perbaikan, penginstalasian, perubahan konfigurasi dalam bentuk apapun terhadap perangkat yang dipinjamkan</li>
        <li>Mencoba merusak, mencoba mengganti data &amp; system server milik CLEON</li>
        <li>Menggunakan koneksi internet CLEON untuk kegiatan-kegiatan yang melanggar hukum yang berlaku di wilayah Republik Indonesia atau hukum yang berlaku di wilayah yang bersangutan serta hukum Internasional.</li>
        </ul>
        <p>CLEON berhak untuk</p>
        <ul>
        <li>Memutuskan koneksi internet wireless secara permanen jika mitra menyatakan berhenti berlangganan</li>
        <li>Memutuskan koneksi internet wireless jika mitra dikatakan tidak dapat memenuhi target penjualan</li>
        <li>Memutuskan koneksi internet wireless sementara jika user diketahui melakukan aksi yang dilarang oleh undang-undang misal: Hacking, Cracking, dan kegiatan yang merugikan.</li>
        </ul>
        <p>Perubahan Term Of Services</p>
        <p>CLEON berhak untuk merubah syarat dan ketentuan ini kapan saja, sangat dianjurkan memeriksa halaman ini sedikitnya sekali sebulan. CLEON berusaha untuk menyediakan layanan terbaik bagi anda, tetapi kami tidak akan memberikan toleransi terhadap kegiatan yang melanggar hukum atau segala bentuk penyimpangan yang dilakukan terhadap server kami. Petunjuk ringkas ini dibuat untuk melindungi kepentingan anda, pelanggan lainnya dan kami.</p>
  		</div>

    </div>
  </div>

  {{-- header --}}
  @include('component.footer')

@endsection
