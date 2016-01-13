<?
//include("/home/httpd/vhosts/aiims/httpdocs/mitosociety/config/config.php");
include("config.php");
//include("$LIB_DIR/functions.lib");
if(isset($_POST['submit'])) {
	$amount=$_POST['member'];
	$dd_no=$_POST['dd_no'];
	$uname=$_POST['name'];
	$password=$_POST['password'];
	$name=$_POST["fullname"];
	$qualification=$_POST['qualification'];
	$designation=$_POST['designation'];
	//die("$designation");
	$specialization=$_POST['specialization'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['contact'];
	$o_address=$_POST['o_office'];
	$o_phone=$_POST['office_contact'];
	$o_email=$_POST['office_email'];
	$refer=$_POST['referred'];
	if($amount==1000)
	  $member_type="full member";
	else if($amount==250)
	  $member_type="student member";
	
	  	mysql_query("insert into tbl_registration(dd_no,username,password,full_name,qualification,designation,specialization,address,contact,email,office_address,office_contact,office_email,reffered_by,membership) 
					VALUES ('".$dd_no."','".$uname."','".$password."','".$name."', '".$qualification."','".$designation."','".$specialization."','".$address."','".$phone."','".$email."','".$o_address."','".$o_phone."','".$o_email."','".$refer."','".$amount."')");
		header("Location:thank.html");
	}  
// header("location:thank.html");}
?>
