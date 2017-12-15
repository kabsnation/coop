<?php
session_start();
if(!isset($_SESSION['idAccountAdmin'])){
    echo "<script>window.location='index.php';</script>";
}
require("../Handlers/AccountHandler.php");
$handler = new AccountHandler();
$typeCooperative = $handler->getTypeOfCooperative();
$membership = $handler->getMembership();
$area = $handler->getAreaOfOperation();
$composition = $handler->getMembershipComposition();
?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <title>CCDO - Add Cooperative Account</title>

    <link rel="icon" href="assets/images/CCDO Logo.png" />

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="assets/js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="assets/css/sweetalert.css" />

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css" />
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/plugins/forms/validation/validate.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/inputs/touchspin.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/switch.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/notifications/sweet_alert.min.js"></script>
    <script src="assets/jquery.maskedinput.js" type="text/javascript"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/form_validation.js"></script>
    <script src="assets/jquery.maskedinput.js" type="text/javascript"></script>
    <!-- /theme JS files -->
</head>
<body>
    <form id="form1" method="POST" action="addCoopFunction.php"  class="form-validate-jquery">
        <div>
            <!-- Main navbar -->
            <div class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/images/CCDO Logo.png" alt=""style="background-color:#ffffff"  /></a>

                    <ul class="nav navbar-nav visible-xs-block">
                        <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-more"></i></a></li>
                        <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
                    </ul>
                </div>

                <div class="navbar-collapse collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav">
                        <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
                    </ul>

                    <div class="navbar-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a class="sidebar-control sidebar-opposite-fix hidden-xs" data-popup="tooltip" title="View Notification" data-placement="bottom" data-container="body">
                                    <i class="icon-earth" style="padding-right: 10px;"></i>
                                    <label ID="lblNotificationCounter" class="badge badge-primary position-left" Visible="false"></label>
                                </a>
                            </li>

                            <li class="dropdown dropdown-user">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-cog"></i>
                                    <span>
                                        <label  ID="lblName" Text="Username"></label></span>
                                    <i class="caret"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="EditAccount.aspx"><i class="icon-cog5"></i>Account settings</a></li>
                                    <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>

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
                                            <a href="#"><i class="icon-profile"></i><span>Manage Accounts</span></a>
                                            <ul>
                                                <li class="active"><a href="CCDO_AddCooperativeAccount.php">Add Cooperative Account</a></li>
                                                <li><a href="CCDO_AddDepartmentAccount.php">Add Department Account</a></li>
                                                <li><a href="">View Accounts</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- /Main Navigation -->

                        </div>
                    </div>
                    <!--/ Main sidebar -->

                    <!-- Main content -->
                    <div class="content-wrapper">

                        <!-- Page header -->
                        <div class="page-header page-header-default">
                            <div class="page-header-content">
                                <div class="page-title">
                                    <h4><span class="text-semibold">Manage Department Accounts</span> - Add Cooperative Accounts</h4>
                                </div>
                            </div>
                        </div>
                        <!-- /page header -->

                        <!-- Content area -->
                        <div class="content">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="panel panel-white">

                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h1 class="panel-title">Add Cooperative Account</h1>
                                            </div>


                                            <div class="heading-elements">
                                                <div class="heading-btn-group">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <fieldset class="content-group">
                                                <legend><h5 class="text-bold"><i class="icon-user" style="margin-right: 10px"></i>Respondent</h5></legend>
                                                <div class="col-lg-12">

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Last name:</strong></label>
                                                                <input  ID="txtLastName" name="txtLastName" MaxLength="45" autofocus Style="text-transform: uppercase" required="required" class="form-control" onkeyup="Validate(this)"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>First name:</strong></label>
                                                                <input  ID="txtFirstName" name="txtFirstName" MaxLength="45" Style="text-transform: uppercase" required="required" class="form-control" placeholder="Juan" onkeyup="Validate(this)"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Middle name:</strong></label>
                                                                <input  ID="txtMiddleName" name="txtMiddleName" MaxLength="45" Style="text-transform: uppercase" required="required" class="form-control" placeholder="Dela Cruz" onkeyup="Validate(this)"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label><span class="text-danger">* </span><strong>Position:</strong></label>
                                                                <input  ID="txtPosition" name="txtPosition" MaxLength="45" Style="text-transform: uppercase" required="required" class="form-control" onkeyup="Validate(this)"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label><span class="text-danger">* </span><strong>Phone Number:</strong></label>
                                                                <input ID="txtPhone" type="phone" name="txtPhone" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Email Address:</strong></label>
                                                                <input  ID="txtEmail" name="txtEmail" required="required" class="form-control" type="email"></input>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </fieldset>

                                            <fieldset class="content-group">
                                                <legend><h5 class="text-bold"><i class="icon-file-text3" style="margin-right: 10px"></i>Cooperative Profile</h5></legend>
                                                <div class="col-lg-12">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Business/ Cooperative Name:</strong></label>
                                                                <input  ID="txtCoopName" name="txtCoopName" MaxLength="100" Style="text-transform: uppercase" required="required" class="form-control" onkeyup="Validate(this)" onkeypress="changeCoopLbl(this.value)"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Address:</strong></label>
                                                                <input  ID="txtAddress" name="txtAddress" MaxLength="100" Style="text-transform: uppercase" required="required" class="form-control" onkeyup="Validate(this)"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Telephone/ Fax Number:</strong></label>
                                                                <input  ID="txtTelephone" name="txtTelephone" type="number" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Email Address:</strong></label>
                                                                <input  ID="txtEmail1" name="txtEmail1" type="email" class="form-control" required="required"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>CDA Registration Number:</strong></label>
                                                                <input  ID="txtCDA" name="txtCDA" required="required" class="form-control" type="number"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Date of Registration:</strong></label>
                                                                <input  ID="txtDateOfRegistration" name="txtDateOfRegistration" class="form-control" required="required" placeholder="mm/dd/yyyy"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>CIN:</strong></label>
                                                                <input  ID="txtCIN" name="txtCIN" class="form-control" required="required" type="number"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Type of Cooperative:</strong></label>
                                                                <select  ID="ddlTypeOfCooperative" name="ddlTypeOfCooperative" required="required" class="form-control">
                                                                   <?php foreach($typeCooperative as $type){?>
                                                                   <option value="<?php echo $type['idType'];?>"><?php echo $type['Cooperative_Type'];?></option>
                                                                   <?php }?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Common Bond of Membership:</strong></label>
                                                                <select  ID="ddlCommonBondOfMembership" 
                                                                name="ddlCommonBondOfMembership" required="required" class="form-control">
                                                                    <?php foreach($membership as $member){?>
                                                                   <option value="<?php echo $member['idCommonBond_of_Membership'];?>"><?php echo $member['Membership'];?></option>
                                                                   <?php }?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Affiliation:</strong></label>
                                                                <input  ID="txtAffiliation" name="txtAffiliation" class="form-control" required="required" onkeyup="Validate(this)"></input>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Area of Operation:</strong></label>
                                                                <select  ID="ddlAreaOfOperation" name="ddlAreaOfOperation" required="required" class="form-control">
                                                                	<?php foreach($area as $operation){?>
                                                                   <option value="<?php echo $operation['idarea_of_operation'];?>"><?php echo $operation['area'];?></option>
                                                                   <?php }?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <fieldset class="content-group">
                                                <legend><h5 class="text-bold"><i class=" icon-tree6" style="margin-right: 10px"></i>Organizational Aspect (Current Officers)</h5></legend>
                                                <div class="col-lg-12">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Number of Board of Directors:</strong></label>
                                                                <input  ID="txtNumberOfBoardOfDirectors" 
                                                                name="txtNumberOfBoardOfDirectors" required="required" class="form-control" type="number"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Number of Employees:</strong></label>
                                                                <input  ID="txtNumberOfEmployees" name="txtNumberOfEmployees" required="required" class="form-control" type="number"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>BOD Chairman:</strong></label>
                                                                <input  ID="txtBODChairman" name="txtBODChairman" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Manager:</strong></label>
                                                                <input  ID="txtManager" name="txtManager" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Educ.Com/ BOD Vice Chair:</strong></label>
                                                                <input  ID="txtBODViceChair" name="txtBODViceChair" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Secretary:</strong></label>
                                                                <input  ID="txtSecretary" name="txtSecretary" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Audit Committee Chairman:</strong></label>
                                                                <input  ID="txtAuditCommitteeChair" 
                                                                name="txtAuditCommitteeChair" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Treasurer:</strong></label>
                                                                <input  ID="txtTreasurer" name="txtTreasurer" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Election Committee Chairman:</strong></label>
                                                                <input  ID="txtElectionCommitteeChairman" name="txtElectionCommitteeChairman" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Credit Committee Chairman:</strong></label>
                                                                <input  ID="txtCreditCommitteeChairman" 
                                                                name="txtCreditCommitteeChairman" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Med. & Concilliation:</strong></label>
                                                                <input  ID="txtMedAndConcilliation" 
                                                                name="txtMedAndConcilliation" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Other Committees:</strong></label>
                                                                <input  ID="txtOtherCommittees" name="txtOtherCommittees" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Date of Regular General Assembly Meeting:</strong></label>
                                                                <input  ID="txtDateofRegularGeneralAssemblyMeeting" 
                                                                name="txtDateofRegularGeneralAssemblyMeeting" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Date of Monthly Board Meeting:</strong></label>
                                                                <input  ID="txtDateofMonthlyBoardMeeting"
                                                                 name="txtDateofMonthlyBoardMeeting" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Date of Committee Meeting:</strong></label>
                                                                <input  ID="txtDateofCommitteeMeeting" 
                                                                name="txtDateofCommitteeMeeting" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </fieldset>

                                            <fieldset class="content-group">
                                                <legend><h5 class="text-bold"><i class=" icon-stats-bars2" style="margin-right: 10px"></i>Business/ Financial Operation:</h5></legend>
                                                <div class="col-lg-12">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Business Enagaged In:</strong></label>
                                                                <input  ID="txtBusinessEnagagedIn" 
                                                                name="txtBusinessEnagagedIn" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Other Business:</strong></label>
                                                                <input  ID="txtOtherBusiness" name="txtOtherBusiness" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Services/Benefits Offered to Members:</strong></label>
                                                                <input  ID="txtServicesBenefitsOfferedtoMembers" 
                                                                name="txtServicesBenefitsOfferedtoMembers" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Total Cooperative Asset:</strong></label>
                                                                <input  ID="txtTotalCooperativeAsset" 
                                                                name="txtTotalCooperativeAsset" type="number" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Total Paid-up Capital:</strong></label>
                                                                <input  ID="txtTotalPaidUpCapital" 
                                                                name="txtTotalPaidUpCapital" type="number" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Beginning: </strong></label>
                                                                <input  ID="txtBeginning" name="txtBeginning" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Beginning:</strong></label>
                                                                <input  ID="txtBeginning1" name="txtBeginning1" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>To Date: </strong></label>
                                                                <input  ID="txtToDate" name="txtToDate" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>To Date:</strong></label>
                                                                <input  ID="txtToDate1" name="txtToDate1" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><strong>Assisting Financial Institution, if any:</strong></label>
                                                                <input  ID="txtAssistingFinancialInstitution" 
                                                                name="txtAssistingFinancialInstitution" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><strong>Total Volume of Sales based in Latest Financial Statement (with Members/Non-Members):</strong></label>
                                                                <input  ID="txtTotalVolumeOfSales" 
                                                                name="txtTotalVolumeOfSales" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </fieldset>

                                            <fieldset class="content-group">
                                                <legend><h5 class="text-bold"><i class=" icon-clipboard5" style="margin-right: 10px"></i>Regulatory Requirements</h5></legend>
                                                <div class="col-lg-12">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Updated BIR Registration Number:</strong></label>
                                                                <input  ID="txtUpdatedBIRNumber" name="txtUpdatedBIRNumber" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Tax Identification Number (TIN):</strong></label>
                                                                <input  ID="txtTIN" name="txtTIN" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Business Permit Number:</strong></label>
                                                                <input  ID="txtBusinessPermitNumber" 
                                                                name="txtBusinessPermitNumber" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>COC Number (CDA):</strong></label>
                                                                <input  ID="txtCOCNumber" name="txtCOCNumber" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Certificate of Tax Exemption Number:</strong></label>
                                                                <input  ID="txtCertificateOfTaxExemptionNumber" 
                                                                name="txtCertificateOfTaxExemptionNumber" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Date of Issue (COC):</strong></label>
                                                                <input  ID="txtDateOfIssueCOC" name="txtDateOfIssueCOC" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </fieldset>

                                            <fieldset class="content-group">
                                                <legend><h5 class="text-bold"><i class=" icon-stack-text" style="margin-right: 10px"></i>Membership Profile</h5></legend>
                                                <div class="col-lg-12">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Total Number of Membership:</strong></label>
                                                                <input  ID="txtTotalNumberOfMembership" 
                                                                name="txtTotalNumberOfMembership" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Male:</strong></label>
                                                                <input  ID="txtMale" name="txtMale" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Female:</strong></label>
                                                                <input  ID="txtFemale" name="txtFemale" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Number of Regular Members:</strong></label>
                                                                <input  ID="txtNumberOfRegularMembers" 
                                                                name="txtNumberOfRegularMembers" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Number of Associate Members:</strong></label>
                                                                <input  ID="txtNumberOfAssociateMembers" 
                                                                name="txtNumberOfAssociateMembers" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Membership Composition:</strong></label>
                                                                <select  ID="ddlMembershipComposition" 
                                                                name="ddlMembershipComposition" required="required" class="form-control">
                                                                    <?php foreach($composition as $comp){?>
                                                                    <option value="<?php echo $comp['idMembership_composition'];?>"><?php echo $comp['Composition'];?></option>
                                                                    <?php }?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Basic Trainings Attended by Members:</strong></label>
                                                                <input  ID="txtBasicTrainingsAttendedByMembers" 
                                                                name="txtBasicTrainingsAttendedByMembers" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Basic Trainings Attended by Officers:</strong></label>
                                                                <input  ID="txtBasicTrainingsAttendedByOfficers" 
                                                                name="txtBasicTrainingsAttendedByOfficers" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Basic Trainings Attended by Management Staff:</strong></label>
                                                                <input  ID="txtBasicTrainingsAttendedByManagementStaff" 
                                                                name= "txtBasicTrainingsAttendedByManagementStaff" required="required" class="form-control"></input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <fieldset class="content-group">
                                                <legend><h5 class="text-bold"><i class=" icon-user-lock" style="margin-right: 10px"></i>Account Profile</h5></legend>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Username:</strong></label>
                                                                <input  ID="txtUsername" name="txtUsername" required="required" class="form-control" MaxLength="40" ></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Password:</strong></label>
                                                                <input  ID="txtPassword" name="txtPassword" type="password" required="required" class="form-control" MinLength="6" MaxLength="40"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Re-enter Password:</strong></label>
                                                                <input  ID="txtPassword1" type="password" required="required" class="form-control" MinLength="6" MaxLength="40" equalsTo="txtPassword"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br />
                                                    <br />

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="text-center">
                                                                <p style="font-size: small">
                                                                    In behalf of
                                                                    <asp:Label  class="label-default bg-info" ID="lblCoopName" Text="Coop Name" name="lblCoopName" Style="text-transform: uppercase" ></asp:Label>
                                                                    Cooperative, I hereby certify that the above information are correct and true with the best of my knowledge and belief.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </fieldset>

                                            <div class="text-right">
                                                <button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
                                                <input type="submit" ID="btnSubmit" class="btn btn-primary" Text="Submit" />
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /Content area -->
                    </div>
                    <!-- /Main content -->

                </div>
                <!-- /Page content -->

            </div>
            <!-- /Page container -->
        </div>
    </form>
