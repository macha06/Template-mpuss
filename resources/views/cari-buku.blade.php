<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Filter Page</title>

    <!--- google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    @include('part.link-landing')
    <link rel="stylesheet" href="{{ asset('') }}assets/css/book-filter.css" />
  </head>
  <body>
    @include('layout.nav')
    <div class="breadcrumb-container">
      <ul class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="#">Books</a></li>
      </ul>
    </div>
    <section class="filter">
      <div class="book-grid-container">
        <div class="filter-option">
          <div class="filter-group">
            <h4>Filter Options</h4>
          <div class="editor-pick select-box">
            <div class="opt-title">
              <h4>Editor Picks</h4>
              <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="option">
              <ul>
                <li><a href="">Best Sales</a></li>
                <li><a href="">Most Recommended</a></li>
                <li><a href="">Newest Books</a></li>
                <li><a href="">Featured</a></li>
              </ul>
            </div>
          </div>
          <div class="select-date dropdown">
            <div class="opt-title">
              <h4>Select Date</h4>
              <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="option">
              <input type="date" name="" id="" />
            </div>
          </div>
          <div class="genre-category select-box">
            <div class="opt-title">
              <h4>Shop By Category</h4>
              <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="option">
              <div class="category">
                <input type="checkbox" />
                <small>Action</small>
              </div>
              <div class="category">
                <input type="checkbox" />
                <small>Fantasy</small>
              </div>
              <div class="category">
                <input type="checkbox" />
                <small>Adventure</small>
              </div>
              <div class="category">
                <input type="checkbox" />
                <small>History</small>
              </div>
              <div class="category">
                <input type="checkbox" />
                <small>Animation</small>
              </div>
              <div class="category">
                <input type="checkbox" />
                <small>Horror</small>
              </div>
              <div class="category">
                <input type="checkbox" />
                <small>Biography</small>
              </div>
              <div class="category">
                <input type="checkbox" />
                <small>Mystery</small>
              </div>
              <div class="category">
                <input type="checkbox" />
                <small>Comedy</small>
              </div>
              <div class="category">
                <input type="checkbox" />
                <small>Romance</small>
              </div>
              <div class="category">
                <input type="checkbox" />
                <small>Crime</small>
              </div>
              <div class="category">
                <input type="checkbox" />
                <small>Sci-fi</small>
              </div>
              <div class="category">
                <input type="checkbox" />
                <small>Documentry</small>
              </div>
              <div class="category">
                <input type="checkbox" />
                <small>Sport</small>
              </div>
            </div>
          </div>
          <div class="range-slider dropdown">
            <div class="opt-title">
              <h4>Price Range</h4>
            </div>
            <div class="option">
              <div class="price-input">
                <div class="field">
                  <span>Min</span>
                  <input type="number" class="input-min" value="2500">
                </div>
                <div class="separator">-</div>
                <div class="field">
                  <span>Max</span>
                  <input type="number" class="input-max" value="7500">
                </div>
              </div>
              <div class="slider">
                <div class="progress"></div>
              </div>
              <div class="range-input">
                <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
              </div>
            </div>
          </div>
          <div class="footer-btn">
            <button>Refine Search</button>
            <button>Reset Filter</button>
          </div>
          </div>
          <i class="fa fa-chevron-right rightbtn"></i>
        </div>
        <div class="book-collections">
          <h4>Books</h4>
          <div class="category">
            <div class="category-list">
              <button>Today</button>
              <button>This Week</button>
              <button>This Month</button>
            </div>
          </div>
          <div class="books">
            <div class="book-card">
              <div class="img">
                <a href="{{ url('detail-book') }}"><img src="{{asset('')}}assets/img/book-1.jpg" alt="" /></a>
                <button class="like" id="likebtn">
                  <i class="fa-regular fa-heart"></i>
                </button>
              </div>
              <h5>The Giver</h5>
              <small
                ><a href="">Adventure,</a><a href="">Thriller,</a
                ><a href="">Drama</a></small
              >
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="book-card">
              <div class="img">
                <a href="{{ url('detail-book') }}"><img src="{{asset('')}}assets/img/book-2.jpg" alt="" /></a>
                <button class="like" id="likebtn">
                  <i class="fa-regular fa-heart"></i>
                </button>
              </div>
              <h5>The Wright ..</h5>
              <small
                ><a href="">Adventure,</a><a href="">Thriller,</a
                ><a href="">Drama</a></small
              >
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="book-card">
              <div class="img">
                <a href="{{ url('detail-book') }}"><img src="{{asset('')}}assets/img/book-5.jpg" alt="" /></a>
                <button class="like" id="likebtn">
                  <i class="fa-regular fa-heart"></i>
                </button>
              </div>
              <h5>To Kill a ...</h5>
              <small
                ><a href="">Adventure,</a><a href="">Thriller,</a
                ><a href="">Drama</a></small
              >
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="book-card">
              <div class="img">
                <a href="{{ url('detail-book') }}"><img src="{{asset('')}}assets/img/book-6.jpg" alt="" /></a>
                <button class="like" id="likebtn">
                  <i class="fa-regular fa-heart"></i>
                </button>
              </div>
              <h5>Harry Potter</h5>
              <small
                ><a href="">Adventure,</a><a href="">Thriller,</a
                ><a href="">Drama</a></small
              >
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="book-card">
              <div class="img">
                <a href="{{ url('detail-book') }}"><img src="{{asset('')}}assets/img/book-7.jpg" alt="" /></a>
                <button class="like" id="likebtn">
                  <i class="fa-regular fa-heart"></i>
                </button>
              </div>
              <h5>Heroes of ...</h5>
              <small
                ><a href="">Adventure,</a><a href="">Thriller,</a
                ><a href="">Drama</a></small
              >
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="book-card">
              <div class="img">
                <a href="{{ url('detail-book') }}"><img src="{{asset('')}}assets/img/book-9.jpg" alt="" /></a>
                <button class="like" id="likebtn">
                  <i class="fa-regular fa-heart"></i>
                </button>
              </div>
              <h5>The ruins of...</h5>
              <small
                ><a href="">Adventure,</a><a href="">Thriller,</a
                ><a href="">Drama</a></small
              >
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="book-card">
              <div class="img">
                <a href="{{ url('detail-book') }}"><img src="{{asset('')}}assets/img/book-10.jpg" alt="" /></a>
                <button class="like" id="likebtn">
                  <i class="fa-regular fa-heart"></i>
                </button>
              </div>
              <h5>Percy Jackson</h5>
              <small
                ><a href="">Adventure,</a><a href="">Thriller,</a
                ><a href="">Drama</a></small
              >
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
            <div class="book-card">
              <div class="img">
                <a href="{{ url('detail-book') }}"><img src="{{asset('')}}assets/img/book-11.jpg" alt="" /></a>
                <button id="likebtn" class="like">
                  <i class="fa-regular fa-heart"></i>
                </button>
              </div>
              <h5>Clever Land</h5>
              <small
                ><a href="">Adventure,</a><a href="">Thriller,</a
                ><a href="">Drama</a></small
              >
              <div class="star-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
          </div>
          <div class="footer">
            <div class="data-shown">
              <p>Showing 8 from 50 data</p>
            </div>
            <div class="pagination">
              <button><i class="fa fa-chevron-left"></i>Previous</button>
              <div class="number">
                <a href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
              </div>
              <button>Next<i class="fa fa-chevron-right"></i></button>
            </div>
          </div>
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

    <script>
      let filterdiv = document.querySelector(".filter-option");
      let iconbtn = document.querySelector(".rightbtn");

      iconbtn.addEventListener("click", () => {
        filterdiv.classList.toggle("active-div");
        iconbtn.classList.toggle("active-btn");
      })





      let editorpick = document.getElementsByClassName("select-box");
      let icon = document.querySelectorAll(".select-box .opt-title i");
      let answer = document.querySelectorAll(".select-box .option");
      for (let i = 0; i < editorpick.length; i++) {
        editorpick[i].addEventListener("click", () => {
          if (icon[i].classList.contains("active")) {
            icon[i].classList.remove("active");
            answer[i].style.maxHeight = null;
            answer[i].style.marginTop = "0rem";
            answer[i].style.padding = "0px";
          } else {
            icon[i].classList.add("active");
            answer[i].style.maxHeight = answer[i].scrollHeight + "px";
            answer[i].style.padding = "0px 20px 20px 20px";
          }
        });
      }

      let selectdate = document.querySelector(".select-date .opt-title");
      let downarrow = document.querySelector(".select-date .opt-title i");
      let option = document.querySelector(".select-date .option");
      selectdate.addEventListener("click",() => {
        if(downarrow.classList.contains("active")){
          downarrow.classList.remove("active");
          option.style.display = "none";
          option.style.padding = "0px";
        }else{
          downarrow.classList.add("active");
          option.style.display = "block";
          option.style.maxHeight = option.scrollHeight+"px";
          option.style.padding = "0px 20px 20px 20px";
        }
      })

      let likebtn = document.getElementsByClassName("like");
      for (let i = 0; i < likebtn.length; i++) {
        likebtn[i].addEventListener("click", () => {
          likebtn[i].classList.toggle("liked");
        });
      }

      const rangeInput = document.querySelectorAll(".range-input input"),
priceInput = document.querySelectorAll(".price-input input"),
range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach(input =>{
    input.addEventListener("input", e =>{
        let minPrice = parseInt(priceInput[0].value),
        maxPrice = parseInt(priceInput[1].value);
        
        if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
            if(e.target.className === "input-min"){
                rangeInput[0].value = minPrice;
                range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
            }else{
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
            }
        }
    });
});

rangeInput.forEach(input =>{
    input.addEventListener("input", e =>{
        let minVal = parseInt(rangeInput[0].value),
        maxVal = parseInt(rangeInput[1].value);

        if((maxVal - minVal) < priceGap){
            if(e.target.className === "range-min"){
                rangeInput[0].value = maxVal - priceGap
            }else{
                rangeInput[1].value = minVal + priceGap;
            }
        }else{
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }
    });
});
    </script>
    <script src="{{ asset('') }}assets/js/repeat-js.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('') }}assets/js/back-to-top.js"></script>
  </body>
</html>