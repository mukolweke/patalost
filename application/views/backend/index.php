<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PataLost &CenterDot; Website</title>
        <!--css links-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>includes/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>includes/css/jquery-ui.css"/>
        <!--theme css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>includes/css/patalost.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>includes/css/creative.css"/>
        
        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>includes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- Plugin CSS -->
        <link href="<?php echo base_url(); ?>includes/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!--        js scripts -->
        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/jquery-3.0.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/jquery-ui.js"></script>
    </head>
    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a id="top" href="<?php echo base_url(); ?>" class="navbar-brand">Patalost</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav hidden-sm hidden-xs">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search Docs<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-nav" role="menu">
                                <li><a href="<?php echo base_url('lost'); ?>">Search Lost</a></li>
                                <li><a href="<?php echo base_url('found'); ?>">Search Found</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Report Docs<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-nav">
                                <li><a href="<?php echo base_url('reportLost'); ?>">Report Lost</a></li>
                                <li><a href="<?php echo base_url('reportFound'); ?>">Report Found</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#about">About</a></li>
                        <li><a class="page-scroll" href="#services">Services</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <li><a href="<?php echo base_url('login'); ?>">Admin</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <h1 id="homeHeading">A Platform For Reporting, Finding Lost Documents.</h1><br>
                    <p>We hope to bridge the gap between police and citizen's enabling fast reporting and recovery of Lost  and Found Documents.</p>

                    <div class="w1"></div><br><br>
                    <div class="formBtn">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-3">
                                <a class="btn btn-primary btn-xl " href="<?php echo base_url('lost'); ?>">Search Lost Item ...</a>

                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-primary btn-xl " href="<?php echo base_url('reportLost'); ?>">Report Lost Item ...</a>
                            </div>
                            <div class="col-md-3">
                                <a class="btn btn-primary btn-xl " href="<?php echo base_url('reportFound'); ?>">Report Found Item ...</a>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="bg-primary" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="section-heading text-center">Recent Lost</h3>
                        <hr class="light" style="">
                        <h3 class="section-heading text-center">Recent Found</h3>
                        </div>
                    <div class="col-md-4">
                        <!-- /.panel -->
                        <div class="chat-panel panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-comments fa-fw"></i> Success Stories
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu slidedown">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-refresh fa-fw"></i> Refresh
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-check-circle fa-fw"></i> Available
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-times fa-fw"></i> Busy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-clock-o fa-fw"></i> Away
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <ul class="chat">
                                    <li class="left clearfix">
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <strong class="primary-font">Jack Sparrow</strong>
                                                <small class="pull-right text-muted">
                                                    <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                                </small>
                                            </div>
                                            <p>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="right clearfix">
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <small class=" text-muted">
                                                    <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                                <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                            </div>
                                            <p>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="left clearfix">
                                        <div class="chat-body clearfix">
                                            <div class="header">
                                                <strong class="primary-font">Jack Sparrow</strong>
                                                <small class="pull-right text-muted">
                                                    <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                            </div>
                                            <p>
                                            </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- /.panel-body -->
                            <div class="panel-footer">
                                <div class="input-group">
                                    <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                    <span class="input-group-btn">
                                        <button class="btn btn-warning btn-sm" id="btn-chat">
                                            Send
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <!-- /.panel-footer -->
                        </div>
                        <!-- /.panel .chat-panel -->
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">PataLost Services</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-search text-primary sr-icons"></i>
                            <h3>Search Lost Documents</h3>
                            <p class="text-muted">One can search for lost documents online, if anyone has manage to recover them.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                            <h3>Report Lost Documents</h3>
                            <p class="text-muted">One can make a report for a lost documents, that will be submitted to the police servers.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                            <h3>Report Found Documents</h3>
                            <p class="text-muted">One can also report Found documents, so that the owner can be notified and search for it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section  class="bg_contact" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Let's Get In Touch!</h2>
                        <hr class="primary">
                        <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2 text-center">
                        <i class="fa fa-phone fa-3x sr-contact"></i>
                        <p>123-456-6789</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                        <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                    </div>
                </div>
            </div>
        </section>


        <?php include 'includes/footer.php'; ?>

        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/jquery2.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/custom.js"></script>
        <script  type="text/javascript" src="<?php echo base_url(); ?>includes/scrollreveal/scrollreveal.min.js"></script>
        <script  type="text/javascript" src="<?php echo base_url(); ?>includes/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/bootstrap.js"></script>
        <!-- Theme JavaScript -->
        <script  type="text/javascript" src="<?php echo base_url(); ?>includes/js/creative.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/paginate.js"></script>
    </body>
</html>