<?
include("config.php");
if(isset($_POST['submit'])) {
	$email=$_POST['email'];
	if($email=="")
	echo "Please Enter email address";
	$rest=mysql_query("select * from tbl_registration where email='".$email."'");
	if($row=mysql_fetch_array($rest)) {
			$user=$row['username'];
			$sendToEmail=$email;
			$SEND.="Your Username is<b> '".$user."'</b>and Your Forgoted password is <b> ";
			$SEND.=$row['password']."</b><br>";
			$SEND.="You may try this username and password to check the username and password<br>";
			$Subject1="Your INMIT forgotted password";
			$header1= "MIME-Version: 1.0\n";
			$header1.="Content-type: text/html; charset=iso-8859-1\n";
			if (mail($sendToEmail,$Subject1,$SEND,$header1)){
					header("Location: thank.html");
				}
	}else {
		echo "Incorrect Email Address! Please try again";
	}
}  
// header("location:thank.html");}
?>