<?php 
include 'sql.php';

if (isset($_POST['submit'])) {
	if (!empty($_POST['name']) && !empty($_POST['lastName']) 
		&& !empty($_POST['email']) &&!empty($_POST['gender']) 
		&& !empty($_POST['mobile'])&& !empty($_POST['password'] ) ){
	$name = $_POST['name'];
   $lastname = $_POST['lastName'];
	$password = $_POST['password'];
	$email    = $_POST['email'];
	$mobile  = $_POST['mobile'];
	$gender   = $_POST['gender'];
   check($name,$lastname,$password,$email,$mobile,$gender);
}}

	function check($name,$lastname,$password,$email,$mobile,$gender){
	$check = "SELECT * FROM customer where name='$name' or lastname='$lastname' or password='$password'or email='$email' or mobile='$mobile' ";
	$check_q = mysql_query($check);
  $fetch=mysql_num_rows($check_q);
	if ($fetch>0) {
		$submitErr= "Username is Already exists";
    header("Location:register_user.html");}
	else{	
	signup($name,$lastname,$password,$email,$mobile,$gender);
}
echo "Your data is checked";
}


function signup($name,$lastname,$password,$email,$mobile,$gender){
	$check = "INSERT INTO customer (name,lastname,password,email,mobile,gender) VALUES('$name','$lastname','$password','$email','$mobile','$gender' )";
	$check_q = mysql_query($check);
  $_SESSION['login_username']=$name;
  header("Location:index.html");
	echo "your data has been inserted";
}

?>