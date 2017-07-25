<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact &CenterDot; Page</title>

        <link rel="stylesheet" href="<?php echo base_url('includes/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('includes/css/patalost.css'); ?>"/>
    </head>
    <body>
        <main class="banner-search" id="content" role="main">
            <!-- Docs master nav -->
            <header class="navbar navbar-ves" id="top" role="banner">
                <div class="navbar-header">
                    <div class="container">
                        <a href="<?php echo base_url(); ?>" class="navbar-brand">Patalost</a>
                    </div>
                </div>
            </header>
            <!-- Page content of course! -->
            <div class="container">
                <div class="contact_banner">
                    <h2>{Contact Us}</h2>
                    <p>Report Complains, Ideas, Thoughts that may help improve on our service delivery.</p>
                </div>
            </div>
        </main>
        <!-- Results pane -->
        <div class="contact_content">
            <div class="row">
                <div class="col-md-4">
                    <p>omage</p>
                </div>
                <div class="col-md-8">
                    <div id="container">
                        <div class="container">
                            <form id="contact_form" class="form form-horizontal">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Names :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputName" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email :</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="name@email.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputText" class="col-sm-2 control-label">Content :</label>
                                    <div class="col-sm-6">
                                        <textarea rows="3" class="form-control" id="inputText"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer text-center">
            <div class="container">
                <ul class="footer-links muted">
                    <li>&middot;</li>
                    <li>CopyRight 2016 Nakuru County</li>
                    <li>&middot;</li>
                    <li><a href="#">Back to Top</a></li>
                    <li>&middot;</li>
                    <li><a href="#">Success Stories</a></li>
                    <li>&middot;</li>
                    <li><a href="#">About</a></li>
                    <li>&middot;</li>
                    <li><a href="#">FAQ's</a></li>
                    <li>&middot;</li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li>&middot;</li>
                    <li><a href="#">Contact</a></li>
                    <li>&middot;</li>
                    <li>Designed by KukuSoft Inc</li>
                    <li>&middot;</li>
                </ul>
            </div>
        </div>
    </body>
</html>