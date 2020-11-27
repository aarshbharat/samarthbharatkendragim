<?php 
include("header.php");
include("navbarafterlogin.php");
include("db_config.php");
?>

<br>
<div class="card admin_signup_card">
    <div class="container">
        <div class="card">
            <div class="card-header">
               Medicine Stock Entry 
            </div>
            <br>
            <div class="container">
                <form action="medicine_insert_process.php" method="POST">
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
                    <button type="name" name="insert" class="btn btn-primary btn-block">Add Item</button>
                    <br>
                </form>
            </div>
        </div>
        <br>
    </div>
</div>

<?php include("footer.php");?>