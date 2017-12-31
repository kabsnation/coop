<?php
require("../Handlers/DocumentHandler.php");
require("../config/config.php");
$doc = new DocumentHandler();
$connect = new Connect();
$con = $connect->connectDB();
if(!isset($_GET['trackingId']))
    echo "<script>window.location='COOP_DocumentList.php'</script>";
$trackingId= mysqli_real_escape_string($con,stripcslashes(trim($_GET['trackingId'])));
$trackInfo = $doc->getTrackingInfo($trackingId);
$locations = $doc->getLocationByTrackingNumber($trackingId);
if(empty($trackInfo))
    echo "<script>window.location='COOP_DocumentList.php'</script>";
?>
<html>
<head >    
    <title>CCDO - Document List</title>

    <link rel="icon" href="../assets/images/CCDO Logo.png" />
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
    <link href="assets/css/extras/animate.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/datatables_data_sources.js"></script>
    <!-- /theme JS files -->
</head>
<body>
    <form id="form1" >
        <div>
                 <!-- Main navbar -->
        <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/CCDO Logo.png" alt=""style="background-color:#ffffff"  /></a>

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img alt="">
                        <i class="icon-cog5"></i>
                        <span>Username</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                        <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->

            <!-- Page container -->
            <div class="page-container">

                <!-- Page content -->
                <div class="page-content">

                    <!-- Main sidebar -->
                    <div class="sidebar sidebar-main">
                        <div class="sidebar-content">

                            <!-- User menu -->
                            <div class="sidebar-user">
                                <div class="category-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="assets/images/CCDO Logo.png" class="img-circle img-sm" alt="" style="background-color: White" />
                                        </div>
                                        <div class="media-body">
                                            <span class="media-heading text-semibold">
                                                <label  ID="txtUser" Text="Username"></label></span>
                                            <div class="text-size-mini text-muted">
                                                <i class="icon-pin text-size-small"></i>&nbsp;Santa Rosa, Laguna
								
                                       
                                            </div>
                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list">
                                                <li>
                                                    <a href="#"><i class="icon-cog3"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /user menu -->

                            <!-- Main Navigation -->
                            <div class="sidebar-category sidebar-category-visible">
                            <div class="category-content no-padding">
                                <ul class="navigation navigation-main navigation-accordion">

                                    <li class="active">
                                        <a href="#"><i class="icon-calendar"></i><span> Document</span></a>
                                        <ul>
                                            <li><a href="COOP_AddDocument.php">Add Document</a></li>
                                            <li class="active"><a href="COOP_DocumentList.php">Documents List</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            </div>
                            <!-- /Main Navigation -->

                        </div>
                    </div>
                    <!--/ Main sidebar -->
                    <?php if($trackInfo){foreach($trackInfo as $info){?>
                    <!-- Main content -->
                    <div class="content-wrapper">

                        <!-- Content area -->
                        <div class="content">
                            <div class="row">

                                <div class="col-lg-12">
                                    
                                    <div class="panel panel-flat border-top-lg border-top-info" id="panelEventDetails">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h2><a href="COOP_DocumentList.php"><i class="icon-arrow-left52 position-left"></i></a> <span class="text-semibold">Document Details</span></h2>
                                            </div>


                                            <div class="heading-elements">
                                                <div class="heading-btn-group">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <div class="row">

                                                <div class="col-sm-6 content-group">
                                                    <img src="assets/images/CCDO Logo Transaction.png" class="content-group mt-10" style="height: 65%; width: 80%;">
                                                </div>

                                                <div class="col-sm-6 content-group">
                                                    <div class="invoice-details">
                                                        <h5>Tracking Number: <span class="text-semibold">
                                                            <p class="text-uppercase text-semibold" ID="lblTrackingNumber"><?php echo $info['trackingNumber'];?></p></span></h5>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-5 col-lg-9 content-group">
                                                    <span class="text-muted">Sender's Information:</span>
                                                    <ul class="list-condensed list-unstyled">
                                                        <li>
                                                            <h5><span class="text-right text-semibold"></span></h5>
                                                        </li>
                                                        <li>Administered By: <span class="text-right text-semibold"></span></li>
                                                        <li><span class=" text-semibold">
                                                            <p  ID="lblFullName" style="font-size: 20px;  text-transform: uppercase; "><?php echo $info['name'];?></p></span></li>
                                                        
                                                        <li><span class="">
                                                            <p  ID="lblSenderEmailAddress" style="font-size: 14px; color: darkgrey;"><?php echo $info['Email_Address'];?></p></span></li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-7 col-lg-3 content-group">
                                                    <span class="text-muted">Transaction Details:</span>
                                                    <ul class="list-condensed list-unstyled invoice-payment-details">
                                                        <li>
                                                            <h5><span class="text-right text-semibold"></span></h5>
                                                        </li>
                                                        <li>Date Added: <span class="text-semibold">
                                                            <p  ID="lblDateAdded"><?php echo $info['DateTime']?></p></span></li>
                                                        <li>Document Type: <span class="text-semibold">
                                                            <p  ID="lblDocumentType"><?php echo $info['Document']?></p></span></li>
                                                        <li style="margin-top:20px;">Attached File: <span class="text-right text-semibold">
                                                            <a ID="btnDownloadFile" class="btn-link">Download Attached File</a></span></li>
                                                    </ul>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label class="control-label col-sm-3">Recipients:</label>
                                                    <table class="table datatable-html" id="tableInvited" style="font-size: 13px; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 80%;">Recipient</th>
                                                                <th style="width: 20%;">Response</th>
                                                            </tr>
                                                        </thead>
                                                        <?php if($locations){foreach($locations as $location){?>
                                                        <tbody>
                                                            <td><?php echo $location['name'];?></td>
                                                            <td><?php echo $location['Location_Status'];?></td>
                                                        </tbody>
                                                        <?php }}?>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /Content area -->
                    </div>
                    <?php }}?>
                    <!-- /Main content -->

                </div>
                <!-- /Page content -->

            </div>
            <!-- /Page container -->
        </div>

    </form>
</body>
<script>
    var table = $('#tableInvited').DataTable();
    table.columns.adjust().draw();
   
</script>
</html>