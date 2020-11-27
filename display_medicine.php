<?php 
include("header.php");
include("navbarafterlogin.php");
include("db_config.php");
$q = "select * from sweets";
$query = mysqli_query($db,$q);
?>
<div class="card">
<div class="container">
    <div class ="col-lg-12"><br>
    <h1 class="text-center">Medicine Stock Sheet</h1><br>
    <table class="table table-striped table-hover table-bordered ">
        <tr class="bg-dark text-white text-center">
        <th>ID</th>
        <th>Medicine Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Delete</th>
        <th>Update</th>
        </tr>

        <?php

            
            $q = "SELECT * from `medicine_stock` ";
            $query = mysqli_query($db,$q);

            while($res = mysqli_fetch_array($query)){
        ?>
        <tr class="text-center">
        <td><?php echo $res['id'] ?> </td>
        <td><?php echo $res['name'] ?> </td>
        <td><?php echo $res['price'] ?> </td>
        <td><?php echo $res['stock'] ?> </td>
        <td><button class="btn btn-danger text-white"><a href="delete_stock_item.php?id=<?php echo $res['id'];?>" class="text-white">DELETE</a></button></td>
        <td><button class="btn btn-success text-white"><a href="update_medicine.php?id=<?php echo $res['id'];?>" class="text-white">UPDATE</a></button></td>
        </tr>
        <?php
            }   
        ?>
    </table>
    </div>
            <br>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <button type="button" class="btn btn-primary btn-lg"><a class="nav-link" href="medicine_insert.php">ADD NEW MEDICINE STOCK</a></button>
        </div>
        <div class="col-4"></div>
    </div>
    <br>
</div>

</div>

<?php include("footer.php");?>