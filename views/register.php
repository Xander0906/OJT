<?php
require_once 'header.php';
?>

<div class="card col-md-4 m-auto mt-4 bg-dark p-5 card-sm">
    <div class="col-3 m-auto">
        <img class="img-fluid user-logo" src="<?php echo $img; ?>/user-logo.png">
    </div>
    <h4 class="h4 text-center text-light mt-2">Register your account</h4>
    <form method="POST" class="text-start" action="../actions/register.php">
        <div class="form-group mb-2 mt-3">
            <label class="text-light text-size">Name</label>
            <input class="form-control bg-dark text-light" name="name" value="<?php echo getValue('name'); ?>" placeholder="Enter your name">
            <?php if (showError('name')) : ?>
                <p class="error text-danger"><?php echo showError('name'); ?></p>
            <?php endif; ?>
        </div>
        <div class="form-group mb-2">
            <label class="text-light text-size">Username</label>
            <input class="form-control bg-dark text-light " name="username" value="<?php echo getValue('username'); ?>" placeholder="Enter your username">
            <?php if (showError('username')) : ?>
                <p class="error text-danger"><?php echo showError('username'); ?></p>
            <?php endif; ?>
        </div>
        <div class="form-group mb-2">
            <label class="text-light text-size">Email</label>
            <input class="form-control bg-dark text-light " name="email" value="<?php echo getValue('email'); ?>" placeholder="Enter your email">
            <?php if (showError('email')) : ?>
                <p class="error text-danger"><?php echo showError('email'); ?></p>
            <?php endif; ?>
        </div>
        <div class="form-group mb-2">
            <label class="text-light text-size">Password</label>
            <input type="password" class="form-control bg-dark text-light" name="password" placeholder="Enter your password">
            <?php if (showError('password')) : ?>
                <p class="error text-danger"><?php echo showError('password'); ?></p>
            <?php endif; ?>
        </div>
        <div class="form-group mb-3 ">
            <label class="text-light text-size">Confirm Password</label>
            <input type="password" class="form-control bg-dark text-light" name="confpassword" placeholder="Re-enter password">
            <?php if (showError('confpassword')) : ?>
                <p class="error text-danger"><?php echo showError('confpassword'); ?></p>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <div class="row m-auto">
                <button type="submit" class="btn btn-primary" name="register">Register</button>
                <p class="text-center text-light text-size mt-1">Already have an account?<a class="m-0 text-decoration-none" href="index.php"> Login Here</a></p>
            </div>
        </div>
    </form>
</div>

<?php
require_once 'footer.php';
?>