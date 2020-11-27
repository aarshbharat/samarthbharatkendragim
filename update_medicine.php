<?php 
include("header.php");
include("navbarafterlogin.php");
include("db_config.php");

$id= $_GET['id'];
    if(isset($_POST['insert'])){
        $Name=$_POST['medi_name'];
        $Price=$_POST['price'];
        $Stock=$_POST['stock'];
        $q ="UPDATE `medicine_stock` SET `ID`=$id,`name`='$Name',`price`='$Price',`stock`='$Stock' WHERE id='$id'" ;
        $query = mysqli_query($db,$q);
        /*header('location:display_medicine.php');*/
    }

?>
<br>
<div class="card admin_signup_card">
    <div class="container">
        <div class="card">
            <div class="card-header">
              Update Medicine Stock 
            </div>
            <br>
            <div class="container">
                <form method="POST">
                    <div class="form-row">
                        <div class="col">
                            <input type="name" name="medi_name" class="form-control" placeholder="Name of Medicine" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="name" name="price" class="form-control" placeholder="Price of Medicine" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="name" name="stock" class="form-control" placeholder="Stock of Medicine" required>
                        </div>
                    </div>
                    <br>
                    <button type="name" name="insert" class="btn btn-primary btn-block">Update Item</button>
                    <br>
                    
                        <div class="row">
                            <div class="col-6">
                            <button type="button"  class="btn btn-primary btn-lg"><a class="nav-link" href="display_medicine.php">SHOW MEDICINE STOCK</a></button>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5">
                            <button type="button" class="btn btn-primary btn-lg"><a class="nav-link" href="medicine_insert.php">ADD NEW MEDICINE STOCK</a></button>
                            </div>
                        </div>
                        
			        <br>
                </form>
            </div>
        </div>
        <br>
    </div>
</div>

<?php include("footer.php");?>