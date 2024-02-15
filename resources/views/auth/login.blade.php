<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>M-PUSS</title>
    <link rel="stylesheet" href="{{ asset('') }}assets/css/book-filter.css" />
    @include('part.link-landing')
  </head>
  <body>
    @include('layout.nav')
    <div class="breadcrumb-container">
      <ul class="breadcrumb">
        <li><a href="{{ url('/') }}" style="color: #6c5dd4">Beranda</a></li>
        <li><a href="#">Login</a></li>
      </ul>
    </div>

    <section class="login">
      <h3>Login</h3>
      <div class="login-form">
        <h4>Login</h4>
        <p>If you have an account with us, please log in.</p>
        <div class="input-form">
          <div class="input-field">
            <label for="email">Email *</label>
            <input type="email" name="" id="email" placeholder="Your Email">
          </div>
          <div class="input-field">
            <label for="password">Password *</label>
            <input type="password" name="" id="password" placeholder="Password">
          </div>
          
          <p>Forgot Password ?<a href=""> Click Here</a></p>
          <a href="{{ url('admin/dashboard') }}"><button type="submit" >Login Account</button></a>
          <p>Don't Have an Account ? <a href="{{ url('register') }}">Create Account</a></p>
        </div>
      </div>
    </section>
    @include('layout.footer-lp')
    <button class="back-to-top"><i class="fa-solid fa-chevron-up"></i></button>
    <script src="{{ asset('') }}assets/js/back-to-top.js"></script>
  </body>
</html>