</body>

        <script type="text/javascript">
            jQuery(function ($) {
                $("#txtPhone").mask("(+63) 999-999-9999");
            });

            jQuery(function ($) {
                $("#txtDateOfRegistration").mask("99/99/9999", { placeholder: "mm/dd/yyyy" });
            });

            jQuery(function ($) {
                $("#txtBeginning").mask("99/99/9999", { placeholder: "mm/dd/yyyy" });
            });

            jQuery(function ($) {
                $("#txtBeginning1").mask("99/99/9999", { placeholder: "mm/dd/yyyy" });
            });

            jQuery(function ($) {
                $("#txtToDate").mask("99/99/9999", { placeholder: "mm/dd/yyyy" });
            });

            jQuery(function ($) {
                $("#txtToDate1").mask("99/99/9999", { placeholder: "mm/dd/yyyy" });
            });

            jQuery(function ($) {
                $("#txtDateofCommitteeMeeting").mask("99/99/9999", { placeholder: "mm/dd/yyyy" });
            })

            jQuery(function ($) {
                $("#txtDateofRegularGeneralAssemblyMeeting").mask("99/99/9999", { placeholder: "mm/dd/yyyy" });
            })

            jQuery(function ($) {
                $("#txtDateofMonthlyBoardMeeting").mask("99/99/9999", { placeholder: "mm/dd/yyyy" });
            })

            function Validate(txt) {
                txt.value = txt.value.replace(/[^A-Za-zñÑ ]+/, '');
            }
            function ValidateAddress(txt) {
                txt.value = txt.value.replace(/[^A-Za-z0-9,. ]+/, '');
            }
            function ValidateNumber(txt) {
                txt.value = txt.value.replace(/[^0-9 ]+/, '');
            }
            function ValidatePassword(txt) {
                txt.value = txt.value.replace(/[^A-Za-z0-9 ]+/, '');
            }
            function changeCoopLbl(txt){
                $('#lblCoopName').html(txt);
            }
        </script>
        
</html>