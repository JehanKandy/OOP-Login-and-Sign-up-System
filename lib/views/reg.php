<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<div class="container">
    <div class="card login-card">
    <div class="card-header">
        Sign up
    </div>


        <div class="card-body">
            <?php 
                include("../function/function.php");

                if(isset($_POST['sign_up'])){
                    $result = reg_user($_POST['username'], $_POST['email'], md5($_POST['pass']), md5($_POST['cpass']));
                    echo $result;
                }
            ?>
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
            Already have an account? <a href="login.php" style="text-decoration: none;">Sign In</a>

        </div>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
