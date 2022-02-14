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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIKA - Book Coffe Shop</title>

    <!--Linku per Font Style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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

    <!--Menu Section starts-->
    <section class="section-1">
        <div class="menu-wrap">
            <div class="title">
                <h1>MENU</h1>
                <p>Choose the drink that you like for a better company while reading.</p>
            </div>

            <hr>

            <div class="drinks">
                <div class="hot-drinks">
                    <span class="font"> Hot Drinks </span>

                    <div class="border">
                        <ul type="none">
                            <li class="list">Americano ______________________________________ 1.00 € </li>
                            <li class="list">Espresso ________________________________________ 0.70 €</li>
                            <li class="list">Cappucino ______________________________________ 1.00 €</li>
                            <li class="list">Ness Caffe ______________________________________ 1.00 €</li>
                            <li class="list">Makiato _______________________________________ 1.00 €</li>
                            <li class="list">Tea ___________________________________________ 0.70 €</li>
                        </ul>
                    </div>
                </div>

                <div class="cold-drinks">
                    <span class="font">Cold Drinks</span>
                    <div class="border">
                        <ul type="none">
                            <li class="list">Coca Cola __________________________________________1.00 € </li>
                            <li class="list">Schweppes _________________________________________1.00 €</li>
                            <li class="list">Ice Tea ____________________________________________1.00 €</li>
                            <li class="list">Ice Coffee __________________________________________1.00 €</li>
                            <li class="list">Mineral water _______________________________________1.00 €</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    </div>
    </div>

    </section>
    <!--Menu Section ends-->

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