<?php
$eroll = $_GET['id'];
//function_to_start_session
function startSession($eroll){
    $con = mysqli_connect("localhost","root","","ais");
    $query = "SELECT * FROM users WHERE eroll = '$eroll'";
    $result = mysqli_query($con,$query);
    if($result){
        $row = mysqli_fetch_array($result);
        $username = $row['name'];
        $email = $row['email'];
        $sem = $row['sem'];
        session_start();
        // Set session variables
        $_SESSION["eroll"] = $eroll;
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        $_SESSION["sem"] = $sem;
        echo "Session Started :".$_SESSION['username'];
        
    }
    else{
        die();
    }
    
}

startSession($eroll);
?>



<!DOCTYPE html>

<html lang="">

<head>
<title>Dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
    #body{
        height: 100vh;
        display: block;
        margin: auto;
        color: black;
    }
    #msg{
        display: block;
        position: absolute;
        margin: 300px 50px 0px 370px;
        background-color: black;
        color: aliceblue;
        border: 1px hidden black;
        padding: 40px;
        align-content: center;
        font-size: 3em;
        font-weight: 600;
    }
    #header{
        display: block;
        position: fixed;
        width: 100%;
        height: auto;
        background: rgba(0,0,0,0.7);
        
    }
    #logout_btn{
        float: right;
        margin: 20px 80px 20px auto;
        border: 1px hidden black;
        padding: 10px 15px;
        font-weight: 700;
    }
    #logout_btn:hover{
        float: right;
        margin: 20px 80px 20px auto;
        background-color: crimson;
        border: 1px hidden black;1
        padding: 10px 15px;
        font-weight: 700;
        color: aliceblue;
    }
</style>
<script>
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
  <!-- ################################################################################################ -->
<div id="body">
    <?php 
        
        echo '<div id="header">
                <form method="post" action="index.php">
                   <input id="logout_btn" type="submit" name="logout" value="SignOUT">
                </form>
              </div>';
        echo "<br><br><br><br><br>Welcome :".$_SESSION['username'];

    ?>
</div>

</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

</body>
</html>