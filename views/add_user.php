<?php include 'header.php'; ?>

<div class="row m-auto">
    <div class="card col-md-5 m-auto mt-4 bg-dark p-5 card-sm">
        <div class="col-3 m-auto">
            <img class="img-fluid user-logo" src="<?php echo $img; ?>/user-logo.png">
        </div>
        <h4 class="h4 text-center text-light mt-2">Register user account</h4>
        <form method="POST" class="text-start" action="../actions/manage_user.php">
            @csrf
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
            <div class="form-group mb-3 ">
                <label class="text-light text-size">Role</label>
                <select name="role" class="form-select bg-dark text-light">
                    <option value="admin">Admin</option>
                    <option value="student">Student</option>
                    <option value="rescuer">Rescuer</option>
                </select>
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
                    <button type="submit" class="btn btn-primary" name="register_user">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>