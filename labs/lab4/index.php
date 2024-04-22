<?php
        $lifetime=15*60;
        $path= "/";
        $domain="192.167.4.84";
        $secure=TRUE;
        $httponly=TRUE;
        session_set_cookie_params($lifetime,$path,$domain,$secure,$httponly);
	session_start();
	if (isset($_POST["username"]) && isset($_POST["password"])) {
	    
	if (checklogin_mysql($_POST["username"],$_POST["password"])) {
	$_SESSION['authenticated']=TRUE;
	$_SESSION['username']=$_POST["username"];
	$_SESSION['browser']=$_SERVER["HTTP_USER_AGENT"];
	
		
	}else{
	session_destroy();
		echo "<script>alert('Invalid username/password');window.location='form.php';</script>";
		die();
	}
	}
	if(!$_SESSION["authenticated"] or $_SESSION["authenticated"] !=TRUE){
	session_destroy();
	echo "<script>alert('you have not login. please login first');</script>";
	header("Refresh:0;url=form.php");
	die();
	
	}
	if($_SESSION['browser']!=$_SERVER["HTTP_USER_AGENT"]){
	session_destroy();
	echo "<script>alert('Session hijacking is detected...!!!');</script>";
	header("Refresh:0;url=form.php");
	die();
	}
	
	
	function checklogin_mysql($username, $password) {
		$mysqli= new mysqli('localhost','muraribi','Pa$$w0rd','waph');
		if($mysqli-> connect_errno){
			printf("Database connection failed");
			exit();
		}
		$prepared_sql= "select * from users where username=? " . " AND password=md5(?);";
		$stmt=$mysqli->prepare($prepared_sql);
		$stmt->bind_param("ss",$username,$password);
		$stmt-> execute();
		$result= $stmt->get_result();
		if($result->num_rows==1) 
		  return TRUE;
		else 
		  return FALSE;
  	}
  	
 ?>
  	<h2> Welcome <?php echo htmlentities($_SESSION['username']); ?> !</h2>
  	<a href="logout.php">Logout</a>
