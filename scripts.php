
<?php
include("UserClass.php");

//I. INDEX.PHP ->LINE-5
//II. FORM.PHP ->LINE-21
//III.ADMIN.PHP->LINE-338  
/*========================================================INDEX.PHP============================================================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/
//function_to_end_session
function signOUT(){
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    echo "<script>
               window.location = 'index.php';
          </script>";
    exit();
}

/*============================================================================================================================================*/
/*============================================================================================================================================*/
/*=============================         ********************** END **********************         ============================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/

//***********************************************************************************************************************************************
//***********************************************************************************************************************************************

/*========================================================FORM.PHP============================================================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/

//function_to_verify_admin_password
function verifyAdmin($pass){ 
/* <?php
			session_start();
			header("location:adminindex.php");
			?> */
    $con = mysqli_connect("localhost","root","","ais"); 
    $query = "SELECT pass FROM users WHERE eroll ='000'";
    $result=mysqli_query($con,$query); 
    if(isset($result)){
        $output = mysqli_fetch_array($result);
        $dbpass = $output['pass'];
    }
    else{
        die(mysql_error());
    }
    if($pass == $dbpass){
		session_start();
			$_SESSION['loggedin']=true;
			$_SESSION['uname']=$user_data['enroll'];
        return TRUE;
    }
    else{
        return FALSE;
    }
  }

//function_to_verify_user_password
function verifyUser($eroll,$pass){ 
    $con = mysqli_connect("localhost","root","","ais"); 
	
		$errors = array();

	if($_SERVER['REQUEST_METHOD'] == 'POST'){	
	if(count($errors) === 0){
		
	    // $password = mysqli_real_escape_string($con, $_POST['password']);
		function createSalt(){
   			$string = md5(uniqid(rand(), true));
    		return substr($string, 0, 3);
		}
		$salt = createSalt();
		$dbpass = hash('sha256', "{$salt}{$pass}");
		
		$search_query = mysqli_query($con, "SELECT pass FROM users WHERE eroll ='$eroll'");
		
		if($pass == $dbpass){
        return TRUE;
    }
    else{
        return FALSE;
    }
	}
	
	}
}
    // $query = "SELECT pass FROM users WHERE eroll ='$eroll'";
    // $result=mysqli_query($con,$query); 
    // if(isset($result)){
        // $output = mysqli_fetch_array($result);
        // $dbpass = $output['pass'];
    // }
    // else{
        // die(mysql_error());
    // }
    // if($pass == $dbpass){
        // return TRUE;
    // }
    // else{
        // return FALSE;
    // }
  // }

//function_display_to_register_user
function registerUser(){
    $s = '"';
    $eroll = $s.$_POST['eroll'].$s;
    $name = $s.$_POST['name'].$s;
    $sem = $s.$_POST['sem'].$s;
    $email = $s.$_POST['email'].$s;
    $pass = $s.$_POST['pass'].$s;
    $cpass = $s.$_POST['cpass'].$s;
    if($pass == $cpass){
        $con = mysqli_connect("localhost","root","","ais");
        $query = "INSERT INTO users VALUES ($eroll,$name,$email,$sem,$pass)";
        $result = mysqli_query($con,$query);
        if($result == TRUE){
            return TRUE;
        }
        else{
            die(mysqli_error($con));
            return FALSE;
        }
    }
    else{
        echo '<script type="text/javascript">alert("Passwords Does not Match")</script>';
        die();
        header('location:form.php?id=Register');
        }
}

//fuction_add_form_styles
function formStyle(){
    echo '#body{
        height: 100vh;
        display: block;
        margin: auto;
        color: black;
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
        color: black;
    }
    input{
        width: 100%;
        height: 35px;
        margin-bottom: 5px;
        color: black;
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
    #espan{
        border: 1.5px solid black;
        border-radius: 5px;
        background: rgba(14,250,8,0.6);
        color: aliceblue;
        margin: 20px 45px;
        padding: 40px 350px;
        font-size: 1.4em;
        font-weight: 400;
    }
    #mspan{
        border: 1.5px solid black;
        border-radius: 5px;
        background: rgba(14,250,8,0.6);
        color: aliceblue;
        margin: 20px 45px;
        padding: 40px 250px;
        font-size: 1.4em;
        font-weight: 400;
        }';
}

//fuction_to_add_form_scripts
function formScript(){
    echo 'function selectForm(a){ 
              var str1 = "form.php?id=";
              var str2 = a.valueOf();
              var newurl = str1.concat(str2);
              window.location=newurl;
              return newurl;
           }';
}

