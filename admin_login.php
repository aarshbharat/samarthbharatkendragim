<?php
include("header.php");
include("navbar.php");
include("db_config.php");
?>

<br>
<div class="card admin_signup_card">
    <div class="container">
        <div class="card">
            <div class="card-header">
                संयोजक अकाउंट लॉगइन (Admin Login)
            </div>
            <br>
            <div class="container">
                <form name="signup" action="admin_login_process.php" method="POST">
                    <div class="form-row">
                        <div class="col">
                            <input type="email" name="email" class="form-control" placeholder="ई-मेल (E-Mail)" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="password" name="pass" class="form-control" placeholder="पासवर्ड (Password)" required>
                        </div>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary btn-block"> लॉग इन (Login)</button>
                    <br>
                    <p class="text-center">Not have an account? <a href="admin_signup.php">SignUp Here.</a></p>
                </form>
            </div>
        </div>
        <br>
    </div>
</div>


<?php include("footer.php");?>