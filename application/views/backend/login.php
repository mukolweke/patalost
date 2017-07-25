<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Admin Panel" />
        <meta name="author" content="" />

        <title>Login | PataLost System</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>includes/font-icons/entypo/css/entypo.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
        <link rel="stylesheet" href="<?php echo base_url(); ?>includes/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>includes/css/admin.css"/>
    </head>
    <body style="background-color: #6f5499;">
        <div class="container">
            <div class="login_container">
                <div class="panel panel_header">
                    <div class="panel-body">
                        <a href="<?php echo base_url(); ?>" class="logo"data-toggle="tooltip" data-placement="left" title="Return Home">
                            <img src="<?php echo base_url('includes/img/admin.png'); ?>" height="150" alt="..." />
                        </a>
                        <p class="description">
                        <h2 style="color:#f9f9f9; font-weight:100;">
                            <a href="<?php echo base_url(); ?>" 
                               style="text-decoration: none; color: white;"data-toggle="tooltip" data-placement="left" title="Return Home">PataLost Admin Login</a>
                        </h2>
                        </p>
                    </div>
                    <div class="login_content">
                        <div class="messages">
                            <div class="alert alert-warning <?php echo $message_hd?>">
                                <?php echo $message_error ?>
                            </div>
                        </div>
                        <form method="post" role="form" id="form_login" action="<?php echo base_url('loginAction'); ?>">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="entypo-user"></i>
                                    </div>
                                    <input type="email" class="form-control" name="admin_email" id="admin_email" placeholder="Email" autocomplete="off" data-mask="email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="entypo-key"></i>
                                    </div>
                                    <input type="password" class="form-control" name="admin_password" id="admin_password" placeholder="Password" autocomplete="off" />
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-block btn-login">
                                    Login
                                    <i class="entypo-login"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="login-bottom-links">
                        <a href="<?php echo base_url('forgot_password'); ?>" class="link">
                            Forgot your Password ?
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>