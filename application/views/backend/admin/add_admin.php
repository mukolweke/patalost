<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Patalost &CenterDot; Admin &CenterDot; DashBoard</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/neon.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/neon2.css'); ?>"/>
        <link href="<?php echo base_url(); ?>includes/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>includes/dash/sb-admin-2.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>includes/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>includes/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>includes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/jquery-3.0.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/fileupload.js"></script>
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default bg-patalost navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('dash'); ?>">Patalost Admin Dash</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown" id="pata-link">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Admin <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user" id="pata-dropdown">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="<?php echo base_url('dash');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-users fa-fw"></i> Manage Admin<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url('add_admin');?>"><i class="fa fa-user fa-fw"></i> Add Admin</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('list_admin');?>"><i class="fa fa-list fa-fw"></i> List Admin's</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('monitor_admin');?>"><i class="fa fa-tasks fa-fw"></i> Admin Progress</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-database fa-fw"></i> Manage Database<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url('found_db');?>"><i class="fa fa-database fa-fw"></i> Found Database</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('lost_db');?>"><i class="fa fa-database fa-fw"></i> Lost Database</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('others_db');?>"><i class="fa fa-database fa-fw"></i> Other's</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="<?php echo base_url('reports');?>"><i class="fa fa-table fa-fw"></i> Reports</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('analytics');?>"><i class="fa fa-sitemap fa-fw"></i> Analytics</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center"><i class="entypo-plus-circled"></i> PataLost Add Admin</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <form class="form" role="form">
                    <p class=""><strong>Personal Details</strong></p>
                    <div class="row">
                        <div class="form-group">
                            <label for="itemCategory" class="hidden-xs col-md-2">Full Name :</label>
                            <div class="col-md-3">
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required >
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="sur_name" id="sur_name" class="form-control" placeholder="SurName" required="">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name"required>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="form-group">
                            <label for="itemCategory" class="hidden-xs col-md-2">Contacts :</label>
                            <div class="col-md-3">
                                <input type="email" name="last_name" id="last_name" class="form-control" placeholder="Email"/>
                            </div>
                            <div class="col-md-3">
                                <input type="tel" name="sur_name" id="sur_name" class="form-control" placeholder="Phone"/>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="itemCategory" class="hidden-xs col-md-3">Id Number :</label>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-8">
                                        <input type="tel" name="sur_name" id="sur_name" class="form-control " placeholder="ID NO."/>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <label for="itemCategory" class="hidden-xs col-md-3">Address :</label>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-8">
                                        <input type="text" name="sur_name" id="sur_name" class="form-control" placeholder="Address"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" style="margin-left: 20px;">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="itemPhoto" class="hidden-xs">Admin's Photo :</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 100px;" data-trigger="fileinput">
                                                        <img src="http://placehold.it/200x200" alt="...">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px"></div>
                                                    <div>
                                                        <span class="btn btn-white btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="userfile" accept="image/*">
                                                        </span>
                                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        <p class="help-block">(Please Enter Only Photos e.g. jpeg, jpg, png files)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p class=""><strong>Work Details</strong></p>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-9">

                                <div class="row">
                                    <label for="itemCategory" class="hidden-xs col-md-3">Work Id :</label>
                                    <div class="col-md-8">
                                        <input type="tel" name="sur_name" id="sur_name" class="form-control " placeholder="ID NO."/>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row">
                                    <label for="itemCategory" class="hidden-xs col-md-3">Work Section :</label>
                                    <div class="col-md-8">
                                        <input type="tel" name="sur_name" id="sur_name" class="form-control " placeholder="ID NO."/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-info btn-block">ADD ADMIN</button>

                </form>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>includes/dash/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>includes/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>includes/dash/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>includes/dash/sb-admin-2.js"></script>

</body>

</html>
