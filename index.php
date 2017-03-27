
<?php include ('includes/header.php') ?> <!-----include header file------->

<?php include ('includes/nav.php') ?> <!-----include nav file------->

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-6">

            <?php validate_user_login(); ?>

        </div><!-----end col------->
    </div><!-----end row------->
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <a href="index.php" id="login-form-link">Admin Login</a>
                        </div><!-----end col------->
                    </div><!-----end row------->
                    <hr>
                </div><!-----end panel-heading------->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form"  method="post" role="form" style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username"
                                           tabindex="1" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="login-password"
                                           tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember"
                                           id="remember">
                                    <label for="remember" class="remember_me"> Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit"
                                                   tabindex="4" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form><!-----end form------->
                        </div><!-----end col------->
                    </div><!-----end row------->
                </div><!-----end panel-body------->
            </div><!-----end panel------->
        </div><!-----end col------->
    </div><!-----end row------->
</div> <!-----end container------->

<?php include ('includes/footer.php') ?><!-----include footer file------->
