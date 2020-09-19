<?php
include 'scripts.php';
?>


<!DOCTYPE html>

<html lang="">

<head>
<title>admin_IN!</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
/*    call_adminStyle()_by_php_script*  Function to be defined */
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
/*    call_adminScript()_by_php_script*  Function to be defined */
    
 
</script>
</head>
<body id="top">
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
<div id="body">
    <div id="header">
        <form method="post" action="index.php">
            <input id="logout_btn" type="submit" name="logout" value="SignOUT">
        </form>
        <p id="msg">Welcome Boss</p>
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