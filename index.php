<?php
ob_start();
session_start();
if(!isset($_SESSION['user']))
{
  header("location: login.php");
}
ob_end_flush();
?>
<?php  

$kon = mysqli_connect("localhost", "root", "", "baristand");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Daftar Buku Tamu</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="dist/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="dist/js/site.min.js"></script>
  </head>
  <body>
    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a href="#" class="navbar-brand" style="font-color: #fff;">Buku Tamu Baristand Industri Padang</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a onclick="return confirm('Apakah anda yakin akan keluar???')" href="logout.php" style="color: #fc0303;">Logout
                </a>
              </li>   
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <!--header-->
    <div class="container-fluid">
    <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
              <li><center><img src="image/baristand.png" width="200px" class="user-image img-responsive"/></center>
               </li>
               <li></li>
                

                <li class="list-group-item"><a href="?page=home" ><i class="fa fa-home"></i>Dashboard</a>
                  <li class="list-group-item"><a href="?page=input_tamu" ><i class="fa fa-globe"></i>
                 input Buku Tamu</a>
                <li class="list-group-item"><a href="?page=bukutamu" ><i class="fa fa-globe"></i>
                 buku tamu</a>
               
                </li>
                  <li class="list-group-item"><a href="?page=laporan_bukutamu" ><i class="fa fa-file-pdf-o"></i>Laporan</a>              
              </ul>
          </div>
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              <div class="panel-heading" style="background-color: #044F67;">
                <h3 style="color: #fff;" class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Panel Title</h3>
              </div>
              <div class="panel-body">
                  <?php  
                          $page = @$_GET['page'];
                          $aksi = @$_GET['aksi'];

                            if ($page == "bukutamu") {
                              if ($aksi == "") {
                                include "page/bukutamu/bukutamu.php";
                              }elseif ($aksi == "delete") {
                                include "page/bukutamu/delete.php";
                              }elseif ($aksi == "edit") {
                                include "page/bukutamu/edit.php";
                              }
                            }
                            if ($page == "input_tamu") {
                              if ($aksi == "") {
                                include "page/input_tamu/tambah.php";
                              }
                            }
                             else if ($page == "home") {
                              if ($aksi == "") {
                                include "page/home/home.php";
                              }
                            }
                            else if ($page == "laporan_bukutamu") {
                              if ($aksi == "") {
                                include "page/laporan_bukutamu/laporan_bukutamu.php";
                              }
                            }
                        ?>
                <div class="clearfix"></div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
              </div><!-- panel body -->
            </div>
        </div><!-- content -->
      </div>
    </div>
  </body>
</html>
