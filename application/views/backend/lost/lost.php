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
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lost &CenterDot; Form</title>

        <!--css script files -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>includes/css/bootstrap.min.css"/>
        <link  rel="stylesheet" href="<?php echo base_url(); ?>includes/css/calender.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>includes/css/layout.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>includes/css/patalost.css"/>
        <link  rel="stylesheet" href="<?php echo base_url(); ?>includes/css/jquery-ui.css"/>

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
                        <p class="text-success text-center "><strong>*** Please fill the form Correctly as we will contact you for confirmation. ***</strong></p>
                        <p class="text-success text-center"><strong>Must fill all with the <span class="asterick">*</span> sign</strong></p>
                        <form class="form" action="<?php echo base_url('lost_form'); ?>" method="POST">
                            <h1>Lost Form Details</h1>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="itemCategory" class="hidden-xs">Items Category :</label>
                                            <select name="itemCategory" id="itemCategory" class="form-control">
                                                <option value=""></option>
                                                <?php echo load_category(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="item_sub_category" class="hidden-xs">Items Sub-Category :</label>
                                            <select name="item_sub_category" id="item_sub_category" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="item_others" class="hidden-xs">or specify category/sub-category :</label>
                                            <input type="text" name="item_others" id="item_others" class="form-control"/>
                                            <p class="help-block">(i.e. what is the item.)</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="itemName" class="hidden-xs">Name on the Lost Item :</label>
                                            <input type="text" class="form-control" name="itemName" id="inputName" placeholder="" required>
                                            <p class="help-block">NB: Name of the owner named on the item</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="itemDesc" class="hidden-xs">Item's Lost Description :</label>
                                            <textarea name="itemDesc" id="itemDesc" class="form-control" rows="3"></textarea>
                                            <p class="help-block">NB: Don't fully describe the item, give hints</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <label for="itemDesc" class="hidden-xs">Item's Lost Date,Month,Year Lost :</label>
                                        <div id="form-date">
                                            <div class="form-group">
                                                <input type="text"  class="form-control datepicker" name="inputDate" id="inputDate">
                                                <div id="dd"></div>
                                                <p class="help-block">(The Date the Document /item was lost)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="lostName" class="hidden-xs">Item's Owners Full Names :</label>
                                            <input type="text" name="lostName" class="form-control" id="lostName"  placeholder="" required>   
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="lostPhone" class="hidden-xs">Item's Owners Phone :</label>
                                            <input type="text" name="lostPhone" class="form-control" id="lostPhone"  placeholder="" required>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1>Lost Form Location Details</h1>
                            <p class="help-block text-center">(This information helps in narrowing the search criteria by location)</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="item_county" class="hidden-xs">County :</label>
                                            <input name="item_county" type="text" id="item_county" placeholder="Mombasa" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="item_twn" class="hidden-xs">City/Town/Province:</label>
                                            <input type="text" name="item_twn" class="form-control" id="item_twn"  placeholder="Kilifi Town" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="item_address" class="hidden-xs">Address:</label>
                                            <input type="text" name="item_address" class="form-control" id="item_address"  placeholder="1357" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="item_loc_postal" class="hidden-xs">Postal Code Lost:</label>
                                            <input type="text" name="item_loc_postal" class="form-control" id="item_loc_postal"  placeholder="20100" required>   
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="form-group">
                                            <label for="item_loc_spec" class="hidden-xs">Venue :<span class="help-block">e.g. Shopping Center, School</span></label>
                                            <textarea id="item_loc_spec" name="item_loc_spec" class="form-control" rows="3"></textarea>
                                            <p class="help-block">(For security reasons don't fully state where you live unless otherwise)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pull-right ">
                                    <button type="submit" class="btn btn-lost"><strong>Next </strong></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="side-section">
                        <h1>Preview Lost Item</h1>
                        <p>Name</p>
                        <p>Description</p>
                        <p>Photo</p>
                        <p>Founder Name</p>
                    </div>
                </div>
            </div>
        </div>
        <?php include ('../includes/footer.php'); ?>
        <!--<script src="<?php echo base_url('includes/js/bootstrap-datepicker.js'); ?>"></script>
        <script src="<?php echo base_url('includes/js/bootstrap-colorpicker.min.js'); ?>"></script>-->
        <script src="<?php echo base_url(); ?>includes/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>includes/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>includes/js/calendar.js"></script>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function () {
        $('#itemCategory').change(function () {
            var item_id = $(this).val();
            $.ajax({
                url: "<?php echo site_url('get_subs'); ?>",
                method: "POST",
                data: {itemId: item_id},
                dataType: "text",
                success: function (data) {
                    $('#item_sub_category').html(data);
                }
            });
        });
    });

//the date script
    var now = new Date();
    var year = now.getFullYear();
    var month = now.getMonth() + 1;
    var date = now.getDate();


    var data = [
        {
            date: year + '-' + month + '-' + (date - 1),
            value: 'hello'
        },
        {
            date: year + '-' + month + '-' + date,
            value: '上班'
        },
        {
            date: new Date(year, month - 1, date + 1),
            value: '吃饭睡觉打豆豆'
        }
    ];

    

    // picker
    $('#dd').calendar({
        trigger: '#inputDate',
        // offset: [0, 1],
        zIndex: 999,
        data: data,
        onSelected: function (view, date, data) {
            console.log('event: onSelected')
        },
        onClose: function (view, date, data) {
            console.log('event: onClose')
            console.log('view:' + view)
            console.log('date:' + date)
            console.log('data:' + (data || '无'));
        }
    });
</script>