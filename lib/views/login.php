<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<div class="container">
    <div class="card login-card">
    <div class="card-header">
        Login
    </div>
        <div class="card-body">

            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                <p class="card-text">Username : </p>
                <input type="text" name="username" id="" class="form-control form-input">
                <p class="card-text">Password : </p>
                <input type="password" name="password" id="" class="form-control form-input">
            </form>
        </div>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
