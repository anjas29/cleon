<nav class="left-sidenav">
    <div class="logo">
      <img src="{{ URL::asset('img/logo_cleon.png') }}" alt="" />
      <p>
        Official Administrator Page
      </p>
    </div>
    <ul>
      <li><a href="{{ URL::route('admindashboard') }}"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
      {{-- Post Menu --}}
      <li>
        <a role="button" data-toggle="collapse" href="#postDrop" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-paperclip"></span> Post</a>
        <ul class="collapse sembunyi" id="postDrop">
          <li><a href="{{ URL::route('adminberita') }}"><span class="glyphicon glyphicon-th-list"></span> Berita</a></li>
          <li><a href="{{URL::route('adminpengumuman')}}"><span class="glyphicon glyphicon-bullhorn"></span> Pengumuman</a></li>
          <li><a href="{{ URL::route('adminheader') }}"><span class="glyphicon glyphicon-picture"></span> Header</a></li>
        </ul>
      </li>
      {{-- Product Menu --}}
      <li>
        <a role="button" data-toggle="collapse" href="#paketDrop" aria-expanded="false" aria-controls="paketDrop"><span class="glyphicon glyphicon-globe"></span> Product</a>
        <ul class="collapse sembunyi" id="paketDrop">
          <li><a href="{{ URL::route('admintime') }}"><span class="fa fa-clock-o"></span>Time Based</a></li>
          <li><a href="{{ URL::route('adminvolume') }}"><span class="fa fa-flask"></span>Volume Based</a></li>
          <li><a href="{{ URL::route('adminunlimit') }}"><span class="fa fa-cloud"></span>Unlimited</a></li>
        </ul>
      </li>

      <li><a href="{{URL::route('admintos')}}"><span class="glyphicon glyphicon-list-alt"></span> TOS</a></li>

      {{-- FAQ Menu --}}
      <li><a href="{{URL::route('adminfaq')}}"><span class="glyphicon glyphicon-question-sign"></span> FAQ</a></li>

      {{-- System Setting Menu --}}
      <li><a href="{{URL::route('adminuser')}}"><span class="glyphicon glyphicon-user"></span> Manajemen User</a></li>
      <li><a href="{{URL::route('adminkantor')}}"><span class="fa fa-building-o"></span> Manajemen Profil Kantor</a></li>
    </ul>
</nav>
