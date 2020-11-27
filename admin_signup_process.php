<?php 
session_start();
include("db_config.php");


if(isset($_POST['submit'])){
    
    $name =  mysqli_real_escape_string($db,$_POST['name']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $pass = mysqli_real_escape_string($db,$_POST['pass']);
    $cpass = mysqli_real_escape_string($db,$_POST['cpass']);   
    $mobile = mysqli_real_escape_string($db,$_POST['mobile']);

    if(empty($name))	array_push($error, "First name is required");
	if(empty($mobile))	array_push($error, "Mobile No. is required");
	if(empty($email))	array_push($error, "Email ID is required");
	if(empty($pass))	array_push($error, "Password is required");
	if(empty($cpass))	array_push($error, "Confirm your password");

	if($pass != $cpass)	array_push($error, "Passwords don't match");
    
    $query="SELECT * from `sanyojak_signup` where email='$email' ";
    $result=$db->query($query);
    $row=mysqli_fetch_assoc($result);
    $result=(int)$row['count(email)'];
    /*$q=mysqli_query($db,$query);
    $count=mysqli_num_rows($q);*/
    
    if($result>0){
        array_push($error, "Email ID already exists!");
    }
    if(count($error)==0){

		$pass=md5($pass);

		$query="INSERT INTO  `sanyojak_signup` (name,email,pass,cpass,mobile) VALUES ('$name','$email','$pass','$cpass','$mobile')";
		$_SESSION['email']=$email;
		$_SESSION['success']="You are logged in now";

		if($db->query($query) == TRUE){
			header('location:index1.php');
		}
		else{
			echo "ERROR";
			exit();
		}
	}
	else{
		include('register.php');
		foreach($error as $errors){
			?>
			<p><?php echo $errors?></p>
			<?php
		}
	}
}    

?>

