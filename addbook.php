 <?php

    if(isset($_REQUEST['submit'])){
	$con = mysqli_connect("localhost","root","","ais");
	
	$errors = array();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){	
	if(count($errors) === 0){
		$title = mysqli_real_escape_string($con, $_POST['title']);
		$author = mysqli_real_escape_string($con, $_POST['bauthor']);
	    $sem = mysqli_real_escape_string($con, $_POST['sem']);
		$subject = mysqli_real_escape_string($con, $_POST['subject']);
	    $available = mysqli_real_escape_string($con, $_POST['available']);
			
		$search_query = mysqli_query($con, "SELECT * FROM books WHERE title = $title");
		
		if(!$search_query){
			$sql = "INSERT INTO books VALUES('$title', '$author', '$sem','$subject', '$available')";
			$query = mysqli_query($con, $sql);
			$successful = "<h3> You are successfully registered.</h3>";
		}
		else{
			$errors['title'] = "unavailable.";
			
		}
	}
	
	}
	}	
?>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png'); background-repeat: no-repeat;    background-size: cover;"> 
</head>
    <body class="thin-blue-border" >
	 
	 
<div id="container_demo" class="animate form">
                    <div id="wrapper">
					  <table>
					  <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                            
                            <form  action="" autocomplete="on" method="POST" name="signup"> 
							 
							
                                <h1> BOOK DETAILS</h1> 
                                 <p> 
                                    <label class="uname" data-icon="u">BOOK TITLE</label>
									 
                                    <input type="text" name="title" id="name" value="" required>
			                       
									
                                </p> 
                                 
								 <p>
								 
								  <label class="bauthor" data-icon="u">BOOK AUTHOR</label>
							      <input type="text" name="bauthor" id="bauthor" required>
			                       
                                 </p> 								
                			
			                     <p> 
                                  
								  <label class="usem" >BOOK SEMESTER</label>
							      <input id="semsignup" name="sem" required="required" type="text">
								  
                                </p>
                                <p> 
                                 <label class="subject" data-icon="s" > SUBJECT</label>
                                 <input id="subject" name="subject" type="subject" required> 
                                </p>
                                <p> 
                                    <label class="available" data-icon="a"> AVAILABLE </label>
									<input id="available" name="available" type="text" required>
									
                                    
                                </p>
								
                                 
	
                                <p class="signin button"> 
									<input type="submit" name= "submit" class="btn" value="ADD BOOK" onclick="return(check())"/> 
								</p>
                               
								</table>
                            </form>
							</div>
						</body>
						</html>
						
						
						
						
						
						
						