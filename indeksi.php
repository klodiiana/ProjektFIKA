<?php 
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FIKA - Book Coffe Shop</title>

    <!--Linku per Font Style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!--Linku per CSS File-->
    <link rel="stylesheet" href="stili.css?v=<?php echo time(); ?>">

  </head>

  <body>

    <!--Header Section starts-->
    <header class="header">
      <div class="header-1">
        <a href="#" class="logo">
          <i class="fas fa-book-reader"></i>
          <span>FIKA</span>
        </a>

        <form action="" class="search-form">
          <input type="search" name="" placeholder="Search Here" id="search-box" />
          <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
          <div id="search-btn" class="fas fa-search"></div>
        </div>

      </div>

      <div class="header-2">
        <nav class="nav-bar">
          <a href="indeksi.php">Home</a>
          <a href="menu.php">Menu</a>
          <a href="books.php">Books</a>
          <a href="contact-us.php">Contact Us</a>
          <a href="indeksi.php?logout='1'">Logout</a>
        </nav>
      </div>

    </header>
    <!--Header Section ends-->

    <!--Home Section starts-->
    <section class="home" id="home">
      <div class="home-section">
        <div class="content">
          <div class="swiper home-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="/images/slide1.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="/images/slide2.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="/images/slide3.jpg" alt="" />
              </div>
            </div>
          </div>

          <div class="about-wrapper">
            <div>
              <h1>About us</h1>
              <p>
                <em>FIKA Book Coffee Shop</em> offers a unique environment
                unlike any other in Prizren. We are not only a place to drop in
                and get your morning cup of coffee, we are a place where you can
                sit down and enjoy that tailor-made cup of coffee. Other than
                that we offer different kind of books to our book-readers,
                including a soft-seating area for you to enjoy your reading.
              </p>
            </div>
          </div>
        </div>

        <!--What We Offer Section starts-->
        <section class="section-2">
          <div class="services">
            <div class="title-wwo">
              <h1>WHAT WE OFFER</h1>
            </div>

            <div class="row">
              <div class="whatweoffer">
                <i class="fas fa-wifi"></i>
                <h2>Free Wifi</h2>
                <p>Free & fast Wifi for every customer.</p>
              </div>

              <div class="whatweoffer">
                <i class="fas fa-book"></i>
                <h2>Books & Comfort</h2>
                <p>We offer books from different genres and authors, and a
                  comfortable environment for our book-readers.</p>
              </div>

              <div class="whatweoffer">
                <i class="fas fa-calendar-week"></i>
                <h2>Book Reading Event</h2>
                <p>Our book reading event includes a reading from the author's
                  work, followed by a panel discussion.</p>
              </div>

              <div class="whatweoffer">
                <i class="fas fa-mug-hot"></i>
                <h2>Coffee Offers & Seasonal Drinks</h2>
                <p> Every Friday we offer 'Buy-One-Get-One-Free'. Other than that
                  we offer festive seasonal drinks.</p>
              </div>

            </div>
          </div>
        </section>
      </div>
    </section>
    <!--Home Section ends-->


    <!--Footer Section starts-->
    <footer class="site-footer">
      <div class="f--container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Fika - Book Coffee Shop</h6>
            <p class="text-justify">Rruga Tirana, Prizren, 20000, Kosov??</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <p>Phone: +383 49 124 532</p>
            <p>Email: fika_coffeeshop@gmail.com</p>
          </div>
        </div>
        <hr />
      </div>
      <div class="b--container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">
              Copyright &copy; 2021 All Rights Reserved by FIKA
              <a href="#"></a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
              <li><a class="twitter" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
              <li><a class="instagram" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>
    <!--Footer Section ends-->

    <!--Linku per JS File-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="skripta.js"></script>

  </body>
</html>
