<!DOCTYPE html>
<html>
<head>
	<title>Unique Developer</title>
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

    <title>Website</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../../css/fontawesome.css" />
    <link rel="stylesheet" href="../../css/templatemo-liberty-market.css" />
    <link rel="stylesheet" href="../../css/owl.css" />
    <link rel="stylesheet" href="../../css/animate.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

	<style type="text/css">
	    .servicebody
	    {
	    }
        html
	    {
		    scroll-behavior: smooth;
	    }

      .footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.latest-news-wrap
{
	height: 300px;
	background-color: #ffffff;
    border: 1px solid rgba(0, 34, 51, 0.1);
    box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
    border-radius: 0.15rem;

}
.news-img
{
	height: 200px;
	position: relative;

}

.news-img:before
{
	position: absolute;
	left:0;
	top:0;
	width: 100%;
	height: 100%;
	background: #000;
	 content: "";
	 opacity: 0;
	 transform: scale(.8);
	 transition: all 0.5s;

}

.latest-news-wrap:hover .news-img:before
{
	opacity: .5;
	transform: scale(1);
}

.deat
{
	background: #eb1809 none repeat scroll 0.0;
	height: 40px;
	left:0;
	position: absolute;
	text-align: center;
	top:0;
	width: 90px;
	padding: 10px;
}

.deat span
{
	color: white;
	font-weight: 700;
	font-size: 16px;
}


.news-content p
{
	margin-bottom: 15px;
	text-align: justify;
	margin-top: 20px;

}


.news-content a
{
	font-size: 14px;
	background-color: #3333cc;
	padding:10px 20px;
	color: white;
	transition: all 0.5s ease-in;
}


.news-content a:hover
{
	font-size: 14px;
	border:2px solid #3333cc;
	border-top-right-radius: 20px;
	border-top-left-radius: 20px;
	border-bottom-right-radius: 20px;
	border-bottom-left-radius: 20px;
	background-color: white;
	color: #3333cc;
	margin-right: 0;
	text-decoration: none;

}

	</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
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
                <a href="../index.php" class="logo">
                    <img src="../../images/p01.png" alt="" style="width: 124%;" />
                </a>
            </div>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../../About.html">About US</a></li>
                <li><a href="../../programmingmain.php">Course</a></li>
                <li><a href="../../video_tutorial/video/display_video_courses.php">Videos</a></li>
                <li><a href="../../logout.php">Logout</a></li>
            </ul>
        </nav>

<div class="latest-news-area" id="latest" style="MARGIN-TOP: -80PX;">
 				<div class="container">
           <h3 style="font-size: 30px; color: white; margin-top: 130px;" align="center"><b>Free Video Tutorial</b></h3>
 								<h3 style="font-size: 20px; color: white;" align="center">
 									Following are the available Free Video Tutorial <br>
 									Start learning today</h3>
<br>


<?php
			   $con=mysqli_connect('localhost','root');
			mysqli_select_db($con,'learning');
			$q="select * from video_info";
			$query=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($query)) {
			?>
			<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-top: 10px;">
 								<div class="latest-news-wrap" style="margin-bottom: 40px;">
 									<div class="news-img">
 										<img src="<?php echo $res['image']; ?>" class="img-responsive">
 									</div>

 									<div class="news-content" align="center">
 										<p style="color: black; margin-left: 20px; margin-rigth: 20px; text-align: center;">
 											<?php echo $res['description']; ?>
 										</p><br>
 										<a href="../display_video_list.php?course_name=<?php echo $res['course_name'] ?>" style="font-weight: bold;">watch videos</a>
 									</div>
 								</div>
			</div>
<?php } ?>
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

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="../../js/isotope.min.js"></script>
    <script src="../../js/owl-carousel.js"></script>
    <script src="../../js/wow.js"></script>
    <script src="../../js/tabs.js"></script>
    <script src="../../js/popup.js"></script>
    <script src="../../js/custom.js"></script>
  </body>
</html>