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
                संयोजक अकाउंट बनाएं
            </div>
            <div class="container">
                <form name="signup" action="admin_signup_process.php" method="POST">
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="name" class="form-control" placeholder="नाम (name)" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="mobile" class="form-control" placeholder="भ्रमणभाष (Mobile No.)" required>
                        </div>
                    </div>
                    <br>
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
                    <div class="form-row">
                        <div class="col">
                            <input type="password" name="cpass" class="form-control" placeholder="पुनः पासवर्ड सुनिश्चित करे (Confirm Password)" required>
                        </div>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">अकाउंट बनाये (Create Account)</button>
                    <br>
                    <p class="text-center">Have an account <a href="admin_login.php">Log In</a></p>
                </form>
            </div>
        </div>
        <br>
    </div>
</div>

<?php include("footer.php");?>