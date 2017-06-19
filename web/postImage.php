<?php
$msg = "";
if (isset($_POST['upload'])) {
    $target = "images/".basename($_FILES['image']['name']);
    $db = mysqli_connect("localhost", "root", "", "pcphotc");
    $photo = $_FILES['image']['name'];
    $title = $_POST['title'];
    $description = $_POST['text'];
    $hardisk = $_POST['hardisk'];
    $ram = $_POST['ram'];
    $vga = $_POST['vga'];
    $cpu = $_POST['cpu'];
    $model = $_POST['model'];
    $price = $_POST['price'];

    $sql = "INSERT INTO computer (title, photo,description,hardisk,ram,vga,cpu,model,price) VALUES ('$title','$photo', '$description','$hardisk','$ram','$vga','$cpu','$model','$price')";
    mysqli_query($db, $sql);
    echo $sql;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image Uploaded Successfully";
    } else {
        $msg = "There Was A problem uploading image";
    }

}
header("location: admin.php");
?>
<html>
<head>
    
    <title>Image Upload</title>
    <link rel="stylesheet" type="text/css" href="css/style_s.css">
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
<body>
<!--<div id="content" class="modal-content">-->
<!--    --><?php
//    $db = mysqli_connect("localhost","root","","pcphotc");
//    $sql = "SELECT * FROM computer";
//    $result = mysqli_query($db,$sql);
//    while ($row = mysqli_fetch_array($result)) {
//        echo "<div id='img_div'>";
//        echo "<img src='images/".$row['photo']."'>";
//        echo "<p>".$row['title']."</p>";
//        echo "<p>".$row['description']."</p>";
//        echo "</div>";
//    }
//    ?>
<!--    <form method="post" action="postImage.php" enctype="multipart/form-data" style="width: 70%">-->
<!--        <input type="hidden"  name="size" value="1000000" />-->
<!--        <h2 align="center">Insert new computer</h2>-->
<!--        <div>-->
<!--            <input class="form-control" type="text" name="title" placeholder="title"/>-->
<!--        </div>-->
<!--        <div>-->
<!--            <input class="form-control" type="text" name="hardisk" placeholder="hardisk"/>-->
<!--        </div>-->
<!--        <div>-->
<!--            <input class="form-control" type="text" name="ram" placeholder="ram"/>-->
<!--        </div>-->
<!--        <div>-->
<!--            <input class="form-control" type="text" name="vga" placeholder="vga"/>-->
<!--        </div>-->
<!--        <div>-->
<!--            <input class="form-control" type="text" name="cpu" placeholder="cpu"/>-->
<!--        </div>-->
<!--        <div>-->
<!--            <input class="form-control" type="text" name="model" placeholder="model"/>-->
<!--        </div>-->
<!--        <div>-->
<!--            <input class="form-control" type="text" name="price" placeholder="price"/>-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <textarea name="text" cols="40" rows="4" placeholder="Say Something about This Image ..."></textarea>-->
<!--        </div>-->
<!--        <div>-->
<!--            <input type="file" name="image" />-->
<!--        </div>-->
<!--        <div>-->
<!--            <input class="btn btn-primary" type="submit" name="upload" value="upload image">-->
<!--        </div>-->
<!---->
<!--    </form>-->
<!--</div>-->
</body>
</html>