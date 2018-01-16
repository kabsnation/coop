<?php
require("../Handlers/DocumentHandler.php");
require("../config/config.php");
$doc = new DocumentHandler();
$trackingNumber = $doc->getTrackingNumber();
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

                    <!-- Main content -->
                    <div class="content-wrapper">

                        <!-- Content area -->
                        <div class="content">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="panel panel-white" id="panelEventList">

                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h1 class="panel-title">Documents</h1>
                                            </div>


                                            <div class="heading-elements">
                                                <div class="heading-btn-group">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <table class="table datatable-html" id="tableCoopeartiveAccount" style="font-size: 13px; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>Tracking No.</th>
                                                                <th>Type</th>
                                                                <th>Date Added</th>
                                                                <th class="text-center">Actions</th>
                                                            </tr>
                                                        </thead>
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
                    <!-- /Main content -->

                </div>
                <!-- /Page content -->

            </div>
            <!-- /Page container -->
        </div>

    </form>
</body>
<script>
    var table = $('#tableCoopeartiveAccount').DataTable({
        "order": [[ 0, "desc" ]]
    });
    table.columns.adjust().draw();
    function realTime(){
        setTimeout(realTime,1000);
        var tablee = $('#tableCoopeartiveAccount').DataTable();
        var info = tablee.page.info();
         $.ajax({
            type: "POST",
            url: "checker.php",
            data: "count="+info.recordsTotal,
            success: function(data){
                 if(data == 1){
                    addRow();
                }
            },
            dataType: "json"
        });
    }  
    function addRow(){
         $.ajax({
            type: "POST",
            url: "realtimeFunction.php",
            data: {},
            success: function(data){
                var tablee = $('#tableCoopeartiveAccount').DataTable();
                tablee.clear().draw();
                for (var i = 0; i < data[0].length; i++) {
                    var table = $('#tableCoopeartiveAccount').DataTable();
                    var trackingNumber ="<td>"+data[0][i]+"</td>";
                    var type = "<td>"+data[2][i]+"</td>";
                    var date = "<td>"+data[1][i]+"</td>";
                    var action = "<a href='ViewTracking.php?trackingId="+data[0][i]+"'>View</a>";
                    table.row.add([trackingNumber,type,date, action]).draw(false);
                }
                realTime();
            },
            dataType: "json"
        });
    } 
    realTime();
</script>
</html>