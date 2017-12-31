<?php
//session_start();
//if(!isset($_SESSION['idAccountAdmin'])){
//    echo "<script>window.location='index.php';</script>";
//}
require("../config/config.php");
require("../Handlers/AccountHandler.php");
$handler = new AccountHandler();
$typeDepartment = $handler->getTypeOfDepartment();
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <title>CCDO - Add Department Account</title>

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
    <form id="form1"  class="form-validate-jquery" method="POST" action="addDepartmentAccountFunction.php">
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
                                            <a href="#"><i class="icon-profile"></i><span>Manage Accounts</span></a>
                                            <ul>
                                                <li><a href="CCDO_AddCooperativeAccount.php">Add Cooperative Account</a></li>
                                                <li  class="active"><a href="CCDO_AddDepartmentAccount.php">Add Department Account</a></li>
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
                                    <h4><span class="text-semibold">Manage Department Accounts</span> - Add Department Accounts</h4>
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
                                                <h1 class="panel-title">Add Department Account</h1>
                                            </div>


                                            <div class="heading-elements">
                                                <div class="heading-btn-group">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <fieldset class="content-group">
                                                <legend>
                                                    <h5 class="text-bold"><i class=" icon-person" style="margin-right: 10px"></i>Personal Information</h5>
                                                </legend>
                                                <div class="col-lg-12">

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Last Name:</strong></label>
                                                                <input ID="txtLastname" name="txtLastname" class="form-control" required="required"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>First Name:</strong></label>
                                                                <input ID="txtFirstName" name="txtFirstName" class="form-control" required="required"></input>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Middle Name:</strong></label>
                                                                <input ID="txtMiddleName" name ="txtMiddleName" class="form-control" required="required"></input>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Suffix:</strong></label>
                                                                <select ID="ddlNameSuffix" name="ddlNameSuffix" class="form-control">
                                                                    <option></option>
                                                                    <option Value="Jr.">Jr.</option>
                                                                    <option Value="Sr.">Sr.</option>
                                                                    <option Value="III">III</option>
                                                                    <option Value="IV">IV</option>
                                                                    <option Value="V">V</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </fieldset>

                                            <!-- <fieldset class="content-group">
                                                <legend>
                                                    <h5 class="text-bold"><i class=" icon-phone2" style="margin-right: 10px"></i>Contact Information</h5>
                                                </legend>
                                                <div class="col-lg-12">

                                                    <div class="row">

                                                        <div class=" col-md-12">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Block/Lot/House No./Street:</strong></label>
                                                                <input ID="txtHouseNo" name="txtHouseNo" class="form-control" required="required"></input>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Barangay:</strong></label>
                                                                <select ID="ddlBarangay" name="ddlBarangay" class="form-control" placeholder="Barangay" DataTextField="Barangay" required="required">
                                                                    <option Text="" Value=""></option>
                                                                    <option Text="Balibago" Value="1"></option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>City:</strong></label>
                                                                <select ID="ddlCity" name="ddlCity" class="form-control" placeholder="Barangay" DataTextField="Barangay" required="required">
                                                                    <option Text="" Value=""></option>
                                                                    <option Text="Santa Rosa" Value="1"></option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Email Address:</strong></label>
                                                                <input ID="txtEmail" name ="txtEmail" type="email" class="form-control" required="required"></input>
                                                                <div class="form-control-feedback">
                                                                    <i class=" icon-mention text-muted"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Cellphone Number:</strong></label>
                                                                <input ID="txtCellphoneNumber" name="txtCellphoneNumber" class="form-control" required="required"></input>
                                                                <div class="form-control-feedback">
                                                                    <i class=" icon-phone text-muted"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </fieldset> -->

                                            <fieldset class="content-group">
                                                <legend>
                                                    <h5 class="text-bold"><i class=" icon-user-plus" style="margin-right: 10px"></i>Account Information</h5>
                                                </legend>
                                                <div class="col-lg-12">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Username:</strong></label>
                                                                <input ID="txtUsername" name="txtUsername" class="form-control" MinLength="6" required="required"></input>
                                                                <div class="form-control-feedback">
                                                                    <i class=" icon-user text-muted"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Password:</strong></label>
                                                                <input ID="txtPassword" name="txtPassword" class="form-control" type="password" required="required" MinLength="6"></input>
                                                                <div class="form-control-feedback">
                                                                    <i class=" icon-lock text-muted"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Department:</strong></label>
                                                                <select  ID="ddlDepartment" name="ddlDepartment" required="required" class="form-control">
                                                                   <?php foreach($typeDepartment as $type){?>
                                                                   <option value="<?php echo $type['idDepartment'];?>"><?php echo $type['Department'];?></option>
                                                                   <?php }?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label><span class="text-danger">* </span><strong>Re-enter Password:</strong></label>
                                                                <input ID="txtRepeatPassword" name="txtRepeatPassword" class="form-control" type="password" MinLength="6" required="required" equalTo="#txtPassword"></input>
                                                                <div class="form-control-feedback">
                                                                    <i class="icon-lock text-muted"></i>
                                                                </div>
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
</html>
