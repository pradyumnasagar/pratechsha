<?	session_start(); 
	$HOME_DIR=$_SERVER['DOCUMENT_ROOT']."/new";
	$TEMPLATE_DIR="$HOME_DIR/templates";
	$LIB_DIR="$HOME_DIR/library";
	$UPLOAD_DIR=$_SERVER['DOCUMENT_ROOT']."/new";
	///////////////// Global  Site Variables ////////////////////////// 
	
	$VROOT_DIR ="http://www.inmit.org/new";
	$VROOT_MAP ="http://www.inmit.org/new";
	$PIC_DIR = $_SERVER['DOCUMENT_ROOT']."/inmit/uploads/";
	//$PIC_DIR = $_SERVER['DOCUMENT_ROOT']."/new/uploads/";
	$SITE_PAGE_TITLE="INMIT";
	
	///////////////// END Global  Site Variables ////////////////////////// 
	
	
	
	/////////////////Create Connection with database////////////////
	define("HOST_NAME" , "mysql.inmit.org");
	define("DB_USER", "inmit");
	define("DB_PASS", "inmit123");
	define("DB_NAME", "inmit");
	mysql_connect(HOST_NAME,DB_USER,DB_PASS);
	mysql_select_db(DB_NAME);
	/////////////////End Create Connection with database////////////////
	  
	////////////////Include All Site Common  Fuction///////////////////////
    //include("$LIB_DIR/site_functions.php");
	////////////////End Include All Site Common  Fuction///////////////////////
	//topnavlinks();
?>
