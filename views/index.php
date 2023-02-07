<?php
require_once 'header.php';
?>

<div class="card col-md-4 mx-auto mt-4 bg-dark p-5 card-sm">
    <div class="col-3 m-auto">
        <img class="img-fluid user-logo" src="<?php echo $img; ?>/user-logo.png">
    </div>
    <h4 class="h4 text-center text-light mt-2">Login to your account</h4>
    <form method="post" action="../actions/login.php">
        <div class="form-group mb-3 mt-3">
            <div class="d-flex align-items-center">
                <i class="fa fa-user text-light position-absolute ms-2 border-end pe-1"></i>
                <input class="form-control bg-dark text-light text-indent" name="username" value="<?php echo getValue('username'); ?>" placeholder="Enter your username">
            </div>
            <?php if (showError('username')) : ?>
                <p class="error text-danger text-start"><?php echo showError('username'); ?></p>
            <?php endif; ?>
        </div>
        <div class="form-group mb-1">
            <div class="d-flex align-items-center">
                <i class="fa fa-lock text-light position-absolute ms-2 border-end pe-1"></i>
                <input class="form-control bg-dark text-light text-indent" type="password" name="password" placeholder="Enter your password">
            </div>
            <?php if (showError('password')) : ?>
                <p class="error text-danger text-start"><?php echo showError('password'); ?></p>
            <?php endif; ?>
        </div>
        <div class="form-check d-flex justify-content-start">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label ms-1" for="flexCheckChecked">
                Remember me
            </label>
        </div>
        <div class="form-group">
            <div class="row m-auto">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
                <p class="text-center text-light text-size mt-1">No Account?<a class="m-0 text-decoration-none" href="register.php"> Register Here</a></p>
            </div>
        </div>
    </form>
</div>

<?php
require_once 'footer.php';
?>