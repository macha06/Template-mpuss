<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>M-PUSS</title>
    @include('part.link-landing')
  </head>
  <body>
    @include('layout.navbar-lp')
    <section class="hero">
      <div class="main">
        <div class="content">
          <small>Ready for Reading a book</small>
          <h2>Tanpa Harus Ngantri</h2>
          <h5>Untuk Umum</h5>
          <p>
            menyediakan layanan perpustakaan online untuk meminjam buku tanpa harus Mengantri
          </p>
          <div class="btns">
            <button>Pinjam Buku ?<i class="fa-solid fa-arrow-right"></i></button>
            <button>Masuk</button>
          </div>
        </div>
        <div class="img">
          <img
            src="{{asset('')}}assets/img/teenager-student-girl-yellow-pointing-finger-side-copy.png"
            alt=""
          />
        </div>
      </div>
      @include('part.dot')
      <div class="orange-circle"></div>
      <div class="blue-circle"></div>
    </section>

    <section class="service">
      <div class="service-container">
        <div class="service-card">
          <div class="icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <div class="service-content">
            <h5>Banyak Pilihian buku</h5>
            <p>
              Terdapat banyak sekali pilihan buku, dan terdapat banyak kategori
            </p>
          </div>
        </div>
        <div class="service-card">
          <div class="icon">
            <i class="fa-solid fa-house"></i>
          </div>
          <div class="service-content">
            <h5>Tempat Yg nyaman</h5>
            <p>
              Memiliki ruangan membaca yg nyaman
            </p>
          </div>
        </div>
        <div class="service-card">
          <div class="icon">
            <i class="fa-solid fa-thumbs-up"></i>
          </div>
          <div class="service-content">
            <h5>Best Quality</h5>
            <p>
              kualitas buku yg bagus
            </p>
          </div>
        </div>
        <div class="service-card">
          <div class="icon">
            <i class="fa-solid fa-hands-holding-circle"></i>
          </div>
          <div class="service-content">
            <h5>Mudah untuk meminjam</h5>
            <p>
              Cukup 3 menit anda sudah dapat meminjam buku
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="suggestion">
      <div class="container">
        <div class="recommend">
          <h4>Recommended For You</h4>
          <p>
            Buku-buku yg kamu sediakan khusus untuk kamu
          </p>
          <div class="book-container">
            <div class="book">
              <figure>
                <a href="Pages/book-detail.html"
                  ><img src="{{asset('')}}assets/img/book-1.jpg" alt=""
                /></a>
              </figure>
            </div>
            <div class="book">
              <figure>
                <a href="Pages/book-detail.html"
                  ><img src="{{asset('')}}assets/img/book-2.jpg" alt=""
                /></a>
              </figure>
            </div>
            <div class="book">
              <figure>
                <a href="Pages/book-detail.html"
                  ><img src="{{asset('')}}assets/img/book-3.jpg" alt=""
                /></a>
              </figure>
            </div>
            <div class="book">
              <figure>
                <a href="Pages/book-detail.html"
                  ><img src="{{asset('')}}assets/img/book-4.jpg" alt=""
                /></a>
              </figure>
            </div>
          </div>
          <div class="circle-1"></div>
          <div class="circle-2"></div>
          @include('part.dot')
        </div>
        <div class="popular">
          <h4>Trending Book</h4>
          <p>
            Buku yg sering di pinjam
          </p>
          <div class="book-container">
            <div class="book">
              <figure>
                <a href="Pages/book-detail.html"
                  ><img src="{{asset('')}}assets/img/book-5.jpg" alt=""
                /></a>
              </figure>
            </div>
            <div class="book">
              <figure>
                <a href="Pages/book-detail.html"
                  ><img src="{{asset('')}}assets/img/book-6.jpg" alt=""
                /></a>
              </figure>
            </div>
            <div class="book">
              <figure>
                <a href="Pages/book-detail.html"
                  ><img src="{{asset('')}}assets/img/book-7.jpg" alt=""
                /></a>
              </figure>
            </div>
            <div class="book">
              <figure>
                <a href="Pages/book-detail.html"
                  ><img src="{{asset('')}}assets/img/book-8.jpg" alt=""
                /></a>
              </figure>
            </div>
          </div>
          <div class="circle-1"></div>
          <div class="circle-2"></div>
          @include('part.dot')
        </div>
      </div>
    </section>
    <section class="book-sale">
      <div class="heading">
        <h4>Buku-buku baru yang tersedia</h4>
        <div class="arrowbtn">
          <i id="left" class="fa-solid fa-angle-left"></i>
          <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
      </div>
      <div class="book-container">
        <div class="wrapper">
          <ul class="carousel">
            <li class="card">
              <div class="img">
                <a href="Pages/book-detail.html"><img src="{{asset('')}}assets/img/book-1.jpg" alt="" /></a>
                <span class="badge">New</span>
              </div>
              <h5>The Giver</h5>
              <div class="genre">
                <span>adventure,</span><span>survival</span>
              </div>
              <div class="footer">
                <span class="star"><i class="fa fa-star"></i> 4.7</span>
                <div class="price">
                </div>
              </div>
            </li>
            <li class="card">
              <div class="img">
                <a href="Pages/book-detail.html"><img src="{{asset('')}}assets/img/book-2.jpg" alt="" /></a>
                <span class="badge">New</span>
              </div>
              <h5>The Wright ...</h5>
              <div class="genre">
                <span>adventure,</span><span>survival</span>
              </div>
              <div class="footer">
                <span class="star"><i class="fa fa-star"></i> 4.7</span>
                <div class="price">
                </div>
              </div>
            </li>
            <li class="card">
              <div class="img">
                <a href="Pages/book-detail.html"><img src="{{asset('')}}assets/img/book-9.jpg" alt="" /></a>
                <span class="badge">New</span>
              </div>
              <h5>The Ruins Of...</h5>
              <div class="genre">
                <span>adventure,</span><span>survival</span>
              </div>
              <div class="footer">
                <span class="star"><i class="fa fa-star"></i> 4.7</span>
                <div class="price">
                </div>
              </div>
            </li>
            <li class="card">
              <div class="img">
                <a href="Pages/book-detail.html"><img src="{{asset('')}}assets/img/book-10.jpg" alt="" /></a>
                <span class="badge">New</span>
              </div>
              <h5>Percy Jackson</h5>
              <div class="genre">
                <span>adventure,</span><span>survival</span>
              </div>
              <div class="footer">
                <span class="star"><i class="fa fa-star"></i> 4.7</span>
                <div class="price">
                </div>
              </div>
            </li>
            <li class="card">
              <div class="img">
                <a href="Pages/book-detail.html"><img src="{{asset('')}}assets/img/book-5.jpg" alt="" /></a>
                <span class="badge">New</span>
              </div>
              <h5>To kill a...</h5>
              <div class="genre">
                <span>adventure,</span><span>survival</span>
              </div>
              <div class="footer">
                <span class="star"><i class="fa fa-star"></i> 4.7</span>
                <div class="price">
                </div>
              </div>
            </li>
            <li class="card">
              <div class="img">
                <a href="Pages/book-detail.html"><img src="{{asset('')}}assets/img/book-6.jpg" alt="" /></a>
                <span class="badge">New</span>
              </div>
              <h5>Horry Potter</h5>
              <div class="genre">
                <span>adventure,</span><span>survival</span>
              </div>
              <div class="footer">
                <span class="star"><i class="fa fa-star"></i> 4.7</span>
                <div class="price">
                </div>
              </div>
            </li>
            <li class="card">
              <div class="img">
                <a href="Pages/book-detail.html"><img src="{{asset('')}}assets/img/book-7.jpg" alt="" /></a>
                <span class="badge">New</span>
              </div>
              <h5>Heroes of ...</h5>
              <div class="genre">
                <span>adventure,</span><span>survival</span>
              </div>
              <div class="footer">
                <span class="star"><i class="fa fa-star"></i> 4.7</span>
                <div class="price">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="countdown">
      <div class="container">
        <div class="customer counter">
          <div class="icon">
            <i class="fa-solid fa-user-group"></i>
          </div>
          <div class="content">
            <h4 class="count">125,663</h4>
            <small>Happy Customers</small>
          </div>
        </div>
        <div class="book counter">
          <div class="icon">
            <i class="fa-solid fa-book"></i>
          </div>
          <div class="content">
            <h4 class="count">50,672</h4>
            <small>Book Collections</small>
          </div>
        </div>
        <div class="store counter">
          <div class="icon">
            <i class="fa-solid fa-store"></i>
          </div>
          <div class="content">
            <h4 class="count">1,562</h4>
            <small>Our Stores</small>
          </div>
        </div>
        <div class="writer counter">
          <div class="icon">
            <i class="fa-solid fa-feather"></i>
          </div>
          <div class="content">
            <h4 class="count">457</h4>
            <small>Famous Writer</small>
          </div>
        </div>
      </div>
    </section>
    <section class="subscription">
      <div class="container">
        <h4>
          Subscribe our newsletter for Latest <br />
          books updates
        </h4>
        <div class="input">
          <input type="text" placeholder="Type your email here" />
          <button>subscribe</button>
        </div>
      </div>
      <div class="circle-1"></div>
      <div class="circle-2"></div>
    </section>
    @include('layout.footer-lp')
    <button class="back-to-top"><i class="fa-solid fa-chevron-up"></i></button>
    @include('part.footer-lp')
  </body>
</html>
