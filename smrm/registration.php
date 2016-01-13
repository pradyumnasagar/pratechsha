<? session_start();
//include("/home/httpd/vhosts/aiims/httpdocs/mitosociety/config/config.php");
include("config.php");
//include("$LIB_DIR/functions.lib");
if(isset($_POST['btn_submit'])) {
	$uname=$_POST['username'];
	$password=$_POST['password'];
	if($uname=="")
	echo "Please Enter username";
	$rest=mysql_query("select * from tbl_registration where username='".$uname."' and password='".$password."'") or mysql_error();
	if($row=mysql_fetch_array($rest)) {
	$_SESSION['email_login']=$row['username'];
	 header("Location: welcome.php");
	}
	else
	echo "Incorrect username::password";
	}  
// header("location:thank.html");}
?>
