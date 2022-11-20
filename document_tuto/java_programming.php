<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
    <title>Programming Language Learning</title>

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet"
        href="https://techsolutionshere.com/wp-content/themes/techsolution/assets/blog-post-css-js/meanmenu.css">

    <!----css file link-->
    <link rel="stylesheet" type="text/css" href="../css/java_programming.css">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!----Linking google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">

    <!----font-awsome start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://apis.google.com/js/platform.js"></script>

    <link rel="stylesheet" href="../css/fontawesome.css" />
    <link rel="stylesheet" href="../css/templatemo-liberty-market.css" />
    <link rel="stylesheet" href="../css/owl.css" />
    <link rel="stylesheet" href="../css/animate.css" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    .servicebody {}

    html {
        scroll-behavior: smooth;
    }

    .footer-classic a,
    .footer-classic a:focus,
    .footer-classic a:active {
        color: #ffffff;
    }

    #yt {
        margin-top: 50px;
    }





    #mainpagecontent {
        background-color: white;
        /* margin-top: -225px; */
        height: auto;
    }

    .content {
        color: black !important;
    }

    h2 {
        color: black;
        margin-left: 166px;
    }



    p {
        color: black;
        margin-left: 27px;
    }

    li {
        margin-top: 20px;
        margin-left: 27px;
        color: white;
    }

    /*  */

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

    <!--  -->
        <nav>
            <div class="logo">
                <a href="../index.php" class="logo">
                    <img src="../images/p01.png" alt="" style="width: 124%;" />
                </a>
            </div>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../About.html">About US</a></li>
                <li><a href="../programmingmain.php">Course</a></li>
                <li><a href="../video_tutorial/display_video_courses.php">Videos</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </nav>

    <!--  -->

    <!-- --------------------------------------------------- -->

    <div class="container-fluid">
        <div class="row" style="margin-top: 59px;">
            <div class="col-3" style="background-color: #00000000;">
                <div class="sidebar-section">
                    <div class="sidebar-item">
                        <div class="sidebar-content">
                            <ul class="nav nav-pills flex-column">
                                <?php 
                                    $con=mysqli_connect('localhost','root');
                                    mysqli_select_db($con,'learning');
                                    $course_name=$_GET['course_name'];
                                    $q="select * from courses where course_name='$course_name'";
                                    $result=mysqli_query($con,$q);
                                    while ($res=mysqli_fetch_array($result)) {
                                ?>
                                <form action="fetch_main_content.php" method="POST">

                                    <input type="hidden" style="color: whitw;" name="txt1" value="<?php echo $res['id'] ?>">
                                    <li>
                                    <button
                                        style="background-color: transparent;border: none;">
                                        <a style="font-weight: 300;"><?php echo $res['topic_name']; ?></a>
                                    </button>
                                    </li>

                                </form>


                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="content-section" style="background-color: white;  width: 900px;">
                    <p>
                        <?php

                        if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        }
                    ?>
                    </p>
                </div>
            </div>

        </div>
    </div>


    <!-- --------------------------------------------------- -->




    <br><br><br><br>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2022 vvk Developer Co., Ltd.
                        All rights reserved. &nbsp;&nbsp; Designed by
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
    var li = document.getElementsByTagName('li')[0].style = "color:red";
    </script>
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