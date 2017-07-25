<!DOCTYPE html>
<?php
foreach ($find_details as $ves) {
    //document details
    $itmName = $ves->itemName;
    $itmDesc = $ves->itemDescription;
    $item_photo = $ves->itemPhoto;
    $pic_name = $ves->pic_name;
    $itmCat = $ves->itemCategory;
    $itmSubCat= $ves->item_sub_cat;
    $itmOtherCat = $ves->item_other_spec;
    $itmDay = $ves->item_day;
    $itmMonth = $ves->item_month;
    $itmYear = $ves->item_year;
    $founderName = $ves->founderName;
    $founderPhone = $ves->founderNumber;
}
foreach ($find_location as $doc_loc){
    //location details
    $county = $doc_loc->item_county;
    $town = $doc_loc->item_twn;
    $address = $doc_loc->item_address;
    $postal = $doc_loc->item_loc_postal;
    $venue = $doc_loc->item_loc_spec;
}
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Found &CenterDot; PataLost</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/layout.css'); ?>"/>

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
        <div id="suc_f_container">
            <div class="row">
                <div class="col-md-9">
                    <div id="body">
                        <h1>Success Form Submitted</h1>
                        <p class="text-center text-success">Form Details as submitted</p>
                        <div class="form form-horizontal">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="itemCat" class="col-sm-3 control-label">Document Category :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class=" form-disabled form-control" id="itemCat" value="<?php echo $itmCat; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="itemName" class="col-sm-3 control-label">Document Name :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="itemName" value="<?php echo $itmName; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ItemDesc" class="col-sm-3 control-label">Document Description :</label>
                                    <div class="col-sm-6">
                                        <textarea id="itemDesc" name="itemDesc" class="form-control" rows="3"><?php echo $itmDesc;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="founderName" class="col-sm-3 control-label">Founder :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="  form-control" id="founderName" value="<?php echo $founderName; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="founderNumber" class="col-sm-3 control-label">Founder Phone :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="  form-control" id="founderNumber"  value="<?php echo $founderPhone; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="itemPhoto" class="col-sm-3 control-label">Doc Pic Preview: </label>
                                    <div class="col-sm-6">
                                        <img style="width: 450px;height: 250px;" 
                                             src="<?php echo base_url('includes/fileUploads/' . $ves->itemPhoto); ?>" class="img-responsive img-thumbnail"/>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <p class="text-center text-success">Location Found</p>
                        
                        <fieldset disabled>
                                <div class="row form-group">
                                    <label for="loc_county" class="col-sm-3 control-label">County :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class=" form-disabled form-control" id="loc_county" value="<?php echo $county; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="loc_town" class="col-sm-3 control-label">Town :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="loc_town" value="<?php echo $town; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="loc_address" class="col-sm-3 control-label">Address :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="loc_address" value="<?php echo $address ." - ". $postal; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="loc_venue" class="col-sm-3 control-label">Venue :</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="loc_venue" value="<?php echo $venue; ?>">
                                    </div>
                                </div>
                        </fieldset>
                         
                        <div class="formBtn">
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-3">
                                    <a class="btn btn-kk btn-outline-inverse" href="<?php echo base_url(''); ?>">HomePage ...</a>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
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
    </body>
</html>