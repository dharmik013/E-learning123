<?php 
include("../classes/manage_courses_class.php");
$courses=new manage_courses_class;
$course=$courses->display_courses();   

 ?>

<!DOCTYPE html>
<html>

<head>
    <title>Programming Language Learning</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Website</title>

    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../../css/fontawesome.css" />
    <link rel="stylesheet" href="../../css/templatemo-liberty-market.css" />
    <link rel="stylesheet" href="../../css/owl.css" />
    <link rel="stylesheet" href="../../css/animate.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

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

    .latest-news-wrap {
        height: 300px;
        background-color: #ffffff;
        border: 1px solid rgba(0, 34, 51, 0.1);
        box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
        border-radius: 0.15rem;

    }

    .news-img {
        height: 200px;
        position: relative;

    }

    .news-img:before {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: #000;
        content: "";
        opacity: 0;
        transform: scale(.8);
        transition: all 0.5s;

    }

    .latest-news-wrap:hover .news-img:before {
        opacity: .5;
        transform: scale(1);
    }

    .deat {
        background: #eb1809 none repeat scroll 0.0;
        height: 40px;
        left: 0;
        position: absolute;
        text-align: center;
        top: 0;
        width: 90px;
        padding: 10px;
    }

    .deat span {
        color: white;
        font-weight: 700;
        font-size: 16px;
    }


    .news-content p {
        margin-bottom: 15px;
        text-align: justify;
        margin-top: 20px;

    }


    .news-content a {
        font-size: 14px;
        background-color: #3333cc;
        padding: 10px 20px;
        color: white;
        transition: all 0.5s ease-in;
    }


    .news-content a:hover {
        font-size: 14px;
        border: 2px solid #3333cc;
        border-top-right-radius: 20px;
        border-top-left-radius: 20px;
        border-bottom-right-radius: 20px;
        border-bottom-left-radius: 20px;
        background-color: white;
        color: #3333cc;
        margin-right: 0;
        text-decoration: none;

    }

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

    .card1 {
        font-family: 'Open Sans', sans-serif;
    }

    .cardh2 {
        font-family: 'Lato', sans-serif;

    }

    .card {
        background-color: #ffffff;
        border: 1px solid rgba(0, 34, 51, 0.1);
        box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
        border-radius: 0.15rem;
    }




    .tab-card-header>.tab-content {
        padding-bottom: 0;
    }

    .anchor {
        color: white;
    }

    .anchor:hover {
        color: white;
    }
    </style>






    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!----Linking google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <!----font-awsome start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

