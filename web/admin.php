<html>
<head>
    <title>Page sign up</title>
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
</head>
<body>
<div class="header navbar-fixed-top" style="border: 1px solid black;background: white;">
    <div class="container" style="margin-top: -2%">
        <div style="width: 30%;float: left;">
            <img src="images/logo.png" style="width: 60px; height: 60px;">
            <p style="margin-top: 14px"><h2><b>Panda PC Shop</b></h2></p>
        </div>

        <form role="form" action="search.php" method="get" style="width: 65%;float: left;margin:0;">
            <div class="row" style=" width: 100%">
                <div class="col-lg-6" style="width: 80%;">
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
    </div>
</div>

<!--loing-->

<!--navigation-->
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

<div id="div_contain" class="col-lg-12" style="margin-top: 10px">
    <div style="width: 90%;height: 100%;margin: auto">
        <div style="width: 20%;height: 290px;float: left" class="modal-content">
            <div class="list-group">
                <a href="#" class="list-group-item" style="background: #33cccc;color: white;text-align: center">MENU</a>

                <a href="#" id="member" class="list-group-item">Member</a>
                <a href="#" class="list-group-item">Chat</a>
                <a href="#" class="list-group-item">Update Product</a>
                <a href="#" class="list-group-item">Delete Product</a>
                <a href="#" id="insert" class="list-group-item">Insert Product</a>
                <a href="#" class="list-group-item">List Product</a>
            </div>
        </div>
        <div id="user" style="width: 78%;float: right;" class="modal-content" >
            <?php
            $db = mysqli_connect("localhost","root","","pcphotc");
            $sql = "SELECT * FROM account";
            $result = mysqli_query($db,$sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<a href='#'>";
                echo "<div id='img_div' style='width: 25%;float: left;text-align: center'>";
                echo "<p>".$row['username']."</p>";
                echo "<p>".$row['email']."</p>";
                echo "</div>";
                echo "</a>";

            }
            echo "</div>";
            ?>

            <div id="content" class="modal-content" style="display: none">
                <form id="form" method="post" action="postImage.php" enctype="multipart/form-data" style="width: 70%">
                    <input type="hidden"  name="size" value="1000000" />
                    <h2 align="center">Insert new computer</h2>
                    <div>
                        <input class="form-control" type="text" name="title" placeholder="title"/>
                    </div>
                    <div>
                        <input class="form-control" type="text" name="hardisk" placeholder="hardisk"/>
                    </div>
                    <div>
                        <input class="form-control" type="text" name="ram" placeholder="ram"/>
                    </div>
                    <div>
                        <input class="form-control" type="text" name="vga" placeholder="vga"/>
                    </div>
                    <div>
                        <input class="form-control" type="text" name="cpu" placeholder="cpu"/>
                    </div>
                    <div>
                        <input class="form-control" type="text" name="model" placeholder="model"/>
                    </div>
                    <div>
                        <input class="form-control" type="text" name="price" placeholder="price"/>
                    </div>

                    <div>
                        <textarea name="text" cols="40" rows="4" placeholder="Say Something about This Image ..."></textarea>
                    </div>
                    <div>
                        <input type="file" name="image" />
                    </div>
                    <div>
                        <input class="btn btn-primary" type="submit" name="upload" value="upload image">
                    </div>

                </form>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>

            $(document).ready(function(){
                $("#insert").click(function(){
                    $("#content").show();
                    $("#user").hide();

                });
            });
        </script>
        <script>

            $(document).ready(function(){
                $("#member").click(function(){
                    $("#user").show();
                    $("#content").hide();
                });
            });
        </script>


    </div>
</div>




<div id="footer" class="col-md-12">



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
</body>
</html>
