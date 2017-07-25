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
        <title>PataLost &centerdot;Search Lost Documents</title>

        <link rel="stylesheet" href="<?php echo base_url('includes/css/bootstrap.min.css'); ?>"/>
        
		<!--theme css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>includes/css/patalost.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>includes/css/creative.css"/>
        <link href="<?php echo base_url(); ?>includes/css/jquery-ui2.css" rel="stylesheet"/>
		<!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>includes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- Plugin CSS -->
        <link href="<?php echo base_url(); ?>includes/magnific-popup/magnific-popup.css" rel="stylesheet">
        <!---->
		<script type="text/javascript" src="<?php echo base_url(); ?>includes/wpscripts/jsFlashVer.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>includes/wpscripts/jquery.wplightbox.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#inputSearch').autocomplete({
                    source: "<?php echo site_url('HomeController/autosearch_/?'); ?>"
                });
            });
        </script>
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


        <header style="min-height: 50%;">
            <div class="header-content">
                <div class="header-content-inner">
                    <p id="lost_help" class="lost_help">Search for your Lost Item ...</p>
                    <div class="w1"></div><br><br>
                    <div class="form_search">
                    <form class="form form-horizontal" method="get" action="<?php echo site_url('lost_search') ?>">
                        <div class="form-group">
                            <div class="row">
							<div id="form-search">
							<div class="col-md-1"></div>
                                            <div class="col-md-4 form-group">
                                                <select id="itemCategory" name="itemCategory" class="form-control">
                                                    <option value="">Select Category</option>
                                                    <?php echo load_category(); ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input class="form-control search-update" id="inputSearch" name="inputSearch" type="text" placeholder="<?php echo $input_search ?>">
                                            </div>
                                        
                                            <div class="col-md-4 form-group">
                                                <button class="btn search-submit">Search Document <span class="glyphicon glyphicon-search"></span></button>
                                            </div>
                         </div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </header>
<div id="search-content">
<div class="container">
<h4 id="pata-help">Search result available, <strong>{elapsed_time}</strong> seconds.</h4>                    
                <div class="ticketForm">
                    <?php
                    if ($num_search_result > 0) {
                        foreach ($search_result as $pata):
                            $pata_name = $pata->itemName;
                            $pata_description = $pata->itemDescription;
                            $pata_founder = $pata->founderName;
                            $pata_founder_phone = $pata->founderNumber;
                            $pata_photo = $pata->itemPhoto;
                            ?>
                            <?php
                            foreach ($search_category as $cat) {
                                $pata_category = $cat->item_category;
                            }
                            ?>
                            <form class="form" method="get" action="<?php echo base_url('search_found'); ?>">
                                <div class="hidden">
                                    <p><?php echo $pata_category; ?></p>
                                    <p><?php echo $pata_sub_category; ?></p>
                                    <p><?php echo $pata_name; ?></p>
                                    <p><?php echo $pata_description; ?></p>
                                    <p><?php echo $pata_photo; ?></p>
                                    <p><?php echo $pata_founder; ?></p>
                                    <p><?php echo $pata_founder_phone; ?></p>
                                    <button type="submit" class="btn btn-danger btn-block">SELECT ITEM&nbsp; </button>
                                </div>
                                <div class="row search-data">
                                    <div class="col-md-3 col-sm-2 col-xs-6">
                                        <div>
                                            <div class="data">
                                                <img style="width: 100%;height: 150px;" src="<?php echo base_url('file/' . $pata->itemPhoto); ?>">
                                            </div>
                                            
                                        </div>
                                    </div>  
                                    <div class="col-md-4 col-sm-3 col-xs-6">
										<div class="data" id="itmName"><strong>Name :</strong><?php echo $pata_name ?> </div>
                                        <div class="data" id="itmCat"><strong>Category : </strong><?php echo $pata_category ?></div>
                                        <div class="data" id="itmCat"><strong>Sub-Category : </strong></div>                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="data" id="itmDesc"><strong>Description : </strong></div>
                                        <div  id="itmDesc"><?php echo $pata_description ?></div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-6">
                                        <!--<div class="btn-group">
                                            <button type="button" class="btn btn-found">Action</button>
                                            <button type="button" class="btn btn-found_to dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-found" role="menu">
                                                <li><a href="#">More Details</a></li>
                                                <li><a href="" class=""data-toggle="modal" data-target="#myModal">Item Found</a></li>
                                            </ul>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-found">ITEM FOUND</button> -->
										<div class="btn-group">
											<button type="button" id="btn-found_to" class="btn btn-found_to dropdown-toggle" data-toggle="dropdown">
											  Action
											  <span class="caret"></span>
											</button>
											<ul class="dropdown-menu dropdown-found" role="menu">
											  <li><a href="#">More Details</a></li>
											  <li><a href=""data-toggle="modal" data-target="#myClaimModal">Document Found</a></li>
											  
											</ul>
										  </div>
                                    </div>
                                </div>
                                
                            </form>
    <?php endforeach; ?>
                    </div>
    
                    <?php
                } else {
                    ?>
                    <div class="alert alert-info text-center">
                        <p id="pata-help"><strong>Sorry. No results found</strong></p>
                    </div>
                    <?php
                }
                ?>
		<!-- Modal -->
		<div class="modal fade myModal" id="myClaimModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-header">
							<button type="button" class="close pull-right" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id=""></h4>
			</div
			  <div class="modal-body">
				<p id="pata-help">**If the document is your's, you can claim it; **</p>
				<p id="pata-help">**by filling this form correctly please**</p>
				<div class="">
				<form method="post" action="<?php echo base_url('claim_form');?>" class="">
				<div class="claim-form" >
						<div class="row form-group">
							<label class="col-md-3">Full Name</label>
							<input type="text" class="col-md-7" placeholder="" required />
						</div>
						<div class="row form-group">
							<label class="col-md-3">Contact Email</label>
							<input type="email" class="col-md-7" placeholder="" required />
						</div>
						<div class="row form-group">
							<label class="col-md-3">Contact Phone</label>
							<input type="text" class="col-md-7" placeholder="" required />
						</div>
						<p class="help-block text-center">(using this information you will be contacted and verified)</p>
						<div class="form-group" style="margin-top:10px;">
							<input type="submit" value="OK" class="btn btn-claim"/>
						</div>
						</div>
				</form>
				</div>
			  </div>
			  <div class="modal-footer">
				
			  </div>
			</div>
		  </div>
		</div>
	</div>
</div>
		<script type="text/javascript">
		$('#myClaimModal').modal({
  keyboard: false
})
		</script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/jquery-3.0.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/bootstrap.min.js"></script>
    </body>
</html>
