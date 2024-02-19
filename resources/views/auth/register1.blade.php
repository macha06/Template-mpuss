<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bookoe - Online Book Store website</title>
    @include('part.link-landing')
    <link rel="stylesheet" href="{{ asset('') }}assets/css/book-filter.css" />
  </head>
  <body>
    @include('layout.nav')
    <div class="breadcrumb-container">
      <ul class="breadcrumb">
        <li><a href="{{ url('/') }}" style="color: #6c5dd4">Beranda</a></li>
        <li><a href="#">Registration</a></li>
      </ul>
    </div>

    <section class="registration">
      <h3>Registration</h3>
      <div class="registration-form">
        <h4>Create New Account</h4>
        <p>If you don't have an account with us, Please Create new account.</p>
        <div class="input-form">
          <div class="input-field">
            <label for="name">Username *</label>
            <input type="text" name="" id="name" placeholder="Your Name">
          </div>
          <div class="input-field">
            <label for="email">Email *</label>
            <input type="email" name="" id="email" placeholder="Your Email">
          </div>
          <div class="input-field">
            <label for="password">Password *</label>
            <input type="password" name="" id="password" placeholder="Password">
          </div>
          <div class="input-field">
            <label for="cpassword">Confirm Password *</label>
            <input type="password" name="" id="cpassword" placeholder="Confirm Password">
          </div>
          <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="">privacy policy</a></p>
          <a href="{{ url('login') }}"><button type="submit" >Create Account</button></a>
          <p>Already Have an Account ? <a href="{{ url('login') }}">Login Now</a></p>
        </div>
      </div>
    </section>
    @include('layout.footer-lp')
    <button class="back-to-top"><i class="fa-solid fa-chevron-up"></i></button>
    <script src="{{ asset('') }}assets/js/back-to-top.js"></script>
  </body>
</html>
