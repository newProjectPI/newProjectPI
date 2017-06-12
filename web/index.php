<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
<title>Panda Shop</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/style_s.css">
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body style="background: #f2f2f2">
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<!-- header modal -->
	
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1" >
		<div class="container">

			<div class="w3l_logo">
				<h1 align="center"><a href="index.php">Panda PC Shop<span>Your stores. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<!-- <div class="cart cart box_1"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>   
			</div>   -->
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation" style="background: #737373">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2" >
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="act">Home</a></li>
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-md-6">
											
									<ul class="multi-column-dropdown">
											<h6>Laptop</h6>
											<li><a href="products.php">Asus</a></li>
											<li><a href="products.php">Dell <span>New</span></a></li>
											<li><a href="products.php">Lenovo</a></li>
											<li><a href="products.php">MSI<span>New</span></a></li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul class="multi-column-dropdown">
										
										<h6>Laptop</h6>
											<li><a href="products1.php">Samsung</a></li>
											<li><a href="products1.php">Hp</a></li>
											<li><a href="products1.php">Apple <span>New</span></a></li>
											<!-- <li><a href="products1.html"><i>Summer Store</i></a></li> -->
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="about.php">About Us</a></li>
						<!-- <li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
							<ul class="dropdown-menu">
							 	<li><a href="icons.html">Web Icons</a></li>
								<li><a href="codes.html">Short Codes</a></li>     
							</ul>
						</li>  -->
						<li><a href="mail.php">Contact Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->

	<!-- //banner --> 
	<!-- banner-bottom -->
	<?php
	$msg = "";
	if (isset($_POST['upload'])) {
		$target = "images/".basename($_FILES['image']['name']);
		$db = mysqli_connect("localhost", "root", "", "pcphotc");
		$photo = $_FILES['image']['name'];
		$title = $_POST['title'];
		$description = $_POST['text'];
		$sql = "INSERT INTO computer (title, photo,description) VALUES ('$title','$photo', '$description')";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image Uploaded Successfully";
		} else {
			$msg = "There Was A problem uploading image";
		}
	}
	?>
	
	<?php
	$db = mysqli_connect("localhost","root","","pcphotc");
	$sql = "SELECT * FROM computer";
	$result = mysqli_query($db,$sql);
	echo "<div class=' col-md-12' style='margin-top: 10px'>";
        echo "<div style='background: white;' class='modal-content col-md-offset-1 col-md-10' >";
            while ($row = mysqli_fetch_array($result)) {
                echo "<div id='img_div' style='width: 30%;float: left'>";
                echo "<img src='images/".$row['photo']."'>";
                echo "<p>".$row['title']."</p>";
                echo "<p>".$row['description']."</p>";
                echo "</div>";
            }
        echo "</div>";
    echo "</div>";
	?>

	<div class="special-deals">
		<div class="container">
			<h2>Special promotion</h2>
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_left">
					<div class="w3agile_special_deals_grid_left_grid">
						<img src="images/21.jpg" alt=" " class="img-responsive" />
						<div class="w3agile_special_deals_grid_left_grid_pos1">
							<h5>30%<span>Off</span></h5>
						</div>
						<div class="w3agile_special_deals_grid_left_grid_pos">
							<h4>We Offer <span>Best Products</span></h4>
						</div>
					</div>


				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!-- top-brands -->
        <div id="footer" class="col-md-12" style="height: 200px;">
            <hr>

                <div class="container">

                    <div class="sliderfig">
                        <ul id="flexiselDemo1">
                            <li>
                                <img src="images/tb1.jpg" alt=" " class="img-responsive" />
                            </li>
                            <li>
                                <img src="images/dell-logo.jpg" alt=" " class="img-responsive" />
                            </li> -->
                            <li>
                                <img src="images/tb3.jpg" alt=" " class="img-responsive" />
                            </li>
                            <!-- <li>
                                <img src="images/tb4.jpg" alt=" " class="img-responsive" />
                            </li> -->

                        </ul>
                    </div>
                    <script type="text/javascript">
                        $(window).load(function() {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 4,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint:480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint:640,
                                        visibleItems:2
                                    },
                                    tablet: {
                                        changePoint:768,
                                        visibleItems: 3
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                </div>

            <hr>
            <div class="col-md-12" style="height: 200px">
                <div style="height:100%;" class="col-md-4">

                    <a href="#"><h4 align="center"><b>Meet ua</b></h4></a><br>
                    <a href="#"><h4 align="center">facebook</h4></a><br>
                    <a href="#"><h4 align="center">Istagram</h4></a><br>
                    <a href="#"><h4 align="center">twister</h4></a>


                </div>
                <div style="height: 100%;" class="col-md-4">
                    <a href="#"><h4 align="center">About panda shop</h4></a><br>
                    <a href="#"><h4 align="center">about us</h4></a>

                </div>
                <div style="height: 100%;background: blue" class="col-md-4">

                </div>

            </div>
        </div>
	




	


</body>
</html>