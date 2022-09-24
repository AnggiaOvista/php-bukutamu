<?php
ob_start();
session_start();
include'koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <center><img src="http://localhost/pelanggan/image/profil.jpg" width="80%" height="350px"></center>
    <title>Login</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body style="background-color: #03a37e">
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">               
                                 
            </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading text-center">
                        <h3 class="panel-title">SILAHKAN MELAKUKAN LOGIN </h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="user" type="text" required  autofocus autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required autofocus>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button name="Submit" type="Submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                        <?php
                        include'koneksi.php';
                    if(isset($_POST['Submit'])){
                        $user=$_POST['user'];
                        $pass=$_POST['password'];
                        $login=mysqli_query($kon,"SELECT * FROM user where username='$user' AND password='$pass'");
                        $cek=mysqli_num_rows($login);
                        $data=mysqli_fetch_array($login); //1
                        
                        if($cek)
                        {
                            if($data['level']=="operator"){
                                session_start();                    //2
                                $_SESSION['user']=$data['username'];//3
                                header("location:index.php?page=home");   
                            }
                            else if($data['level']=="administrator"){
                                session_start();                    //2
                                $_SESSION['user']=$data['username'];//3
                                header("location:index.php?page=home");
                            }
                            else {
                                echo "<script>alert('Periksa kembali username dan password')</script>";
                            }
                        }
                        else {
                            echo "<script>alert('Periksa kembali username dan password')</script>";
                        }
                    }
                        ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>

</html>
