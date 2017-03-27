<?php include ('includes/header.php') ?> <!-----include header file------->

<?php include ('includes/nav.php') ?> <!-----include nav file------->

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-8">
                <h1 class="page-header">
                    Dashboard <small>Admin</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </li>
                    <li class="">
                        <i class="fa fa-search"></i> Search
                    </li>
                    <li class="">
                        <i class="fa fa-filter"></i> Filter
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal"
                        data-target="#admin_modal" style="margin-top: 40px">Add Admin</button>
            </div>
            <div class="col-lg-2">
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal"
                        data-target="#hr_modal" style="margin-top: 40px">Add Hr</button>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">26</div>
                                <div>Admin</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">12</div>
                                <div>Hr</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">124</div>
                                <div>Applied for Kwiqpick</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">13</div>
                                <div>Support Tickets!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<!------Admin Modal-------->
<div class="modal fade" id="admin_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title text-center" id="myModalLabel"><i class="fa fa-user"></i> Add Admin</h4>
            </div> <!--modal-header-->

            <div class="modal-body">
                <p class="text-center">Enter your details!</p>

                <form class="form-horizontal" role="form">
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
                        <label class="sr-only" for="active">active</label>
                        <input type="text" class="form control col-md-8 col-md-offset-2" id="active" placeholder="Active">
                    </div> <!--form-group-->
                    <hr>
                    <input type="submit" class="btn btn-success col-md-4 col-md-offset-4" value="Save">
                </form>
                <br>
                <br>
            </div> <!--modal-body-->
        </div> <!--modal content-->
    </div> <!--modal dialog-->
</div> <!--modal-->

<!------Hr Modal-------->
<div class="modal fade" id="hr_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title text-center" id="myModalLabel"><i class="fa fa-user"></i> Add Hr</h4>
            </div> <!--modal-header-->

            <div class="modal-body">
                <p class="text-center">Enter your details!</p>

                <form class="form-horizontal" role="form">
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
                        <label class="sr-only" for="active">active</label>
                        <input type="text" class="form control col-md-8 col-md-offset-2" id="active" placeholder="Active">
                    </div> <!--form-group-->
                    <hr>
                    <input type="submit" class="btn btn-success col-md-4 col-md-offset-4" value="Save">
                    <br>
                    <br>
                </form>
            </div> <!--modal-body-->
        </div> <!--modal content-->
    </div> <!--modal dialog-->
</div> <!--modal-->

<?php include ('includes/footer.php') ?> <!-----include footer file------->
