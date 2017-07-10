<?php 
include 'sql.php';

if (isset($_POST['submit'])) {
	$mobile = $_POST['mobilenumber'];
	$password = $_POST['password'];
	//check($username,$password);
 if($mobile!=' '&&$password!=' '){
	//login($username,$password);
	$check = "SELECT mobile,password FROM customer where mobile='$mobile' and password='$password'";
	$check_q = mysql_query($check);
    $count=mysql_num_rows($check_q);
    if($count!="")
    {
    //session_register("sessionusername");
    //$name="SELECT name FROM customer where mobile='$mobile' ";
   // $_SESSION[$login_username]=$name;
    header("Location:booking.html"); 
    }
    else{
		echo "Invalid Mobile no & Password!!";  
    }
 }
 else {
 	echo "enter Mobile no & password";
 }
}
?>
