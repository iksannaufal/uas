<?php include 'db.php'; ?>
<?php include 'data.php'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    
       
                <?php 
                    if (isset($_GET['halaman']))
                    {
                        if ($_GET['halaman']=="data")
                        {
                            include 'data.php';
                        }
                        elseif ($_GET['halaman']=="pembelian")
                        {
                            include 'pembelian.php';
                        }
                        elseif ($_GET['halaman']=="pelanggan")
                        {
                            include 'pelanggan.php';
                        }
                        elseif ($_GET['halaman']=="detail")
                        {
                            include 'detail.php';
                        }
                        elseif ($_GET['halaman']=="tambahdata")
                        {
                            include 'tambahdata.php';
                        }
                        elseif ($_GET['halaman']=="hapusdata")
                        {
                            include 'hapusdata.php';
                        }
                        elseif ($_GET['halaman']=="ubahdata")
                        {
                            include 'ubahdata.php';
                        }
                        elseif ($_GET['halaman']=="logout")
                        {
                            include 'logout.php';
                        }
                    }
                    else
                    {
                        include 'home.php';
                    } 
                 ?>
            
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
