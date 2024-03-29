<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Pariwsata Halal Bukittinggi">
    <meta name="keyword" content="Pariwisata Halal, Bukittinggi">

    <title>Halal Tourism • Padang</title>

    <!-- Bootstrap core CSS -->
    <link href="hotel/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="hotel/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="hotel/assets/css/style.css" rel="stylesheet">
    <link href="hotel/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <form class="form-login" action="root.php" method="post">
        <h2 class="form-login-heading" style="background:#26a69a;border-color:white">Halal Tourism</h2>
        <div class="login-wrap" style="opacity: 85%" >
            <select class="form-control text-center" style="width:100%;margin-top:10px" id="city" name="city">
                <option value=''>- Choose City -</option>
                <?php
                    include('connect.php');
                    $querysearch = "SELECT id, name FROM city";
                    $hasil = mysqli_query($conn, $querysearch);
                    while($baris = mysqli_fetch_array($hasil))
                    {
                       $id = $baris['id'];
                       $name = $baris['name'];
                       echo "<option value='$id'>$name</option>";
                    }
                ?>
            </select>

            <br>
            <button type="submit" class="btn btn-default" style="width: 100%; background: #26a69a;color: white">Select</button>
            <hr>
        </div>
    </form>

    <!-- js placed at the end of the document so the pages load faster -->
<!--     <script src="angkot_bkt/assets/js/jquery.js"></script>
    <script src="angkot_bkt/assets/js/bootstrap.min.js"></script> -->

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<!--     <script type="text/javascript" src="../assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("angkot_bkt/assets/img/say.png", {speed: 500});
    </script> -->

  </body>

<!-- Mirrored from demo.gridgum.com/templates/AdminDashboard/DashGum/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 13:34:16 GMT -->
</html>
