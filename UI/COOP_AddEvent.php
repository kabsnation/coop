<?php
require("../Handlers/AccountHandler.php");
$handler = new AccountHandler();
$cooperativeProfile = $handler->getCoopAccounts();
$departmentProfile = $handler-> getDepartmentAccounts();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>CCDO - Add Event</title>

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
    <form id="form1"  class="form-validate-jquery">
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
                                            <img src="assets/images/CCDO Logo.png" class="img-circle img-sm" alt="" style="background-color:#ffffff"  />
                                        </div>
                                        <div class="media-body">
                                            <span class="media-heading text-semibold">
                                                <asp:Label  ID="txtUser" Text="Username"></asp:Label></span>
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
                                            <a href="#"><i class="icon-calendar"></i><span> Events</span></a>
                                            <ul>
                                                <li class="active"><a href="COOP_AddEvent.php">Add Events</a></li>
                                                <li><a href="COOP_EventList.php">Events List</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- /Main Navigation -->

                        </div>
                    </div>
                    <!--/ Main sidebar -->

                    <!-- Main Content -->
                    <div class="content-wrapper">
                        <div class="content">

                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h3 class="panel-title"><strong>Add Event</strong></h3>
                                    </div>

                                    <div class="heading-elements">
                                        <div class="heading-btn-group">
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">

                                    <fieldset class="content-group">
                                        <div class="col-lg-12">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><span class="text-danger">* </span><strong>Event Name:</strong></label>
                                                        <textarea  ID="txtEventName" rows="4" cols="5" class="form-control" type="MultiLine" required="required"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><span class="text-danger">* </span><strong>Event Location:</strong></label>
                                                        <textarea  ID="txtEventLocation" rows="4" cols="5" class="form-control" type="MultiLine" required="required"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><span class="text-danger"></span><strong>Other Event Details:</strong></label>
                                                        <textarea rows="5" cols="5" ID="txtEventDetails" class="form-control" type="MultiLine" required="required"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><span class="text-danger">* </span><strong>Start Date and Time:</strong></label>
                                                        <input  ID="txtStartDateTime" class="form-control" type="DateTimeLocal" required="required"></input>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><strong>Upload File:</strong></label>
                                                        <input  class="file-input-extensions" AllowMultiple="true" multiple="multiple" type="file" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label><span class="text-danger">* </span><strong>Choose Recipients:</strong></label>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label><span class="text-danger">* </span><strong>Cooperatives:</strong></label>
                                                        <table class="table datatable-html" id="coopTable" style="font-size: 13px; width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 5%;"><i class="icon-check"></i></th>
                                                                    <th style="width: 30%;">Cooperative Name</th>
                                                                    <th style="width: 30%;">Chairman</th>
                                                                    <th style="width: 20%;">Email</th>
                                                                    <th style="width: 20%;">Telephone Number</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php if($cooperativeProfile){
                                                                    foreach($cooperativeProfile as $coop){?>
                                                                <tr>
                                                                    <td><input type="checkbox" name="coopCb[]" value="<?php echo $coop['idAccounts'];?>"></td>
                                                                    <td><?php echo $coop['Cooperative_Name'];?></td>
                                                                     <td><?php echo $coop['BOD_Chairman'];?></td>
                                                                     <td><?php echo $coop['Email_Address'];?></td>
                                                                     <td><?php echo $coop['Telephone_Number'];?></td>
                                                                </tr>
                                                                <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label><span class="text-danger">* </span><strong>Department:</strong></label>
                                                        <table class="table datatable-html" id="departmentTable" style="font-size: 13px; width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 5%;"><i class="icon-check"></i></th>
                                                                    <th style="width: 30%;">Employee Name</th>
                                                                    <th style="width: 20%;">Email</th>
                                                                    <th style="width: 20%;">Cellphone Number</th>
                                                                    <th style="width: 20%;">Department</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                  <?php if($departmentProfile){
                                                                    foreach($departmentProfile as $dept){?>
                                                                <tr>
                                                                    <td><input type="checkbox" name="coopCb[]" value="<?php echo $dept['idAccounts'];?>"></td>
                                                                    <td><?php echo $dept['First_Name']." ".$dept['Middle_Name']." ".$dept['Last_Name'];?></td>
                                                                     <td><?php echo $dept['Email_Address'];?></td>
                                                                     <td><?php echo $dept['Cellphone_number'];?></td>
                                                                     <td><?php echo $dept['Department'];?></td>
                                                                </tr>
                                                                <?php }}?>
                                                            </tbody> 
                                                        </table>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>

                                        </div>
                                    </fieldset>

                                </div>

                                <div class="panel-footer">
                                    <div class="heading-elements">
                                        <div class="text-right">
                                            <input type="submit" ID="btnSend" text="Submit" class="btn bg-info" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Main Content -->

                </div>
                <!-- /Page content -->

            </div>
            <!-- /Page container -->
        </div>
    </form>
</body>
</html>
<script type="text/javascript">
     $('#coopTable').dataTable( {
              "columnDefs": [ {
                "targets": 0,
                "orderable": false
                } ]
            } );
    $('#departmentTable').dataTable( {
              "columnDefs": [ {
                "targets": 0,
                "orderable": false
                } ]
            } );
</script>