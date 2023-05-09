<?php
include 'header.html';
session_start();
if(isset($_POST['Login'])){
	if(($_POST['user']=="") && ($_POST['pass']=="")) { echo "Email dan Password belum ada"; session_destroy();

	}else{
        // user = “anita@gmail.com” & password = “anita250301”
        if(($_POST['user']=="anita@gmail.com") and ($_POST['pass']=="anita250301")){
        $_SESSION['login']=1;
        $_SESSION['username']=$_POST['user'];

        }

        if ((isset($_SESSION['login'])) and ($_SESSION['login']==1)){ 
        header("location: home.php");
        exit();

        }
    }
}

?>
<html>
<br><br><br><br>
<head>
    <title>Dashboard Login</title>
</head>

<body>
<div align="center" class="login">
    <form  name="login" method="POST" action=""> <p><strong>Login</p></strong>
    <p> Email </p><input type="text" name="user"/>
    <p></p>
    <p> Password </p><input type="password" name="pass"/> <br><br>
    <input button class="btn btn btn-success" type="submit" name="Login" value="Login" />
    </form>
</body>

<?php
include 'footer.html'
?>
</html>