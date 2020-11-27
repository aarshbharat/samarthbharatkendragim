<?php 
session_start();

include("db_config.php");
$error=array();
if(isset($_POST['submit'])){
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $pass=mysqli_real_escape_string($db,$_POST['pass']);
    /*
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['pass']);*/
    if(empty($email))	array_push($error, "Email ID is required");
	if(empty($pass))	array_push($error, "Password is required");

    if(count($error)==0){

		$password=md5($pass);

		$query=" SELECT count(email) FROM sanyojak_signup WHERE email='$email' AND pass='$password' ";

		$result=$db->query($query);
		$row=mysqli_fetch_assoc($result);
		$result=(int)$row['count(email)'];

		if($result==1){
			$_SESSION['email']=$email;
			$_SESSION['success']="You are logged in now";
			header('location:index1.php');
		}
		else{
			include('login.php');

			array_push($error, "wrong email/password");
			foreach($error as $errors){
			?>
			<p><?php echo $errors?></p>
			<?php
			}
		}


	}
	else{
		foreach($error as $errors){
			?>
			<p><?php echo $errors?></p>
			<?php
		}
		include('login.php');
	}
    
}
?>

