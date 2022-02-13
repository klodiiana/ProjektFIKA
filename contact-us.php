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
          <a href="login.php">Logout</a>
        </nav>
      </div>

    </header>
    <!--Header Section ends-->

    <!--Contact Us Section starts-->

    <section class="contact_section">

      <div class="about">
      <div class="contact-text">
        <div class="text">
        <h3>Get in touch!</h3>
            <h4>
              Contact us today, email or text our number below and get a reply within 24 hours! We're happy to
              answer any questions you may have.
            </h4>
        </div>
      </div>

        <div class="info">
          <div class="info1">
            <span>Email</span> <br />
            <p>Fika@gmail.com</p>
            <span>Phone</span> <br />
            <p>+383 49 124 532</p>
            <span>On the web</span><br />
            <a class="aa" href="https://www.linkedin.com/">Linkedin</a>
            <a class="aa" href="https://www.twitter.com/">Twitter</a>
            <a class="aa" href="https://www.facebook.com/">Facebook</a>
            <a class="aa" href="https://www.instagram.com/">Instagram</a>

            <br />
            <span>Adress</span><br />
            <p>Rruga Tirana, Prizren, 20000, Kosovë</p>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d94546.59386408077!2d20.664557824412178!3d42.22339779580203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1353950a12f4301f%3A0xda0e2e9b8d3d5850!2sPrizren!5e0!3m2!1sen!2sch!4v1640382400518!5m2!1sen!2sch"
              width="100%" height="300" id="map" allowfullscreen="" loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>

    </section>
    <!--Contact Us Section ends-->

    <!--Footer Section starts-->
    <footer class="site-footer">
      <div class="f--container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Fika - Book Coffee Shop</h6>
            <p class="text-justify">Rruga Tirana, Prizren, 20000, Kosovë</p>
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
    <script src="skripta.js"></script>
    
  </body>
</html>
