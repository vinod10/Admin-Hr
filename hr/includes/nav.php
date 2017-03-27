<?php

if(isset($_POST['login-submit'])) {
    $_SESSION['username'] = $_POST['username'];
}
?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Hello &nbsp<?php echo ucfirst($_SESSION['username']); ?></a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user "></i>&nbsp<?php echo $_SESSION['username']; ?><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"  data-toggle="modal" data-target="#profile_modal"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="<?= ($activePage == 'index') ? 'active':''; ?>">
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li class="<?= ($activePage == 'tables') ? 'active':''; ?>">
                <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<!------Profile Modal-------->
<div class="modal fade" id="profile_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title text-center" id="myModalLabel"><i class="fa fa-user"></i> Update your profile</h4>
            </div> <!--modal-header-->

            <div class="modal-body">
                <p class="text-center">Update your details!</p>

                <form class="form-horizontal" role="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="sr-only" for="first name">First name</label>
                        <input type="text" class="form control col-md-8 col-md-offset-2" id="first_name" placeholder="First Name">
                    </div> <!--form-group-->

                    <div class="form-group">
                        <label class="sr-only" for="last name">Last name</label>
                        <input type="text" class="form control col-md-8 col-md-offset-2" id="last_name" placeholder="Last Name">
                    </div> <!--form-group-->

                    <div class="form-group">
                        <label class="sr-only" for="email">Email</label>
                        <input type="email" class="form control col-md-8 col-md-offset-2" id="email" placeholder="Email">
                    </div> <!--form-group-->

                    <div class="form-group">
                        <label class="sr-only" for="username">Username</label>
                        <input type="text" class="form control col-md-8 col-md-offset-2" id="username" placeholder="Username">
                    </div> <!--form-group-->

                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <input type="password" class="form control col-md-8 col-md-offset-2" id="password" placeholder="Password">
                    </div> <!--form-group-->

                    <div class="form-group">
                        <input type="file" class="col-md-8 col-md-offset-2" name="files[]" id="js-upload-files" multiple>
                    </div>

                    <hr>
                    <input type="submit" class="btn btn-danger col-md-4 col-md-offset-4" value="Update">
                    <br>
                    <br>
                </form>
            </div> <!--modal-body-->
        </div> <!--modal content-->
    </div> <!--modal dialog-->
</div> <!--modal-->