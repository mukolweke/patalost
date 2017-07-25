<?php
defined('BASEPATH') OR exit('No direct script access allowed');

foreach ($lost_details as $ves) {
    $itmName = $ves->itemName;
    $itmDesc = $ves->itemDescription;
    $itmCat = $ves->itemCategory;
    $lostName = $ves->lostName;
    $lostPhone = $ves->lostPhone;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lost &CenterDot; Success Submit</title>

        <!--css files -->
        <link rel="stylesheet" href="<?php echo base_url('includes/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('includes/css/layout.css'); ?>"/>


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
                <div class="text-center">
                    <h4 class="text-capitalize">Choose a package you want to use to submit your Content</h4>
                    <p class="help-block" style="color: #6f5499;">Please note it's not a must to fill these fields, just click finish submit</p>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form" method="post" action="<?php echo base_url('lost_fin'); ?>" enctype="">
                            <div class="row">
                                <div class="col-md-3 text-center"><span style="margin-top: 20px;font-size: 120px;" class="glyphicon glyphicon-usd"></span></div>
                                <div class="col-md-7">
                                    <h4>Reward to be Offered</h4>
                                    <p>Please Specify an amount in <span class="text-info">Ksh</span> to <br> be rewarded to the finder of the item.<br>
                                        This is a great motivator for the person <br>who has found it to be willing to return the item.</p>
                                    Ksh: <input class="form-group" type="text" id="reward" name="reward" />
                                    <p class="help-block">(Enter numbers only)</p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <hr class="hr-maroon"/>
                            <div class="row">
                                <div class="col-md-3 text-center"><span style="margin-top: 20px;font-size: 120px;" class="glyphicon glyphicon-user"></span></div>
                                <div class="col-md-7">
                                    <h4>Add additional photos</h4>
                                    <p>You can add additional photos to <br> help in the matching of the item well.<br>
                                        This is increases the chance of the item <br>lost to be recovered easily in the database.<br>
                                    </p><p class="help-block">Max 5 photos</p>
                                    <input class="form-group" type="file" id="item_photo" name="item_photo" />
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <hr class="hr-maroon"/>
                            <div class="row">
                                <div class="col-md-3 text-center"><span style="margin-top: 20px;font-size: 120px;" class="glyphicon glyphicon-comment"></span></div>
                                <div class="col-md-7">
                                    <h4>Email / Phone Notification</h4>
                                    <p>Select a means of Notification when the <br>Lost item has been recovered successfully by <br>someone, and its reported found/located.</p>
                                    <p>Provide an email address, phone used is the one on record</p>

                                    <input class="form-group" type="checkbox" name="chkbox" id="chkbox" onclick="showHide();">
                                    <label for="chkbox">Click to enter email/ phone number for notification</label>
                                    <br>
                                    <label id="test" class="hidden">Hello</label>
                                    <label class="hidden">Email Notification</label><input class="form-group hidden" type="email" id="user_notif_email" name="user_notif_email" placeholder="example@email.com"/>
                                    <br>
                                    <!--  use angular kesho-->
                                    <label class="hidden">Phone Notification</label><input class="form-group hidden" type="text" id="user_notif_number" name="user_notif_number" placeholder="+254..."/>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <input class="hidden" value="<?php echo $itmName ?>"/>
                            <input class="hidden" value="<?php echo $itmDesc ?>"/>
                            <input class="hidden" value="<?php echo $itmCat ?>"/>
                            <input class="hidden" value="<?php echo $lostName ?>"/>
                            <input class="hidden" value="<?php echo $lostPhone ?>"/>
                            <div class="row">
                                <div class="col-md-6" style="margin-top: 50px;margin-left: 300px;" >
                                    <button type="submit" class="btn form-submit form-lost"><strong>Finish Submit </strong></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url('includes/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('includes/js/jquery.js'); ?>"></script>
    </body>
</html>