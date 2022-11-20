
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
    <title>Website</title>

    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

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
	height: 190px;
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


</style>

</head>

<body style="background-image: url('../../images/bgnew.jpg');">
   
</br></br>





<div class="tab-content">

<div class="tab-pane container active" id="home">
<div class="latest-news-area" id="latest">
 				<div class="container">
           <h3 style="font-size: 30px; color: white; margin-top: 20px;" align="center"><b>YOUR VIDEO COURSES </b></h3>
           <button class="btn bg-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal" >Add New Video</button><br>
<br>


<?php 
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'learning');
    $course_name=$_GET['course_name'];
    $q="select * from videos where course_name='$course_name'";
    $query=mysqli_query($con,$q);
    $abc = 0;
    while ($row=mysqli_fetch_array($query))
    {
?>
			<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-top: 10px;">
 								<div class="latest-news-wrap" style="margin-bottom: 40px;">
 									<div class="news-img">
 										<img src="<?php echo $row['video_image']; ?> " class="img-responsive">
 										<div class="deat">
 											<span><?php echo $row['course_name']; ?> <?php echo ++$abc; ?></span>
 										</div>
 									</div>

 								</div>
			</div>
<?php } ?>
 				</div>
      </div>
</div>

<div class="col-md-4 mt-5">

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">                        
            <div class="modal-header">
                <h4 class="modal-title">Message</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="video_add.php" method='POST' enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="course_name"
                        value="<?php  echo $_GET['course_name'];  ?>">

                    <div class="form-group">
                        Enter course name :<input type="text" name="vid_title" class="form-control">

                    </div>

                    <div class="form-group">
                        Enter video image URL:<input type="text" name="vid_img" class="form-control">
                    </div>

                    <div class="form-group">
                        Enter video path :<input type="text" name="vid_path" class="form-control">
                    </div>

                    <div class="modal-footer" align="center">
                        <button type="submit" class="btn btn-danger" 
                            name="btn_add_new_vid">SUBMIT</button>
                    </div>
                  </div>
            </form>
        </div>
    </div>
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