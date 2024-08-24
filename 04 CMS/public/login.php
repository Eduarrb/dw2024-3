<?php require_once('../resources/config.php'); ?>

<?php include(VIEW_FRONT . DS . "authHead.php"); ?>

    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
    <div class="card-body">
        <?php mostrar_msj(); ?>
        <?php validar_user_login(); ?>
        <form method="post">
            <div class="form-floating mb-3">
                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="user_email" />
                <label for="inputEmail">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="user_pass" />
                <label for="inputPassword">Password</label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" id="inputRememberPassword" type="checkbox" name="user_recuerdame" />
                <label class="form-check-label" for="inputRememberPassword">Remember me</label>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                <a class="small" href="password.php">Forgot Password?</a>
                <!-- <a class="btn btn-primary" href="index.html">Login</a> -->
                <input type="submit" value="Iniciar Sesión" name="login" class="btn btn-primary">
            </div>
        </form>
    </div>
    <div class="card-footer text-center py-3">
        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
    </div>
<?php include(VIEW_FRONT . DS . 'authFooter.php'); ?>
                                