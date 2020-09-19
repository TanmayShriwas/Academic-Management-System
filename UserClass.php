<?php

class User
{
    public $db;

    public function __construct()
    {
        $this->db=mysqli_connect("localhost","root","","storing");
        // Check Database connection
        if(mysqli_connect_errno())
        {
            echo "Error: Could not connect to database.";
            exit;
        }
    }






    // For login proccess
    public function check_login($enroll, $password)
    {
        
        $sql2 = "SELECT * from signup WHERE enroll='$enroll'";
        // Checking if the username is available in the table
        $result = mysqli_query($this->db, $sql2);
        $user_data = mysqli_fetch_array($result);
        $count_row = $result->num_rows;

        if($count_row == 1)
        {
			if(($user_data['password'] == hash('sha256',"{$user_data['salt']}{$password}")))
			{
            // This login var will use the session thing
			session_start();
			$_SESSION['loggedin']=true;
			$_SESSION['uname']=$user_data['name'];
			$_SESSION['email']=$user_data['email'];
            return true;
            }
			else 
			{
				return false;
			}
		}
        else
        {
            return false;
        }
    }
	function verifyAdmin($pass){ 

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
    // For showing username or fullname
    public function get_fullname($email)
    {
        $sql3 = "SELECT name FROM users WHERE email = '$email'";
        $result = mysqli_query($this->db, $sql3);
        $user_data = mysqli_fetch_array($result);
        return $user_data['name'];
    }

    public function get_username($uid)
    {
        $sql3 = "SELECT uname FROM users WHERE uid = $uid";
        $result = mysqli_query($this->db, $sql3);
        $user_data = mysqli_fetch_array($result);
        echo $user_data['uname'];
    }

    public function get_email($uid)
    {
        $sql3 = "SELECT uemail FROM users WHERE uid = $uid";
        $result = mysqli_query($this->db, $sql3);
        $user_data = mysqli_fetch_array($result);
        echo $user_data['uemail'];
    }

    // Starting session
    public function get_session()
    {
        return $_SESSION['login'];
    }
    public function user_logout()
    {
        $_SESSION['login'] = FALSE;
        session_destroy();
    }
}
?>