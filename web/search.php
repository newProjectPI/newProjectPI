<!DOCTYPE html>
<html>
<head>
    <title>search</title>
</head>
<body>
<div id="contain" style="border: 1px solid darkcyan">

    <?php
    $db = mysqli_connect("localhost","root","","pcphotc");
    if (isset($_GET['submit'])) {
        $query = $_GET['query'];
    }
    else {
        $query = '';
    }
    $sql = "select * from computer where title = '$query'";
    $result = $db->query($sql);

    echo "<div style='background: black;' class='col-md-12 col-sm-12 col-lg-12 col-xs-12' >";
    while ($row = mysqli_fetch_array($result)) {
        echo "<div id='img_div' style='width: 25%;float: left;text-align: center'>";

        echo "<img src='images/".$row['photo']."' style='border:1px solid red;width:95%'>";

        echo "<p>".$row['title']."</p>";

        echo "<p>".$row['description']."</p>";
        echo "</div>";
    }
    echo "</div>";
    ?>

</div>
</body>
</html>
