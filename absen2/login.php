<?php  
    $tittle = "Dashboard Login Admin";
    require "includes/head.php";
    $err="";
    if(isset($_POST['Login'])){
            $user = $_POST ['user'];
            $pass = MD5($_POST ['pass']);

            $query = mysql_query("select * from admin where user_admin = '$user' and pass_admin = '$pass'");
            $row = mysql_num_rows ($query);

            if ($row>0){
                //Berhasil
                $_SESSION['admin']= true;
                echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/index.php'/>";
            }else {
                //Gagal
               $err ="Silahkan Login Kembali" ;
            }
    }

?>
<body class="bg-dark">

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputEmail" class="form-control" placeholder="username" name="user" required="required" autofocus="autofocus">
                            <label for="inputEmail">Email</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                 
                    <input type= "submit" a class="btn btn-primary btn-block" value= "Login" name= "Login" >
                </form>
                <P><?=$err;?></P>

            </div>
        </div>
    </div>

    <script src="<?=BASE_URL;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>