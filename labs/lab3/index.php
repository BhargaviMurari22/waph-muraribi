<?php
	session_start();    
	if (checklogin_mysql($_POST["username"],$_POST["password"])) {
?>
	<h2> Welcome <?php echo htmlentities($_POST['username']); ?> !</h2>
<?php		
	}else{
		echo "<script>alert('Invalid username/password');window.location='form.php';</script>";
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
		echo "DEBUG->sql=$sql";
		if($result->num_rows==1) 
		  return TRUE;
		else 
		  return FALSE;
  	}
?>