<body style="background-image: url('../../images/bgnew.jpg');">




  
    <nav>
            <div class="logo">
                <a href="../admin_main.php" class="logo">
                    <img src="../../images/p01.png" alt="" style="width: 124%;" />
                </a>
            </div>
            <ul>
                <li><a href="../admin_main.php">Home</a></li>
                <li><a href="#home" data-toggle="tab">Course</a></li>
                <li><a href="#manage_course" data-toggle="tab">Manage Course</a></li>
            </ul>
        </nav>




    <div class="tab-content" style="margin-top: -80px;">

        <div class="tab-pane container active" id="home">
            <div class="latest-news-area" id="latest">
                <div class="container">
                    <h3 style="font-size: 30px; color: white; margin-top: 130px;" align="center"><b>YOUR COURSES</b>
                    </h3>
                    <br>


                    <?php 
                         foreach ($course as $course_list)
                     {
                       ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-top: 10px;">
                        <div class="latest-news-wrap" style="margin-bottom: 40px;">
                            <div class="news-img">
                                <img src="../../<?php echo $course_list['language_image']; ?>" class="img-responsive">
                            </div>

                            <div class="news-content" align="center">
                                <p style="color: black; margin-left: 20px; margin-rigth: 20px; text-align: center;">
                                    <?php echo $course_list['language_description']; ?>
                                </p>
                                <br>
                                <a href="edit_topics.php?course_name=<?php echo $course_list['language_name']; ?>"
                                    style="font-weight: bold;">Edit Topic</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>


        <div class="tab-pane container fade" id="manage_course" align="center">
            <center>
                <div class="col-md-8" style="margin-top: 200px; margin-bottom: 200px; margin-left: 200px;"
                    id="manage_course" align="center">
                    <div class="card mt-3 tab-card">
                        <div class="card-header tab-card-header">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab"
                                        aria-controls="One" aria-selected="true">ADD</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab"
                                        aria-controls="Two" aria-selected="false">UPDATE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab"
                                        aria-controls="Three" aria-selected="false">DELETE</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active p-3" id="one" role="tabpanel"
                                aria-labelledby="one-tab">
                                <div class="card-body col-md-12">
                                    <div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
                                        <div class="card-header bg-primary text-light p-2 cardh2">
                                            <h3>ADD NEW COURSE</h3>
                                        </div>
                                        <div class="card-body small">

                                            <form action="course_add.php" method="post" enctype="multipart/form-data"
                                                onsubmit="return validation()">
                                                <div class="form-group">
                                                    <label for="email">Course Name :</label>
                                                    <input type="text" class="form-control" id="c_name"
                                                        placeholder="Enter Course Name" name="course_name">
                                                    <span id="name_error" class="text-danger font-weight-bold"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd">Course Description</label>
                                                    <input type="text" class="form-control" id="c_desc"
                                                        placeholder="Enter Course Description" name="course_desc">
                                                    <span id="desc_error" class="text-danger font-weight-bold"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label for="pwd">Course Image</label>
                                                    <input type="file" class="form-control" id="c_img"
                                                        placeholder="Enter Course Image Url" name="course_image">
                                                    <span id="image_error" class="text-danger font-weight-bold"></span>
                                                </div>

                                                <div class="">
                                                    <button type="submit" class="btn btn-danger"
                                                        name="btn_add">Submit</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">

                                <div class="card-body col-md-12">


                                    <div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
                                        <div class="card-header bg-primary text-light p-2 cardh2 ">
                                            <h3>UPDATE COURSE</h3>
                                        </div>

                                        <div class="card-body small">



                                            <form action="course_add.php" method="post" enctype="multipart/form-data"
                                                onsubmit="">


                                                <div class="form-group">

                                                    <label for="exampleFormControlSelect1">Select Course Name :</label>
                                                    <select class="form-control p-0" id="exampleFormControlSelect1"
                                                        name="selected-course-to-update">

                                                        <?php  foreach ($course as $course_list)
                     {
                                ?>
                                                        <option><?php echo  $course_list['language_name']; ?></option>
                                                        <?php } ?>

                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <label for="pwd">Course Description</label>
                                                    <input type="text" class="form-control" id="c_desc"
                                                        placeholder="Enter Course Description" name="course_desc">
                                                    <span id="desc_error" class="text-danger font-weight-bold"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label for="pwd">Course Image</label>
                                                    <input type="file" class="form-control" id="c_img"
                                                        placeholder="Enter Course Image Url" name="course_image">
                                                    <span id="image_error" class="text-danger font-weight-bold"></span>
                                                </div>

                                                <div class="">
                                                    <button type="submit" class="btn btn-danger"
                                                        name="btn_update">Submit</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">

                                <div class="card-body col-md-12">




                                    <div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
                                        <div class="card-header bg-primary text-light p-2 cardh2">
                                            <h3>DELETE COURSE</h3>
                                        </div>

                                        <div class="card-body small" ">

          <form action=" course_add.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Select Course</label>
                                                <select class="form-control p-0" id="exampleFormControlSelect1"
                                                    name="selected_course">
                                                    <?php  foreach ($course as $course_list)
                     {
                                ?>
                                                    <option><?php echo  $course_list['language_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="float-left">
                                                <button type="submit" class="btn btn-danger"
                                                    name="btn-delete-course">Submit</button>
                                            </div>
                                            </form>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
            </center>


        </div>

        <div class="tab-pane container fade" id="menu2">


            kjfdfbbhfbf

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
                        Copyright © 2022 vvk Developer Co., Ltd.
                        All rights reserved. &nbsp;&nbsp; Designed by

                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
    $('#myTab a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    });

    function validation() {
        var name = document.getElementById('c_name').value;
        var desc = document.getElementById('c_desc').value;
        var img = document.getElementById('c_img').value;
        if (name == "") {
            document.getElementById('name_error').innerHTML = "** please enter the course name";
            return false;

        }

        if (desc == "") {
            document.getElementById('desc_error').innerHTML = "** please enter the course descsription";
            return false;

        }
        if (img == "") {
            document.getElementById('image_error').innerHTML = "** please choose an image";
            return false;

        }
    }

    function display_modal() {


    }

    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
    </script>
</body>

</html>