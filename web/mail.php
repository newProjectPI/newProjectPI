
<!DOCTYPE html>
<html lang="en">
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
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
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
<body> 

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
						<li><a href="index.php">Home</a></li>
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-6">
										<ul class="multi-column-dropdown">
											<h6>Laptop</h6>
											<li><a href="products.php">Asus</a></li>
											<li><a href="products.php">Dell <span>New</span></a></li>
											<li><a href="products.php">Lenovo</a></li>
											<li><a href="products.php">MSI<span>New</span></a></li>
										</ul>
									</div>
									<div class="col-sm-6">
										<ul class="multi-column-dropdown">
											<h6>Laptop</h6>
											<li><a href="products1.php">Samsung</a></li>
											<li><a href="products1.php">Hp</a></li>
											<li><a href="products1.php">Apple <span>New</span></a></li>
										</ul>
									</div>

									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="about.php">About Us</a></li>

						<li><a href="mail.php" class="act">Contact Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<div class="mail">
		<div class="container">
			<p style="color:#777777;line-height:1.3em;font-size:14px;padding-left:20px">
			 <strong style="color: red"> Contact Us </strong>  <br>_________________________________________________________________ <br><br>
			 	- Address: No.1234, TK Avenue, Toul Kork, Phnom Penh <br>
				- Tel: +885 123 123<br>
				- Skype: PandaPCshop <br>
				- Telegram : PandaPCshop or 015 64 65 81  <br>
				- Email: PandaPCshop@gmail.com <br>
				- Website: <a href="http://PandaPCshop.com" target="_blank"> http://www.PandaPCshop.com </a><br>
				- Website:<a href="https://www.facebook.com/PandaPCshop" target="_blank"> http://www.facebook.com/PandaPCshop </a></p></br>
			 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31270.029650425986!2d104.88003706151555!3d11.569505918141743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951725d8c4835%3A0x2047e2df9364f385!2sKhan+Tuol+Kouk%2C+Phnom+Penh!5e0!3m2!1sen!2skh!4v1487873187870" width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="clear"></div>
         </div>

		</div>

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
		<!-- newsletter -->

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

	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  


	</div>
</body>
</html>