

<?php 
  include("classes/admin.php");
  $admin=new admin;
  $userd=$admin->show_users();

 ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
    .sidebar-list {
        margin-right: -15px;

        font-family: 'Quicksand', sans-serif;
        font-size: 14px
    }

    .sidebar-list li:hover {
        background-color: deepskyblue !important;
    }

    .sidebar-list li a {
        color: white;
        text-decoration: none;
    }

    .mytable1 .card {
        background: #5f2c82;
        background: -webkit-linear-gradient(to right, #49a09d, #5f2c82);
        background: linear-gradient(to right, #49a09d, #5f2c82);
    }

    .mytable2 .card {
        background: #EC6F66;
        background: -webkit-linear-gradient(to right, #F3A183, #EC6F66);
        background: linear-gradient(to right, #F3A183, #EC6F66);
    }

    .card {
        overflow: hidden;
        transition: all 0.9s ease;
    }

    .card:hover {
        transform: scale(1.04);
    }

    body {
        heigh: 100%;
    }
    
    </style>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/fontawesome.css" />
    <link rel="stylesheet" href="../css/templatemo-liberty-market.css" />
    <link rel="stylesheet" href="../css/owl.css" />
    <link rel="stylesheet" href="../css/animate.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style type="text/css">
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

<body style="background-image: url('../images/bgnew.jpg');">
<nav>
            <div class="logo">
                <a href="admin_main.php" class="logo">
                    <img src="../images/p01.png" alt="" style="width: 124%;" />
                </a>
            </div>
            <ul>
                <li><a href="admin_main.php">Home</a></li>
                <li><a href="manage_courses/manage_courses.php">Manage_Documents</a></li>
                <li><a href="manage_videos/manage_videos.php">Manage_Videos</a></li>
                <!-- <li><a href="#">Logout</a></li> -->
            </ul>
        </nav>

        <center><h1 style="margin-top: 50px;">Welcome Admin</h1></center>
          
                    <div class="row">

                        <div class="col-sm-4 grid-margin stretch-card">
                            <div class="card shadow "
                                style="width: 18rem; box-shadow: 1px 1px 1px 1px #e1dbdb; margin-left: 180px; cursor:pointer; margin-top: 90px;">
                                <img class="myimg" src="../images/file3.png" alt="Card" width="288" height="200">
                                <div class="card-body">
                                    <p class="card-text"><a href="manage_courses/manage_courses.php"
                                            style="text-decoration: none;">MANAGE YOUR DOCUMENT <i
                                                class="fa fa-book ml-3"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 grid-margin stretch-card">
                            <div class="card shadow "
                                style="width: 18rem; box-shadow: 1px 1px 1px 1px #e1dbdb; margin-left: 90px;cursor:pointer; margin-top: 90px;">
                                <img class="myimg" src="../images/file4.png" alt="Card" width="288" height="200">
                                <div class="card-body">
                                    <p class="card-text"><a href="manage_videos/manage_videos.php"
                                            style="text-decoration: none;">MANAGE YOUR VIDEOS <i
                                                class="fa fa-video-camera ml-3" style="color: orangered"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-sm-4 grid-margin stretch-card">
                            <div class="card shadow "
                                style="width: 18rem; box-shadow: 1px 1px 1px 1px #e1dbdb; margin-right: 50px; cursor:pointer; margin-top: 90px;">
                                <img class="myimg" src="../images/file5.png" alt="Card" width="288" height="200">
                                <div class="card-body">
                                    <p class="card-text"><a href="users.php"
                                            style="text-decoration: none;">VIEW USER DELATILS <i
                                                class="fa fa-user ml-3" style="color: orangered"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                       
                    </div>

                        <br><br><br><br>

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

            <script src="https://code.jquery.com/jquery-1.12.4.min.js"
                integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
                crossorigin="anonymous">
            </script>
            <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
            </script>
            <script src="../../dist/js/bootstrap.min.js"></script>
            <script src="../../assets/js/vendor/holder.min.js"></script>
            <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="../js/isotope.min.js"></script>
            <script src="../js/owl-carousel.js"></script>
            <script src="../js/wow.js"></script>
            <script src="../js/tabs.js"></script>
            <script src="../js/popup.js"></script>
            <script src="../js/custom.js"></script>
</body>

</html>