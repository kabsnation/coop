<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>CCDO -  Edit Account</title>

    <link rel="icon" href="../assets/images/CCDO Logo.png" />

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
    <form id="form1" runat="server">
        <div>
<!-- Main navbar -->
            <asp:ScriptManager runat="server"></asp:ScriptManager>
            <div class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/images/CCDO Logo.png" alt="" /></a>

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
                                    <asp:UpdatePanel runat="server">
                                        <ContentTemplate>
                                            <i class="icon-earth" style="padding-right: 10px;"></i>
                                            <asp:Label runat="server" ID="lblNotificationCounter" CssClass="badge badge-primary position-left" Visible="false"></asp:Label>
                                        </ContentTemplate>
                                    </asp:UpdatePanel>
                                </a>
                            </li>

                            <li class="dropdown dropdown-user">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-cog"></i>
                                    <span>
                                        <asp:Label runat="server" ID="lblName" Text="Username"></asp:Label></span>
                                    <i class="caret"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="EditAccount.aspx"><i class="icon-cog5"></i>Account settings</a></li>
                                    <li>
                                        <asp:LinkButton runat="server" ID="btnLogout"><span style="margin-right:5px;">Log Out</span><i class="icon-switch2"></i></asp:LinkButton></li>

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

                    <!-- Main Content -->
                    <div class="content-wrapper">
                        <div class="content">

                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h3 class="panel-title"><strong>Edit Your Account Profile</strong></h3>
                                    </div>

                                    <div class="heading-elements">
                                        <div class="heading-btn-group">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">

                                    <asp:UpdatePanel runat="server">
                                        <ContentTemplate>
                                            <asp:UpdatePanel runat="server" ID="panelAll" Visible="true">
                                                <ContentTemplate>

                                                    <div class="row" style="padding: 20px">
                                                        <%--                                                    <div class="col-md-3">
                                                        <div class="panel panel-flat border-left-xlg border-left-teal">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title"><span class="text-semibold">Username</span></h6>
                                                                <div class="heading-elements">
                                                                    <asp:Button runat="server" ID="btnUpdateUsername" class="btn btn-info heading-btn" Text="Update" OnClick="btnUpdateUsername_Click" />
                                                                </div>
                                                            </div>

                                                            <div class="panel-body">
                                                                <asp:Label CssClass="label label-block label-striped" Font-Size="Small" runat="server" ID="lblUsername" Text="Username"></asp:Label>
                                                            </div>
                                                        </div>
                                                    </div>--%>

                                                        <div class="col-md-3">
                                                            <div class="panel panel-flat border-left-xlg border-left-teal">
                                                                <div class="panel-heading">
                                                                    <h6 class="panel-title"><span class="text-semibold">Password</span></h6>
                                                                    <div class="heading-elements">
                                                                        <asp:Button runat="server" ID="btnUpdatePassword" class="btn btn-info heading-btn" Text="Update" OnClick="btnUpdatePassword_Click" />
                                                                    </div>
                                                                </div>

                                                                <div class="panel-body">
                                                                    <asp:Label CssClass="label label-block label-striped" Font-Size="Small" runat="server" ID="lblPassword" Text="Password"></asp:Label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </ContentTemplate>
                                            </asp:UpdatePanel>

                                            <%-- <asp:UpdatePanel runat="server" ID="editUser" Visible="false">
                                            <ContentTemplate>

                                                <div class="col-md-6"  style="padding: 20px">
                                                    <div class="panel panel-flat border-left-xlg border-left-teal">
                                                        <div class="panel-heading">
                                                            <h6 class="panel-title"><span class="text-semibold">Update Username</span></h6>
                                                        </div>

                                                        <div class="panel-body">
                                                            <label><span class="text-danger">* </span><strong>New Username:</strong></label>
                                                            <asp:TextBox runat="server" ID="txtUsername" CssClass="form-control"></asp:TextBox>
                                                            <br />
                                                            <div class="text-right">
                                                                <asp:Button runat="server" ID="btnCancelUser" class="btn btn-default heading-btn" Text="Cancel" UseSubmitBehavior="false" CausesValidation="false" OnClick="btnCancelUser_Click" />
                                                                <asp:Button runat="server" ID="btnSubmitUser" class="btn btn-info heading-btn" Text="Update" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </ContentTemplate>
                                        </asp:UpdatePanel>--%>

                                            <asp:UpdatePanel runat="server" ID="editPass" Visible="false">
                                                <ContentTemplate>

                                                    <div class="col-md-6" style="padding: 20px">
                                                        <div class="panel panel-flat border-left-xlg border-left-teal">
                                                            <div class="panel-heading">
                                                                <h6 class="panel-title"><span class="text-semibold">Update Password</span></h6>
                                                            </div>

                                                            <div class="panel-body">
                                                                <label><span class="text-danger">* </span><strong>Old Password:</strong></label>
                                                                <asp:TextBox runat="server" ID="txtOldPassword" CssClass="form-control" Text="Password" TextMode="Password"></asp:TextBox>
                                                                <label><span class="text-danger">* </span><strong>New Password:</strong></label>
                                                                <asp:TextBox runat="server" ID="txtPassword" CssClass="form-control" Text="Password" TextMode="Password"></asp:TextBox>
                                                                <label><span class="text-danger">* </span><strong>Re-enter New Password:</strong></label>
                                                                <asp:TextBox runat="server" ID="txtReenterPassword" CssClass="form-control" Text="Password" TextMode="Password"></asp:TextBox>
                                                                <br />
                                                                <div class="text-right">
                                                                    <asp:Button runat="server" ID="btnCancelPass" class="btn btn-default heading-btn" Text="Cancel" UseSubmitBehavior="false" CausesValidation="false" OnClick="btnCancelPass_Click" />
                                                                    <asp:Button runat="server" ID="btnSubmitPass" class="btn btn-info heading-btn" Text="Update" />
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </ContentTemplate>
                                            </asp:UpdatePanel>

                                        </ContentTemplate>
                                    </asp:UpdatePanel>

                                    <%--<div class="col-md-6">
                                        <div class="panel panel-flat border-left-xlg border-left-teal">
                                            <div class="panel-heading">
                                                <h6 class="panel-title"><span class="text-semibold">Address</span></h6>
                                                <div class="heading-elements">
                                                     <asp:Button runat="server" ID="Button1" class="btn btn-info heading-btn" Text="Update" />
									            </div>
                                            </div>

                                            <div class="panel-body">
                                                <asp:Label CssClass="label label-block label-striped" Font-Size="Small" runat="server" ID="Label1" Text="Address"></asp:Label>
                                            </div>
                                        </div>
                                    </div>--%>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Main Content -->

            </div>
            <!-- /Page content -->
        </div>
        <!-- /Page container -->

        </div>
    </form>
</body>
</html>