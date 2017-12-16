<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
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
<form id="form1" runat="server">
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
                                            <asp:Label runat="server" ID="txtUser" Text="Username"></asp:Label></span>
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
                                        <li><a href="CCDO_AddDepartmentAccount.php">Add Department Account</a></li>
                                        <li class="active"><a href="CCDO_ViewAccounts.php">View Accounts</a></li>
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


                            <div class="col-md-12">
                                <div class="panel panel-white">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h3 class="panel-title"><strong>Accounts List</strong></h3>
                                        </div>

                                        <div class="heading-elements">
                                            <div class="heading-btn-group">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="col-lg-12">
                                            <div class="row">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- /Content area -->
                </div>
                <!-- Main content -->
            </div>
        </div>

    </div>
</form>
</body>

</html>