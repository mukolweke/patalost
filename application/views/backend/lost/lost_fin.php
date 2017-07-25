<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lost &CenterDot; Success Finish</title>

        <!--css files -->
        <link rel="stylesheet" href="<?php echo base_url('includes/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('includes/css/layout.css'); ?>"
    </head>
    <body>
        <div class="bannerFound">
            <!--header navbar-->
            <header class="navbar navbar-found" id="top" role="banner">
                <div class="navbar-header">
                    <div class="container">
                        <a href="<?php echo base_url(); ?>" class="navbar-brand">Patalost</a>
                    </div>
                </div>
            </header>
            <!--end of the header-->

            <!-- Page content of course! -->
            <div class="row">
                <p class="lead">Found Documents that you wish to return to the Owner, <br>instead of going to 
                    report to police directly, here's a platform<br> where you can make reports that will be posted to the police for you.</p>
            </div>
        </div>
        <div class="container">
            <div id="body">
                <p class="text-success"><strong>We have sent you an email with all your posted/Saved information,<br>
                        if it's not there check your spam box, we shall use the email for further correspondence.</strong></p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p>This item was lost on the .....date......</p>
                    </div>
                    <div class="panel-body">
                        <h2>Lost Item Details</h2>
                        <p>NAME:</p>
                        <p>CATEGORY:</p>
                        <p>DESCRIPTION:</p>
                        <p>PHOTO:</p>
                        <p>OWNER'S NAME:</p>
                        <p>OWNER'S NUMBER:</p>
                        <h2>Lost Item Location</h2>
                        <p>DATE LOST:</p>
                        <p>COUNTY:</p>
                        <p>CITY/TOWN:</p>
                        <p>ADDRESS:</p>
                        <h2>Additional Info</h2>
                        <p>REWARD:</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>