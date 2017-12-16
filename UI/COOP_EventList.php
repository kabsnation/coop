<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">    
    <title>CCDO - Event List</title>

    <link rel="icon" href="../assets/images/CCDO Logo.png" />

    <!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css"/>
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/core.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/components.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css"/>
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/notifications/pnotify.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/notifications/noty.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/notifications/jgrowl.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_data_sources.js"></script>
	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/components_notifications_other.js"></script>
	<!-- /theme JS files -->

    <script src="pnotify.custom.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="pnotify.custom.min.css" />
</head>
<body>
    <form id="form1" runat="server">
        <div>
        <!-- Main navbar -->
        <div class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/CCDO Logo.png" alt="" style="background-color:#ffffff" /></a>
            </div>

            <div class="navbar-collapse collapse" id="navbar-mobile">

                <div class="navbar-right">
                    <ul class="nav navbar-nav">

                        <li class="dropdown dropdown-user">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-cog"></i>
                                <span>
                                    <label  ID="lblName" Text="Username"></label></span>
                                <i class="caret"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="EditAccount.aspx"><i class="icon-cog5"></i>Account settings</a></li>
                                <li>
                                    <a  ID="btnLogout"><span style="margin-right:5px;">Log Out</span><i class="icon-switch2"></i></a></li>

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
                                                <label runat="server" ID="txtUser" Text="Username"></label></span>
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
                                                <li class="active"><a href="EventManager_EventList.aspx">Events List</a></li>
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
                                    <div class="panel panel-white">

                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h1 class="panel-title">Event</h1>
                                            </div>


                                            <div class="heading-elements">
                                                <div class="heading-btn-group">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <table class="table datatable-html" id="tableCoopeartiveAccount">
                                                        <thead>
                                                            <tr>
                                                                <th>Title</th>
                                                                <th>Sent By</th>
                                                                <th>Location</th>
                                                                <th>Date</th>
                                                                <th class="text-center">Actions</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>Cooperative Awarding Ceremony</td>
                                                                <td>Mark Dherp Cuevas</td>
                                                                <td>City of Santa Rosa, Laguna</td>
                                                                <td>January 2, 2018</td>
                                                                <td class="text-center">
                                                                    <ul class="icons-list">
                                                                        <li class="dropdown">
                                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                                <i class="icon-menu9"></i>
                                                                            </a>

                                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                                <li><a href="#" onclick="viewCooperative()"><i class="icon-eye"></i> View</a></li>
                                                                                <li><a href="#"><i class="icon-pencil7"></i> Update</a></li>
                                                                                <li><a href="#"><i class="icon-user-minus"></i> Delete</a></li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>

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
</html>
