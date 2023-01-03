<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<div class="container">
    <div class="card login-card">
    <div class="card-header">
        Sign up
    </div>
        <div class="card-body">
            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                <p class="card-text">Username : </p>
                <input type="text" name="username" id="" class="form-control form-input">

                <p class="card-text">Email : </p>
                <input type="email" name="email" id="" class="form-control form-text">

                <p class="card-text">Password : </p>
                <input type="password" name="pass" id="" class="form-control form-input">

                <p class="card-text">Confirm Password</p>
                <input type="password" name="cpass" id="" class="form-control form-input">

                <p><input type="reset" value="Clear" class="btn btn-secondary signup-btn">&nbsp;&nbsp;<input type="submit" value="Sign Up" name="sign_up" class="btn btn-success signup-btn"></p>
            </form>

        </div>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
