<nav class="left-sidenav">
    <div class="logo">
      <img src="{{ URL::asset('img/logo_cleon.png') }}" alt="" />
      <p>
        Official Administrator Page
      </p>
    </div>
    <ul>
      <li><a href="#"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
      {{-- Post Menu --}}
      <li>
        <a role="button" data-toggle="collapse" href="#postDrop" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-paperclip"></span> Post</a>
        <ul class="collapse sembunyi" id="postDrop">
          <li><a href="#"><span class="glyphicon glyphicon-th-list"></span> Lihat Semua berita</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Buat berita</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Pengumuman</a></li>
        </ul>
      </li>
      {{-- Product Menu --}}
      <li>
        <a role="button" data-toggle="collapse" href="#paketDrop" aria-expanded="false" aria-controls="paketDrop"><span class="glyphicon glyphicon-globe"></span> Product</a>
        <ul class="collapse sembunyi" id="paketDrop">
          <li><a href="#"><span class="glyphicon glyphicon-th-list"></span>Time Based</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-plus"></span>Volume Based</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-plus"></span>Unlimited</a></li>
        </ul>
      </li>

      <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> TOS</a></li>

      {{-- FAQ Menu --}}
      <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> FAQ</a></li>

      {{-- System Setting Menu --}}
      <li><a role="button" data-toggle="collapse" href="#sistemDrop" aria-expanded="false" aria-controls="sistemDrop"><span class="glyphicon glyphicon-cog"></span> System Setting</a>
        <ul class="collapse sembunyi" id="sistemDrop">
          <li><a href="#"><span class="glyphicon glyphicon-th-list"></span> Lihat USer</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-th-list"></span> Lihat Konfigurasi</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-th-list"></span> Lihat Setting Kantor</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-th-list"></span> </a></li>
          <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Buat berita</a></li>
          <li><a href="#">Another Menu here</a></li>
        </ul>
      </li>
    </ul>
</nav>
