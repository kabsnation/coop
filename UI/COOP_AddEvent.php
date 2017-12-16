<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <title>CCDO - Add Event</title>

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
    <script type="text/javascript" src="assets/js/plugins/uploaders/fileinput.min.js"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/uploader_bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/pages/form_validation.js"></script>
    <script type="text/javascript" src="assets/js/plugins/forms/validation/validate.min.js"></script>
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
                                                <li><a href="COOP_EventList">Events List</a></li>
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
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label><span class="text-danger">* </span><strong>Event Name:</strong></label>
                                                        <input  ID="txtEventName" CssClass="form-control" type="MultiLine" required="required"></input>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><span class="text-danger">* </span><strong>Event Details:</strong></label>
                                                        <input  ID="txtEventDetails" CssClass="form-control" type="MultiLine" required="required"></input>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><span class="text-danger">* </span><strong>Event Location:</strong></label>
                                                        <input  ID="txtEventLocation" CssClass="form-control" type="MultiLine" required="required"></input>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><span class="text-danger">* </span><strong>Start Date and Time:</strong></label>
                                                        <input  ID="txtStartDateTime" CssClass="form-control" type="DateTimeLocal" required="required"></input>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><span class="text-danger">* </span><strong>End Date and Time:</strong></label>
                                                        <input  ID="txtEndDateTime" CssClass="form-control" type="DateTimeLocal" required="required"></input>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label><strong>Upload File:</strong></label>
                                                        <asp:FileUpload  class="file-input-extensions" AllowMultiple="true" multiple="multiple" type="file" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label><span class="text-danger">* </span><strong>Choose Recipients:</strong></label>

                                                        <div class="input-group content-group">
                                                            <div class="has-feedback has-feedback-left">
                                                                <asp:UpdatePanel >
                                                                    <ContentTemplate>
                                                                        <input  class="form-control input-xs" ID="txtboxSearch" AutoPostBack="true"></input>

                                                                    </ContentTemplate>
                                                                </asp:UpdatePanel>
                                                                <div class="form-control-feedback">
                                                                    <i class="icon-search4 text-muted text-size-base"></i>
                                                                </div>
                                                            </div>

                                                            <div class="input-group-btn">
                                                                <asp:Button  ID="btnSearchCooperative" CssClass="btn btn-primary btn-xs" Text="Search" />
                                                                <asp:Button  ID="btnSelectAllRecipients" CssClass="btn bg-info btn-xs" Text="Select All" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-lg-12">
                                                                <telerik:RadListBox ID="lbRecipients"  CheckBoxes="true" ShowCheckAll="true" Width="100%" Height="300px"></telerik:RadListBox>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>

                                </div>

                                <div class="panel-footer">
                                    <div class="heading-elements">
                                        <div class="text-right">
                                            <asp:Button  ID="btnSend" Text="Send" CssClass="btn bg-info" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Main Content -->

                    <!-- Opposite sidebar -->
                    <div class="sidebar sidebar-opposite sidebar-default">
                        <div class="sidebar-content">
                            <!-- Document -->
                            <div class="sidebar-category">
                                <div class="category-title">
                                    <span>Documents</span>
                                    <ul class="icons-list">
                                        <li><a href="#" data-action="collapse"></a></li>
                                    </ul>
                                </div>

                                <div class="category-content no-padding">
                                    <telerik:RadListBox  Height="500px" Width="100%" SelectionMode="Single" AllowAutomaticUpdates="true">
                                        <Items>
                                            <telerik:RadListBoxItem Text="Sample" Value="1" />
                                            <telerik:RadListBoxItem Text="Sample" Value="2" />
                                            <telerik:RadListBoxItem Text="Sample" Value="3" />
                                            <telerik:RadListBoxItem Text="Sample" Value="4" />
                                            <telerik:RadListBoxItem Text="Sample" Value="1" />
                                            <telerik:RadListBoxItem Text="Sample" Value="2" />
                                            <telerik:RadListBoxItem Text="Sample" Value="3" />
                                            <telerik:RadListBoxItem Text="Sample" Value="4" />
                                            <telerik:RadListBoxItem Text="Sample" Value="1" />
                                            <telerik:RadListBoxItem Text="Sample" Value="2" />
                                            <telerik:RadListBoxItem Text="Sample" Value="3" />
                                            <telerik:RadListBoxItem Text="Sample" Value="4" />
                                        </Items>
                                        <ItemTemplate>
                                            <ul class="media-list media-list-linked" style="background-color: #ffffff;">

                                                <li class="media">
                                                    <a href="#" class="media-link">
                                                        <div class="media-body">
                                                            <asp:Label  ID="txtDocumentSender" class="media-heading text-semibold" Text="Sender Name"></asp:Label>
                                                            <asp:Label  ID="txtDocumentTitle" class="text-size-mini text-muted display-block" Text="Document Title"></asp:Label>
                                                        </div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </ItemTemplate>
                                    </telerik:RadListBox>

                                </div>
                            </div>
                            <!-- /Document -->

                            <!-- Events -->
                            <div class="sidebar-category">
                                <div class="category-title">
                                    <span>Events</span>
                                    <ul class="icons-list">
                                        <li><a href="#" data-action="collapse"></a></li>
                                    </ul>
                                </div>

                                <div class="category-content no-padding">
                                    
                                    <telerik:RadListBox  Height="500px" Width="100%" SelectionMode="Single" AllowAutomaticUpdates="true">
                                        <Items>
                                            <telerik:RadListBoxItem Text="Sample" Value="1" />
                                            <telerik:RadListBoxItem Text="Sample" Value="2" />
                                            <telerik:RadListBoxItem Text="Sample" Value="3" />
                                            <telerik:RadListBoxItem Text="Sample" Value="4" />
                                            <telerik:RadListBoxItem Text="Sample" Value="1" />
                                            <telerik:RadListBoxItem Text="Sample" Value="2" />
                                            <telerik:RadListBoxItem Text="Sample" Value="3" />
                                            <telerik:RadListBoxItem Text="Sample" Value="4" />
                                            <telerik:RadListBoxItem Text="Sample" Value="1" />
                                            <telerik:RadListBoxItem Text="Sample" Value="2" />
                                            <telerik:RadListBoxItem Text="Sample" Value="3" />
                                            <telerik:RadListBoxItem Text="Sample" Value="4" />
                                        </Items>
                                        <ItemTemplate>
                                            <ul class="media-list media-list-linked" style="background-color: #ffffff;">

                                                <li class="media">
                                                    <a href="#" class="media-link">
                                                        <div class="media-body">
                                                            <asp:Label  ID="txtEventSender" class="media-heading text-semibold" Text="Sender Name"></asp:Label>
                                                            <asp:Label  ID="txtEventTitle" class="text-size-mini text-muted display-block" Text="Event Title"></asp:Label>
                                                        </div>
                                                    </a>
                                                </li>

                                            </ul>
                                        </ItemTemplate>
                                    </telerik:RadListBox>

                                </div>
                            </div>
                            <!-- /Events -->

                        </div>
                    </div>
                    <!-- /opposite sidebar -->

                </div>
                <!-- /Page content -->

            </div>
            <!-- /Page container -->
        </div>
    </form>
</body>
</html>
