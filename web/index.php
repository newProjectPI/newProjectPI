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

<div class="header navbar-fixed-top" style="background: white">
    <div class="container" style="margin-top: -2%;">
        <div style="width: 30%;float: left;">
            <img src="images/logo.png" style="width: 60px; height: 60px;">
            <p style="margin-top: 14px"><h2><b>Panda PC Shop</b></h2></p>
        </div>

        <form role="form" action="search.php" method="get" style="width: 55%;float: left;margin:0;">
            <div class="row" style=" width: 100%">
                <div class="col-lg-6" style="width: 90%;">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for..." name="query" >
                            <span class="input-group-btn">
                        <button class="btn btn-primary glyphicon glyphicon-search" name="submit" type="submit" style="margin-top: -2%">

                        </button>
                    </span>
                    </div><!-- /input-group -->

                </div><!-- /.col-lg-6 -->

            </div><!-- /.row -->
        </form>
        <div style="width: 10%;float: right">
            <button class="btn btn-info fa fa-user" data-toggle="modal" data-target="#myModal" style="margin-top: 15px"></button>
            <button class="btn btn-info btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm" style="margin-top: 15px">Logout</button>
        </div>

    </div>
</div>

<!--loing-->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div id="login-overlay" class="modal-dialog">
        <div class="modal-content col-lg-6 col-lg-offset-3" style="">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Login to Panda PC Shop </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="well">
                            <form id="loginForm" method="POST" action="login.php?op=in" novalidate="novalidate" style="width: 100%">
                                <div class="form-group">
                                    <label for="username" class="control-label">Username</label>
                                    <input type="text" class="form-control" id="user" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <input type="checkbox" value="remember" name="check">Remember me
                                        <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Login</button>
                                <a href="signUp.php" class="btn btn-default btn-block">Sign Up</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--logout modal-->
<div class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" >
    <div class="modal-dialog modal-sm" style="width: 30%">
        <div class="modal-content"><br>
            <div class="modal-header"><h4 align="center">Logout <i class="fa fa-lock"></i></h4></div>
            <div class="modal-body"> Are you sure you want to logout?</div>
            <div class="modal-footer"><a href="logout.php" class="btn btn-primary btn-block">Logout</a></div>
        </div>
    </div>
</div>
<!-- //header -->
<!-- navigation -->
<div class="navigation" style="background: #737373;margin-top: 76px;margin-left: 0">
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




<!--best promotion-->

<div class="container" >
    <div class="col-md-12 w3agile_special_deals_grid_left"  >
        <div class="w3agile_special_deals_grid_left_grid">
            <img src="images/21.jpg" alt=" " class="img-responsive" style="height: 200px" />
            <div class="w3agile_special_deals_grid_left_grid_pos1">
                <h5>30%<span>Off</span></h5>
            </div>
            <div class="w3agile_special_deals_grid_left_grid_pos">
                <h4>We Offer <span>Best Products</span></h4>
            </div>
        </div>
    </div>

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
    echo "<div style='background: white;' class='col-md-12 col-sm-12 col-lg-12 col-xs-12' >";
    while ($row = mysqli_fetch_array($result)) {
        echo "<a href='detail.php?id=".$row['id']."'>";
        echo "<div id='img_div' style='width: 25%;float: left;text-align: center'>";
        echo "<img src='images/".$row['photo']."' style='border:1px solid red;width:95%'>";
        echo "<p>".$row['title']."</p>";
        echo "<p>".$row['price']."</p>";
        echo "</div>";
        echo "</a>";
    }
    echo "</div>";
    ?>
</div>


<!-- //banner -->
<!-- banner-bottom -->





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
            <a href="#">
                <strong style="color: #000000;">
                    ABOUT PANDA SHOP
                </strong>
            </a> <br>
            <a href="#" style="color: darkslategrey">About us</a> <br>
            <a href="#" style="color: darkslategrey">Careers</a> <br>
            <a href="#" style="color: darkslategrey">Terms&Conditions</a> <br>
            <a href="#" style="color: darkslategrey">Privacy Policy</a>

        </div>
        <div style="height: 100%;" class="col-md-4">
            <a href="#">
                <strong style="color: #000000">
                    MEET US ON
                </strong>
            </a> <br>
            <a href="#" style="color: darkslategrey">Facebook</a><br>
            <a href="#" style="color: darkslategrey">Instagram</a><br>
            <a href="#" style="color: darkslategrey">Twitter</a><br>
            <a href="#" style="color: darkslategrey">YouTube</a>

        </div>
        <div class="col-md-4">
            <a href="#">
                <strong style="color: #000000">
                    BRANCH
                </strong>
            </a> <br>
            <a style="color: darkslategrey">
                Kompong Cham
            </a><br>
            <a style="color: darkslategrey">
                Battambang
            </a><br>
            <a style="color: darkslategrey">
                Kompong Chnang
            </a><br>
            <a style="color: darkslategrey">
                Kompong Speu
            </a>
        </div>

    </div>

    <div style="margin-bottom: 70px">
        <p align="center">&copy; 2017 Panda Shop. All rights reserved | Design by <a href="http://panda_shop.com/">Panda Shop</a></p>
    </div>
</div>

<!--   </div>-->






</body>
</html>