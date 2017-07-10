<?php 
include 'sql.php';

if (isset($_POST['submit'])) {
	if (!empty($_POST['ownerName']) && !empty($_POST['vendorName']) 
		&& !empty($_POST['mobile']) &&!empty($_POST['registrationNumber']) 
		&& !empty($_POST['servicingCapacity']) ){
	$owner = $_POST['ownerName'];
    $vendor = $_POST['vendorName'];
	$mobile = $_POST['mobile'];
	$regno    = $_POST['registrationNumber'];
	$capacity  = $_POST['servicingCapacity'];
	$gender   = $_POST['gender'];
   check($owner,$vendor,$mobile,$regno,$capacity);
}
else{
	echo "ENter fields";
}}

	function check($owner,$vendor,$mobile,$regno,$capacity){
	$check = "SELECT * FROM service_station where ownername='$owner' or vendorname='$vendor' or mobile='$mobile'or Register_no='$regno' or capacity='$capacity' ";
	$check_q = mysql_query($check);
    $fetch=mysql_num_rows($check_q);
	if ($fetch>0) {
		$submitErr= "Username is Already exists";
    header("Location:register_station.html");}
	else{	
	signup($owner,$vendor,$mobile,$regno,$capacity);
}
echo "Your data is checked";
}


function signup($owner,$vendor,$mobile,$regno,$capacity){
	$check = "INSERT INTO service_station (ownername,vendorname,mobile,Register_no,capacity) VALUES('$owner','$vendor','$mobile','$regno','$capacity')";
	$check_q = mysql_query($check);
	if($check_q==1){
  	$_SESSION['login_username']=$name;
  	header("Location:index.html");
	echo "your data has been inserted";
}}

?>