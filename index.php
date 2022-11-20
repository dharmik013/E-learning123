<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('location:login.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Programming Languages Learning</title>
  <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <title>Programming Languages Learning</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/fontawesome.css" />
    <link rel="stylesheet" href="css/templatemo-liberty-market.css" />
    <link rel="stylesheet" href="css/owl.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

	<style type="text/css">
	    .servicebody
	    {
	    }
        html
	    {
		    scroll-behavior: smooth;
	    }

      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

nav {
    display: flex;
    height: 80px;
    width: 100%;
    background: #00000000;
    align-items: center;
    justify-content: space-between;
    padding: 0 50px 0 100px;
    flex-wrap: wrap;

}

nav .logo {
    width: 223px;
}

nav ul {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
}

nav ul li {
    margin: 0 5px;
}

nav ul li a {
    color: #f2f2f2;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}

nav ul li a.active,
nav ul li a:hover {
    color: #111;
    background: #fff;
}

nav .menu-btn i {
    color: #fff;
    font-size: 22px;
    cursor: pointer;
    display: none;
}

input[type="checkbox"] {
    display: none;
}

@media (max-width: 1000px) {
    nav {
        padding: 0 40px 0 50px;
    }
}

@media (max-width: 920px) {
    nav .menu-btn i {
        display: block;
    }

    #click:checked~.menu-btn i:before {
        content: "\f00d";
    }

    nav ul {
        position: fixed;
        top: 80px;
        left: -100%;
        background: #111;
        height: 100vh;
        width: 100%;
        text-align: center;
        display: block;
        transition: all 0.3s ease;
    }

    #click:checked~ul {
        left: 0;
    }

    nav ul li {
        width: 100%;
        margin: 40px 0;
    }

    nav ul li a {
        width: 100%;
        margin-left: -100%;
        display: block;
        font-size: 20px;
        transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    #click:checked~ul li a {
        margin-left: 0px;
    }

    nav ul li a.active,
    nav ul li a:hover {
        background: none;
        color: red;
    }
}

	</style>

</head>

<body style="background-image: url('images/bgnew.jpg');">
    
 

    <nav>
            <div class="logo">
                <a href="index.php" class="logo">
                    <img src="images/p01.png" alt="" style="width: 124%;" />
                </a>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="About.html">About US</a></li>
                <li><a href="programmingmain.php">Course</a></li>
                <li><a href="video_tutorial/video/display_video_courses.php">Videos</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>


    <div class="main-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="header-text">
              <h3 style="font-size: 40px;">Hello <?php echo $_SESSION['username'];   ?>,</h3>
    </br></br>
              <h3 style="font-size: 30px;">Welcom To Online Programming Languages Learning</h3>
              <p>
              You Can Learn Online Programming Languages in an easy way from our Website. And with the help of our Website you can create a Website And Mobile Application (Android/Ios) in less Time Limit.
              </p>
              <div class="buttons">
                <div class="border-button">
                  <a href="programmingmain.php">Programming</a>
                </div>
                <div class="main-button">
                  <a href="video_tutorial\video\display_video_courses.php"> Video Tutorial</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="owl-banner owl-carousel">
              <div class="item">
                <img src="images/banner-01.png" alt="" />
              </div>
              <div class="item">
                <img src="images/banner-02.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>
               2022 Copyright : Programming Languages Learning
            </p>
          </div>
        </div>
      </div>
    </footer>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl-carousel.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/tabs.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>