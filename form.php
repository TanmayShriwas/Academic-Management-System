<?php
include 'scripts.php';
$formtype = $_GET['id'];
?>


<!DOCTYPE html>

<html lang="">

<head>
<title><?php echo "$formtype"; ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
    <?php formStyle(); ?>
</style>
<script>
    <?php formScript(); ?>
</script>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
<div id="body">
    <?php
      $url = selectForm($formtype);
      if(isset($url)){
      echo "<script>
               window.location = '$url';
            </script>";
      exit();
      }
     ?>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

</body>
</html>