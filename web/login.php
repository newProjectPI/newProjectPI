<?php
define('KEY_SALT','34353dfjjdfdh');
include ("dbconfig.php");
$op = $_GET['op'];
if ($op == $_GET['op']){
    $usern = $_POST['username'];
    $pass = $_POST['password'];
    $pass = crypt($_POST['password'], KEY_SALT);
    $query = mysqli_query($connect,"SELECT * FROM account WHERE username = '$usern' AND password = '$pass'");
    if (mysqli_num_rows($query)==1){
        session_start();
        $_SESSION['username'] = $usern;
        $_SESSION['password'] = $pass;
        if ($_POST['check']=='remember') {
            setcookie('username', $usern, time()+60*60*24);
            echo "<script language=\"JavaScript\">
                //alert(\"successful\");
                //document.location=\"admin.php\";
              </script>";
        }
        else{
            echo "<script language=\"JavaScript\">
                //alert(\"successful\");
                //document.location=\"admin.php\";
              </script>";
        }

    }else{
        echo "<script language=\"JavaScript\">
                alert(\"sorry username or password is incorrect!\");
                document.location=\"index.php\";
              </script>";
    }
}
?>


