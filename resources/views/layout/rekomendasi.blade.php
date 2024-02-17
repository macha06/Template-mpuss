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
          <?php
          for ($i=0; $i < 6; $i++) { 
            ?>
          <li class="card">
            <div class="img">
              <a href={{ url('login') }}detail.html}"><img src="{{asset('')}}assets/img/book-1.jpg" alt="" /></a>
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
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </section>