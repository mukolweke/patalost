<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function load_category() {
    $connect = mysqli_connect('localhost', 'root', '', 'patalost');
    $output = '';
    $sql = " SELECT * FROM itemcategory ORDER BY item_category";
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<option value="' . $row['item_id'] . '">' . $row['item_category'] . '</option>';
    }
    return $output;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Found &CenterDot; PataLost</title>
        <!--css scripts file-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/bootstrap.min.css'); ?>"/>
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/neon.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/neon2.css'); ?>"/>
        <link  rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>includes/css/jquery-ui.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/layout.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/patalost.css'); ?>"/>
        <!--js scripts file-->
        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/jquery-3.0.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/fileupload.js"></script>
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
            <div class="row">
                <div class="col-md-9">
                    <div id="body">
                        <h1>Found Document/ Item Details</h1>
                        <p class="text-success text-center "><strong>*** Please fill the form Correctly as we will contact you for confirmation. ***</strong></p>
                        <form class="form" action="<?php echo site_url('found_form'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="itemCategory" class="hidden-xs">Items Category :</label>
                                            <select id="itemCategory" name="itemCategory" class="form-control">
                                                <option value=""></option>
                                                <?php echo load_category(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="item_sub_category" class="hidden-xs">Items Sub-Category :</label>
                                            <select id="item_sub_category" name="item_sub_category" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="item_others" class="hidden-xs">or specify category/sub-category :</label>
                                            <input type="text" name="item_others" id="item_others" class="form-control"/>
                                            <p class="help-block">(i.e. what is the item, specify other docs.)</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="itemName" class="hidden-xs">Full Name on the Item/Document:</label>
                                            <input type="text" class="form-control" name="itemName" id="inputName" placeholder="e.g. John Smith" required> 
                                            <p class="help-block">(The name on the Document /item of the owner)</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="date" class="hidden-xs control-label">Date Item was Found :</label>
                                            <input type="date" class="form-control datepicker" name="inputDate" value="">
                                            <p class="help-block">(The Date the Document /item was found)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="itemDesc" class="hidden-xs">Input Description :</label>
                                            <textarea id="itemDesc" name="itemDesc" class="form-control" rows="3"></textarea>
                                            <p class="help-block">(NB: Don't fully describe the item, give hints)</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="itemPhoto" class="hidden-xs">Item Photo :</label>
                                            <div>
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 250px; height: 100px;" data-trigger="fileinput">
                                                        <img src="http://placehold.it/200x200" alt="...">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 200px"></div>
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
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <label for="founderName" class="hidden-xs">Founder's Full Names :</label>
                                        <input type="text" name="founderName" class="form-control" id="founderName"  placeholder="" required>   
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <label for="founderPhone" class="hidden-xs">Founder's Phone :</label>
                                        <input type="text" name="founderPhone" class="form-control" id="founderPhone"  placeholder="" required>   
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <p class="help-block">For safety from con-artist, please give little description of the 
                                    item found and leave out specific information that can <br>be used in identifying the real owner
                                    things like dates of graduation on a cert, bank cards numbers, work id's numbers etc.<br>
                                    If unsure about the document, suspicious in any way take it to nearest police station and report found there. </p>

                            </div>
                    </div>
                    <h1>Location Details where Document Found</h1>
                    <p class="help-block text-center">(This information helps in narrowing the search criteria by location)</p>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <label for="item_county" class="hidden-xs">County :</label>
                                    <input type="text" name="item_county" class="form-control" id="item_county"  placeholder="Nakuru" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="item_twn" class="hidden-xs">City/Town/:</label>
                                    <input type="text" name="item_twn" class="form-control" id="item_twn"  placeholder="Nakuru Town" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="item_address" class="hidden-xs">Address:</label>
                                    <input type="text" name="item_address" class="form-control" id="item_address"  placeholder="1357777" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label for="item_loc_postal" class="hidden-xs">Postal Code Lost:</label>
                                    <input type="text" name="item_loc_postal" class="form-control" id="item_loc_postal"  placeholder="22109" required>   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <label for="item_loc_spec" class="hidden-xs">Specify Location/ Venue:</label>
                                    <textarea id="item_loc_spec" name="item_loc_spec" class="form-control" rows="3"></textarea>
                                    <p class="help-block">(For security reasons don't fully state where you live unless otherwise)</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6" style="margin-left: 350px;">
                                <button type="submit" class="btn btn-block btn-found"><strong>Next Form</strong></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <div class="side-section">
                    <h1>Preview Found Item</h1>
                    <p>Name</p>
                    <p>Description</p>
                    <p>Photo</p>
                    <p>Founder Name</p>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('../includes/footer.php'); ?>
    <script src="<?php echo base_url('includes/js/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('includes/js/bootstrap-colorpicker.min.js'); ?>"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        $('#itemCategory').change(function () {
            var item_id = $(this).val();
            $.ajax({
                url: "<?php echo site_url('fetch_sub'); ?>",
                method: "POST",
                data: {itemId: item_id},
                dataType: "text",
                success: function (data) {
                    $('#item_sub_category').html(data);
                }
            });
        });
    });

</script>