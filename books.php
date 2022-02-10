<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FIKA - Book Coffe Shop</title>

    <!--linku per font style-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <!--linku per pjesen e css-->
    <link rel="stylesheet" href="stili.css" />
    <link rel="stylesheet" href="books.css" />
  </head>

  <body>
    <!--fillimi i header section-->
    <header class="header">
      <div class="header-1">
        <a href="#" class="logo">
          <i class="fas fa-book-reader"></i>
          <span>FIKA</span>
        </a>

        <form action="" class="search-form">
          <input
            type="search"
            name=""
            placeholder="Search here.."
            id="search-box"
          />
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
    <!--mbarimi i header section-->

    <!--section per libra-->
    <section class="top-part" id="top-part">
      <div class="row-2">
        <div class="content-2">
          <h3>Our newest collection is here!</h3>
          <p>
            Visit our book coffee shop, get your coffee and read your favorite
            book in our newest collection. We update our collection every week!
          </p>
        </div>
        <ul class="booksul">
          <li class="booklist"><img src="images/barackobama.jpg" alt="" /></li>
          <li class="booklist">
            <img src="images/michelleobamajpg.jpg" alt="" />
          </li>
          <li class="booklist">
            <img src="images/misteriitrenitblu.jpg" alt="" />
          </li>
          <li class="booklist"><img src="images/thefault.jpg" alt="" /></li>
          <li class="booklist"><img src="images/thesun.jpg" alt="" /></li>
          <li class="booklist"><img src="images/vincent.jpg" alt="" /></li>
          <li class="booklist">
            <img src="images/vrasjaneorientekspres.jpg" alt="" />
          </li>
          <li class="booklist">
            <img src="images/allthebrightplaces.jpg" alt="" />
          </li>
          <li class="booklist">
            <img src="images/bijaemallkuar.jpg" alt="" />
          </li>
          <li class="booklist"><img src="images/biriqiellit.jpg" alt="" /></li>
          <li class="booklist">
            <img src="images/ditariannefrank.jpg" alt="" />
          </li>
          <li class="booklist"><img src="images/dritaejetes.jpg" alt="" /></li>
          <li class="booklist">
            <img src="images/ebardhadheezeza.jpg" alt="" />
          </li>
          <li class="booklist">
            <img src="images/hajdutjaelibrave.jpg" alt="" />
          </li>
          <li class="booklist"><img src="images/hamleti.jpg" alt="" /></li>
          <li class="booklist">
            <img src="images/serishdashuri.jpg" alt="" />
          </li>
          <li class="booklist"><img src="images/marsiani.jpg" alt="" /></li>
          <li class="booklist"><img src="images/tehuajt.jpg" alt="" /></li>
          <li class="booklist">
            <img src="images/misteriitrenitblu.jpg" alt="" />
          </li>
          <li class="booklist"><img src="images/enverhoxha.jpg" alt="" /></li>
          <li class="booklist"><img src="images/luftakosoves.jpg" alt="" /></li>
          <li class="booklist"><img src="images/ligjimerfit.jpg" alt="" /></li>
          <li class="booklist">
            <img src="images/cunatnukqajne.jpg" alt="" />
          </li>
          <li class="booklist">
            <img src="images/gruajandedritare.jpg" alt="" />
          </li>
          <li class="booklist"><img src="images/skenderbeu.jpg" alt="" /></li>
        </ul>
      </div>
    </section>

    <!--Footer section-->
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
              <li>
                <a class="facebook" href="https://www.facebook.com/"
                  ><i class="fab fa-facebook"></i
                ></a>
              </li>
              <li>
                <a class="twitter" href="https://www.twitter.com/"
                  ><i class="fab fa-twitter"></i
                ></a>
              </li>
              <li>
                <a class="instagram" href="https://www.instagram.com/"
                  ><i class="fab fa-instagram"></i
                ></a>
              </li>
              <li>
                <a class="linkedin" href="https://www.linkedin.com/"
                  ><i class="fab fa-linkedin"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!--Footer section-->

    <!--linku per js-->
    <script src="skripta.js"></script>
  </body>
</html>