<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../style_env.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/katalog.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <title>Home</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
      <a href="">
        <img src="../navbar/logo.png" alt="Logo Ugene" />
      </a>
      <a class="navbar__item" href="">
        <p>Cakusers</p>
        <span class="material-icons md-36">account_circle</span>
      </a>
    </nav>
    <!-- End Navbar -->

    <div class="root">
      <!-- Content -->
      <div class="title-wrapper">
        <h1>Headphones</h1>
      </div>
      <div class="card">
        <a class="card__item">
            <h4>Wireless Soundcore Q20i</h4>
          <img src="{{asset('img/produk.png')}}" alt="" />
          <div class="item__head">
            <p>Rp.1.7000.000.</p>
          </div>
        </a>

        <a class="card__item">
            <h4>Wireless Soundcore Q20i</h4>
            <img src="{{asset('img/produk.png')}}" alt="" />
            <div class="item__head">
              <p>Rp.1.7000.000.</p>
          </div>
        </a>
        <a class="card__item">
            <h4>Wireless Soundcore Q20i</h4>
            <img src="{{asset('img/produk.png')}}" alt="" />
            <div class="item__head">
              <p>Rp.1.7000.000.</p>
          </div>
        </a>
        <a class="card__item">
            <h4>Wireless Soundcore Q20i</h4>
            <img src="{{asset('img/produk.png')}}" alt="" />
            <div class="item__head">
              <p>Rp.1.7000.000.</p>
          </div>
        </a>
        <a class="card__item">
            <h4>Wireless Soundcore Q20i</h4>
            <img src="{{asset('img/produk.png')}}" alt="" />
            <div class="item__head">
              <p>Rp.1.7000.000.</p>
          </div>
        </a>
        <a class="card__item">
            <h4>Wireless Soundcore Q20i</h4>
            <img src="{{asset('img/produk.png')}}" alt="" />
            <div class="item__head">
              <p>Rp.1.7000.000.</p>
          </div>
        </a>
      </div>
      <div class="pagination">
        <a href="" class="material-icons">arrow_back_ios_new</a>
        <a href="" class="active">1</a>
        <a href="" class="">2</a>
        <a href="" class="">3</a>
        <a href="" class="material-icons">arrow_forward_ios</a>
      </div>
      <!-- End Content -->
    </div>
  </body>
</html>
