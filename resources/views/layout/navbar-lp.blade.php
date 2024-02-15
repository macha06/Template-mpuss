<header>
    <nav class="navbar">
      <div class="logo">
        <div class="img">
          <img src="{{asset('')}}assets/img/logo.png" alt="" />
        </div>
        <div class="logo-header">
          <h4><a href="index.html">M-PUSS</a></h4>
          <small>Perpustakaan Digital</small>
        </div>
      </div>
      <ul class="nav-list">
        <div class="logo">
          <div class="title">
            <div class="img">
              <img src="{{asset('')}}assets/img/logo.png" alt="" />
            </div>
            <div class="logo-header">
              <h4><a href="index.html">M-PUSS</a></h4>
              <small>Perpustakaan Digital</small>
            </div>
          </div>
          <button class="close"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <li><a href="index.html">Beranda</a></li>
        <li><a href="pages/service.html">Layanan</a></li>
        <li><a href="pages/contact.html">Kontak</a></li>
        <li><a href="{{ url('search-book') }}">Buku</a></li>
        <button class="login"><a href="{{ url('login') }}" >Log In</a></button>
        <button class="signup">
          <i class="fa-solid fa-user"></i><a href="{{ url('register') }}">Sign Up</a>
        </button>
      </ul>
      <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </nav>
  </header>