<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Sign Up</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
    #body{
        height: 100vh;
        display: block;
        margin: auto;
    }
    #form{
        display: block;
        width: 40%;
        margin-top: 2px;
        margin-bottom: auto;
        margin-left: auto;
        margin-right: auto;
        background: rgba(200,200,200,0.5);
        border: 1px solid black;
        border-radius: 30px;
        padding: 20px 50px ;
        align-content: center;
    }
    select{
        width: 100%;
        height: 35px;
        margin-bottom: 5px;
    }
    input{
        width: 100%;
        height: 35px;
        margin-bottom: 5px;
    }
    label{
        border-style: hidden;
        height: 25px;
        padding: 5px;
        font-size: 1.5em;
        text-shadow: 2px 2px 5px aliceblue;
        color: black;
    }
    #submitButton{
        margin: auto;
        width: 40%;
        height: 50px;
        background: rgba(0,0,50,0.8);
        border: 1px solid black;
        border-radius: 50px;
        font-size: 2em;
        font-weight: 800;
        color: white;
    }
    #formHeading{
        color: rgb(0,0,50);
        font-size: 2em;
        font-weight: 700;
        font-family: "Comic Sans MS", "cursive", "sans-serif";
    }
    #homebutton{
        font-size: 1.5em;
        font-weight: 300;
    }
    #homebutton:hover{
        background-color: red;
    }
    #blackfont{
        color: black;
    }
    a{
        text-decoration: none;
        color: aliceblue;
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
  <!-- ################################################################################################ -->
<div id="body">
    <br>  
    <form id="form" method="POST" name="register" action="register.php">
          <h2 id="formHeading">Sign Up</h2>
          <p>*all fields are mandatory</p>
          <label for="eroll">Enrollment No.*</label>
          <input type="text" name="eroll" placeholder="Your Enrollment No." required>
          <label for="name">Full Name*</label>
          <input type="text" name="name" placeholder="Your name..." required>
          <label for="sem">Semester*</label>
          <select name="sem" value="select">
               <option value="I">I</option>
               <option value="II">II</option>
               <option value="III">III</option>
          </select>
          <label for="email">Email*</label>
          <input type="text" name="email" placeholder="Your email..." required>
          <label for="pass">Create Password*</label>
          <input type="text" name="pass" placeholder="Your password" required>
          <label for="cpass">Confirm Password*</label>
          <input type="text" name="cpass" placeholder="Re-enter password..." required>
          <a href="login.php" style="float:left">Registered User ?</a>
          <a href="index.php" style="float:right">Back to Home Page?</a>
          <br>
          <input id="submitButton" type="submit" value="Register" name="Login">
      </form>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

</body>
</html>