<?php 
include("header.php");
include("navbarafterlogin.php");
include("db_config.php");
if(isset($_POST['insert'])){
    $Name=$_POST['medi_name'];
    $Price=$_POST['price'];
    $Stock=$_POST['stock'];
    $q = "INSERT INTO `medicine_stock` (`name`, `price`,`stock`) VALUES ('$Name', '$Price','$Stock')";
    $query = mysqli_query($db,$q);
    echo '<script type="text/javascript">'; 
	echo 'window.location.href = "medicine_insert.php";';
	echo '</script>';
    /*header('Location:index1.php');*/
}

include("footer.php");
?>
 
    