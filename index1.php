<?php
session_start();
?>
<?php include("header.php");?>
<?php include("navbarafterlogin.php");?>
<?php include("db_config.php");?>




	
		<?php
			if(isset($_SESSION['success'])) :
		?>

		<div>
			<h3>
				<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
				?>
			</h3>
		</div>

		<?php
			endif
		?>

		<?php
			if(isset($_SESSION['email'])) :
		?>
		<div class="card">
			<br>
			<h3 style="margin-left: 35%;margin-rightt: 25%;">Welcome Admin : <?php echo $_SESSION['email']; ?></h3>
			<br>
				<button type="button" class="btn btn-primary btn-lg"><a class="nav-link" href="medicine_insert.php">ADD MEDICINE STOCK</a></button>
			<br>
				<button type="button" class="btn btn-primary btn-lg"><a class="nav-link" href="display_medicine.php">SHOW MEDICINE STOCK</a></button>
			<br>
		</div>
		
		
		<!--<a href="logout.php"><button>logout</button></a>-->

	<?php endif;
		
		$msg="";

		if(!isset($_SESSION['email'])){
			$msg="**You must login first!**<br><br> **Register yourself or login if already registered**";
		}

	?>

<h4 style="color:red; text-align: center; margin-top: 20px;"><?php echo $msg ?></h4>



<?php include("footer.php");?>