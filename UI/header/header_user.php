<?php
$handler = new AccountHandler();
$admin = $handler->getAccountById($_SESSION['idAccount']);
$arrs = array();
$title ="";

if(strpos($_SERVER['REQUEST_URI'],'COOP_AddDocument.php')){
    $arrs[0]="active";
    $arrs[1]="";
    $arrs[2]="";
    $title = "CCDO - Add Document";
}
else if(strpos($_SERVER['REQUEST_URI'],'COOP_DocumentList.php')){
    $arrs[0]="";
    $arrs[1]="active";
    $arrs[2]="";
    $title = "CCDO - Document List";
}
else if(strpos($_SERVER['REQUEST_URI'],'CCDO_Inbox.php')){
    $arrs[0]="";
    $arrs[1]="";
    $arrs[2]="active";
    $title = "CCDO - Inbox";
}
else if(strpos($_SERVER['REQUEST_URI'],'CCDO_ViewMessage.php')){
	$arrs[0]="";
    $arrs[1]="";
    $arrs[2]="active";
    $title = "CCDO - Inbox";
}
else if(strpos($_SERVER['REQUEST_URI'],'ViewTracking.php')){
    $arrs[0]="";
    $arrs[1]="active";
    $arrs[2]="";
    $title = "CCDO - Document List";
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <title><?php echo $title;?></title>
 <link rel="icon" href="../assets/images/CCDO Logo.png" />

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
    <script type="text/javascript" src="assets/js/plugins/uploaders/fileinput.min.js"></script>
    <script type="text/javascript" src="assets/js/pages/uploader_bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/plugins/editors/summernote/summernote.min.js"></script>
    <script type="text/javascript" src="assets/js/pages/editor_summernote.js"></script>

</head>
<body>
    
        <div id="header">

                    <!-- Main navbar -->
        <div id="header" class="navbar navbar-inverse">
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
                        <?php if($admin){foreach($admin as $info){?>
                        <span><?php echo $info['name'];?></span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                        <li><a onclick="logOut()"><i class="icon-switch2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        function logOut(){
            $.ajax({
            type: "POST",
            url: "/coop/UI/logout.php",
            data: "type='admin'",
            success: function(data){
                 window.location ='index.php';
            }
        });
        }
    </script>
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
                                                <label  ID="txtUser" Text="Username"><?php echo $info['name']?></label></span>
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
                            <?php }}?>
                            <!-- /user menu -->

<!-- Main Navigation -->
                            <div class="sidebar-category sidebar-category-visible">
                                <div class="category-content no-padding">
                                    <ul class="navigation navigation-main navigation-accordion">

                                       <li class="active">
                                            <a href="#"><i class="icon-calendar"></i><span> Document</span></a>
                                            <ul>
                                                <li class="<?php echo $arrs[0]?>"><a href="COOP_AddDocument.php">Add Document</a></li>
                                                <li class="<?php echo $arrs[1]?>"><a href="COOP_DocumentList.php">Documents List</a></li>
                                                <li class="<?php echo $arrs[2]?>"><a href="CCDO_Inbox.php">Inbox</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- /Main Navigation -->

                        </div>
                    </div>
                    <!--/ Main sidebar -->

