<?php
include 'scripts.php';

if(isset($_SESSION)){
    //end_session
    signOUT();

}
       


?>


<!DOCTYPE html>

<html lang="">

<head>
<title>Home-AIS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script>
          function updateLink(a){ 
              var str1 = 'books.php?id="';
              var str2 = a.valueOf();
              var str3 = '"';
              var newurl = str1.concat(str2,str3);
              window.location=newurl;
              return newurl;
              }
          function selectForm(a){ 
              var str1 = 'form.php?id=';
              var str2 = a.valueOf();
              var newurl = str1.concat(str2);
              window.location=newurl;
              return newurl;
              }
</script>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="https://www.puibm.in/" target="_blank">IBM-ICE</a></h1>
        
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a class="drop" href="#">Books</a>
            <ul>
              <li><a class="drop" href="#">Semester I</a>
                <ul>
                  <li><a id="Mathematics-I" name="s1s1" href="#" onclick="updateLink(this.id);">Mathematics-I</a></li>
                  <li><a id="Open Source" name="s1s2" href="#" onclick="updateLink(this.id);">Open Source</a></li>
                  <li><a id="Engineering Chemistry" name="s1s3" href="#" onclick="updateLink(this.id);">Engineering Chemistry</a></li>
                  <li><a id="Engineering Drawing" name="s1s4" href="#" onclick="updateLink(this.id);">Engineering Drawing</a></li>
                  <li><a id="BCE" name="s1s5" href="#" onclick="updateLink(this.id);">BCE</a></li>
                </ul>
              </li>
              <li><a class="drop" href="#">Semester II</a>
                <ul>
                  <li><a id="EEES" name="s2s1" href="#" onclick="updateLink(this.id);">EEES</a></li>    
                  <li><a id="Data Structure With C" name="s2s2" href="#" onclick="updateLink(this.id);">Data Structure With C</a></li>      
                  <li><a id="Engineering Physics" name="s2s3" href="#" onclick="updateLink(this.id);">Engineering Physics</a></li>   
                  <li><a id="Communication Skills" name="s2s4" href="#" onclick="updateLink(this.id);">Communication Skills</a></li>    
                  <li><a id="Web Programming" name="s2s5" href="#" onclick="updateLink(this.id);">Web Programming</a></li>      
                </ul>
              </li>
              <li><a class="drop" href="#">Semester III</a>
                <ul>
                  <li><a id="Mathematics-II" name="s3s1" href="#" onclick="updateLink(this.id);">Mathematics-II</a></li>
                  <li><a id="Digital Electronics" name="s3s2" href="#" onclick="updateLink(this.id);">Digital Electronics</a></li>
                  <li><a id="OOT" name="s3s3" href="#" onclick="updateLink(this.id);">OOT</a></li>
                  <li><a id="DBMS" name="s3s4" href="#" onclick="updateLink(this.id);">DBMS</a></li>
                  <li><a id="IT Infrastructure" name="s3s5" href="#" onclick="updateLink(this.id);">IT Infrastructure</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="drop" href="#">Schedule</a>
            <ul>
              <li><a href="tts1.php">Semester I</a></li>
              <li><a href="tts2.php">Semester II</a></li>
              <li><a href="tts3.php">Semester III</a></li>
            </ul>
          </li>
          <li><a href="faculties.php">Faculties</a></li>
          <li class="active"><a href="#">New Feeds</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <article>
        <div>
          <p class="heading"><i>Stop following Start <b style="color:red">LEADING</b></i></p>
          <h2 class="heading"><b>Register Today</b></h2>
          <p>This website contains all the acadamic information about IBM-ICE Bhopal</p>
        </div>
        <footer>
          <ul class="nospace inline pushright">
            <li><a class="btn inverse" id="Login" href="#" onclick="selectForm(this.id);">Login</a></li>
            <li><a class="btn" id="Register" href="#" onclick="selectForm(this.id);">Register</a></li>
            <li><a class="btn inverse" id="Admin Login" href="#" onclick="selectForm(this.id);">Admin Login</a></li>
          </ul>
        </footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>