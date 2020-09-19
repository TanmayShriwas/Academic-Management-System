<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['loggedin']))
{
?>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>admin index page<?php echo $_SESSION['uname']?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
    #body{
        height: 100vh;
        display: block;
        margin: auto;
    }
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_left">
      </div>
      <div class="fl_right">
        <p></p>      
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">IBM-ICE   ADMIN PAGE  <?php echo $_SESSION['uname']?></a></h1>
        
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
		  <li><a href="logout.php">Logout</a></li>
		 

          
            
      </nav>
	  
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
<div id="body"align=center>
             <BR></BR>
             <li><a class="btn inverse" href="addbook.php">ADD BOOKS</a></li>
			 <BR></BR>
			 <li><a class="btn inverse" href="after/login.php">DELETE BOOKS</a></li>
			  <BR></BR>
			  <li><a class="btn inverse" href="after/login.php">MANAGE FEES</a></li>
			   <BR></BR>
			   <li><a class="btn inverse" href="after/login.php">NEW FEEDS</a></li>
			    <BR></BR>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
<?php
}
?>