//function_display_admin_login_form
function adminForm(){
    echo '<br><br><br><br><br><br><br>
         <form id="form" method="POST" name="admin" action="">
            <h2 id="formHeading">@DMIN</h2>
            <label for="pass">Verify Your Password</label>
            <input type="password" name="pass" placeholder="Password" required>
            <a href="index.php">Exit ?</a>
            <br>
            <input id="submitButton" type="submit" value="Verify" name="verify">
          </form>';
}

//function_display_user_login_form
function userForm(){
    echo '<br><br><br><br><br>  
          <form id="form" method="POST" name="login" action="">
            <h2 id="formHeading">Login</h2>
            <p>*all fields are mandatory</p>
            <label for="eroll">Enrollment No.*</label>
            <input type="text" name="eroll" placeholder="Your Enrollment No." required>
            <label for="pass">Password*</label>
            <input type="password" name="pass" placeholder="Your password" required>
            <a style="float:left" id="Register" href="#" onclick="selectForm(this.id);">Not Registered ?</a>
            <a href="index.php" style="float:right">Back to Home Page?</a>
            <br>
            <input id="submitButton" type="submit" value="Login" name="login">
          </form>';
}

//function_display_user_register_form
function registerForm(){
    echo '<br>  
          <form id="form" method="POST" name="register" action="">
            <h2 id="formHeading">Sign Up</h2>
            <p>*all fields are mandatory</p>
            <label for="eroll">Enrollment No.*</label>
            <input type="text" name="eroll" placeholder="Your Enrollment No." required>
            <label for="name">Full Name*</label>
            <input type="text" name="name" placeholder="Your name..." required>
            <label for="sem">Semester*</label>
            <select name="sem" value="select">
               <option value="SELECT">Select</option> 
               <option value="I">I</option>
               <option value="II">II</option>
               <option value="III">III</option>
            </select>
            <label for="email">Email*</label>
            <input type="email" name="email" placeholder="Your email..." required>
            <label for="pass">Create Password*</label>
            <input type="password" name="pass" placeholder="Your password" required>
            <label for="cpass">Confirm Password*</label>
            <input type="password" name="cpass" placeholder="Re-enter password..." required>
            <a style="float:left" id="Login" href="#" onclick="selectForm(this.id);">Registered User ?</a>
            <a href="index.php" style="float:right">Back to Home Page?</a>
            <br>
            <input id="submitButton" type="submit" value="Register" name="register">
          </form>';
}

//function_to_redirct_to_header
function reDirect($url){
    return $url;
}

//function_to_check_form_is_submitted
function checkSubmit(){
  
    if(isset($_POST['verify'])){
        $pass = $_POST['pass'];
        $check = verifyAdmin($pass);
        $url = "adminindex.php";
        if($check == TRUE){
			session_start();
			$_SESSION['loggedin']=true;
			$_SESSION['uname']=$user_data['enroll'];
		  
			return $url;
        }
        else{
            echo '<br><br><br><br><span id="espan">Password you entered is INCORRECT : - >
                  <a href="form.php?id=Admin Login" style="color:black">Try Again ?</a>
                  </span>';
        }
    }
    else if(isset($_POST['login'])){
        $eroll = $_POST['eroll']; 
        $pass = $_POST['pass'];
        $url = "user.php?id=$eroll";
        $check = verifyUser($eroll,$pass);
        if($check == TRUE){
            return $url;
        }
        else{
            echo '<br><br><br><br><span id="mspan">Enrollment no. or Password you entered is INCORRECT : - >
                  <a href="form.php?id=Login" style="color:black">Try Again ?</a>
                  </span>';
        }
    }
    else if(isset($_POST['register'])){
        $registered = registerUser();
        if($registered == TRUE){
            echo '<script type="text/javascript">alert("Registration Successfull!\nContinue Login ?"</script>';
            $url = "form.php?id=Login";
            return $url;
            
        }
        else{
            echo '<script type="text/javascript">alert("Resistration Failed\n\nProblem With Database")</script>';
            header('location:form.php?id=Register','replace');
            exit();
        }
    }
}


//function_to_display_form
function selectForm($formtype){
    if($formtype == 'Login'){
        userForm();
        return checkSubmit();
        die();
    }
    else if($formtype == 'Admin Login'){
        adminForm();
        return checkSubmit();
        die();
    }
    else if($formtype == 'Register'){
        registerForm();
        return checkSubmit();
        die();
    }
}
/*============================================================================================================================================*/
/*============================================================================================================================================*/
/*=============================         ********************** END **********************         ============================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/

//***********************************************************************************************************************************************
//*********************************************************************************************************************************************** 
/*========================================================ADMIN.PHP============================================================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/

//












/*============================================================================================================================================*/
/*============================================================================================================================================*/
/*=============================         ********************** END **********************         ============================================*/
/*============================================================================================================================================*/
/*============================================================================================================================================*/

//***********************************************************************************************************************************************
//***********************************************************************************************************************************************
?>