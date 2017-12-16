<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>CCDO - Update Cooperative Profile</title>

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
    <form id="form1" runat="server" class="form-validate-jquery">

            <!-- Main navbar -->
            <asp:ScriptManager runat="server"></asp:ScriptManager>
            <div class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/images/CCDO Logo.png" alt="" style="background-color:#ffffff" /></a>

                    <ul class="nav navbar-nav visible-xs-block">
                        <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-more""></i></a></li>
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

                                        <li>
                                            <a href="#"><i class="icon-profile"></i><span>Cooperative Accounts</span></a>
                                            <ul>
                                                <li><a href="CoopManager_AddCooperative.aspx">Add Cooperative Account</a></li>
                                                <li><a href="CoopManager_ViewCooperativeAccountList.aspx">View Cooperative Accounts</a></li>
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
                                    <h3 class="panel-title">Update Cooperative Profile</h3>
                                    <br />
                                    <div class="text-center">
                                        <asp:Label runat="server" ID="lblCooperativeName" Text="Cooperative Name" Font-Size="Medium" Font-Bold="true"></asp:Label>
                                    </div>
                                    <hr />
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
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Last name:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtLastName" MaxLength="45" autofocus Style="text-transform: uppercase" required="required" class="form-control" onkeyup="Validate(this)"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><span class="text-danger">* </span><strong>Position:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtPosition" MaxLength="45" Style="text-transform: uppercase" required="required" class="form-control" onkeyup="Validate(this)"></asp:TextBox>
                                                </div>
                                            </div>
                                            <%--
                                                <div class="col-md-4">
                                                    <div class="form-group has-feedback">
                                                        <label><span class="text-danger">* </span><strong>First name:</strong></label>
                                                        <asp:TextBox runat="server" ID="txtFirstName" MaxLength="45" Style="text-transform: uppercase" required="required" class="form-control" placeholder="Juan" onkeyup="Validate(this)"></asp:TextBox>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group has-feedback">
                                                        <label><span class="text-danger">* </span><strong>Middle name:</strong></label>
                                                        <asp:TextBox runat="server" ID="txtMiddleName" MaxLength="45" Style="text-transform: uppercase" required="required" class="form-control" placeholder="Dela Cruz" onkeyup="Validate(this)"></asp:TextBox>
                                                    </div>
                                                </div>--%>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><span class="text-danger">* </span><strong>Phone Number:</strong></label>
                                                    <asp:TextBox ID="txtPhone" runat="server" required="required" CssClass="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Email Address:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtEmail" required="required" class="form-control" TextMode="Email"></asp:TextBox>
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
                                                    <asp:TextBox runat="server" ID="txtCoopName" MaxLength="100" Style="text-transform: uppercase" required="required" class="form-control" onkeyup="Validate(this)"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Address:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtAddress" MaxLength="100" Style="text-transform: uppercase" required="required" class="form-control" onkeyup="Validate(this)"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Telephone/ Fax Number:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtTelephone" TextMode="Phone" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Email Address:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtEmail1" TextMode="Email" class="form-control" required="required"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>CDA Registration Number:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtCDA" required="required" class="form-control" TextMode="Number"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Date of Registration:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtDateOfRegistration" class="form-control" required="required" placeholder="mm/dd/yyyy"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>CIN:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtCIN" class="form-control" required="required" TextMode="Number"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Type of Cooperative:</strong></label>
                                                    <asp:DropDownList runat="server" ID="ddlTypeOfCooperative" required="required" CssClass="form-control">
                                                        <asp:ListItem Value="" Text=""></asp:ListItem>
                                                        <asp:ListItem Value="1" Text="Bank"></asp:ListItem>
                                                        <asp:ListItem Value="2" Text="Credit"></asp:ListItem>
                                                        <asp:ListItem Value="3" Text="Consumers"></asp:ListItem>
                                                        <asp:ListItem Value="4" Text="Federation"></asp:ListItem>
                                                        <asp:ListItem Value="5" Text="Laboratory"></asp:ListItem>
                                                        <asp:ListItem Value="6" Text="Marketing"></asp:ListItem>
                                                        <asp:ListItem Value="7" Text="Multi-Purpose (Agri)"></asp:ListItem>
                                                        <asp:ListItem Value="8" Text="Multi-Purpose (Non-Agri)"></asp:ListItem>
                                                        <asp:ListItem Value="9" Text="Producers"></asp:ListItem>
                                                        <asp:ListItem Value="10" Text="Service"></asp:ListItem>
                                                        <asp:ListItem Value="11" Text="Union"></asp:ListItem>
                                                        <asp:ListItem Value="12" Text="Others"></asp:ListItem>
                                                    </asp:DropDownList>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Common Bond of Membership:</strong></label>
                                                    <asp:DropDownList runat="server" ID="ddlCommonBondOfMembership" required="required" CssClass="form-control">
                                                        <asp:ListItem Value="" Text=""></asp:ListItem>
                                                        <asp:ListItem Value="1" Text="Associational"></asp:ListItem>
                                                        <asp:ListItem Value="2" Text="Institutional"></asp:ListItem>
                                                        <asp:ListItem Value="3" Text="Occupational"></asp:ListItem>
                                                        <asp:ListItem Value="4" Text="Residential"></asp:ListItem>
                                                    </asp:DropDownList>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Affiliation:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtAffiliation" CssClass="form-control" required="required" onkeyup="Validate(this)"></asp:TextBox>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Area of Operation:</strong></label>
                                                    <asp:DropDownList runat="server" ID="ddlAreaOfOperation" required="required" CssClass="form-control">
                                                        <asp:ListItem Value="" Text=""></asp:ListItem>
                                                        <asp:ListItem Value="1" Text="Barangay"></asp:ListItem>
                                                        <asp:ListItem Value="2" Text="City"></asp:ListItem>
                                                    </asp:DropDownList>
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
                                                    <asp:TextBox runat="server" ID="txtNumberOfBoardOfDirectors" required="required" class="form-control" TextMode="Number"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Number of Employees:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtNumberOfEmployees" required="required" class="form-control" TextMode="Number"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>BOD Chairman:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtBODChairman" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Manager:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtManager" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Educ.Com/ BOD Vice Chair:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtBODViceChair" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Secretary:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtSecretary" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Audit Committee Chairman:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtAuditCommitteeChair" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Treasurer:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtTreasurer" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Election Committee Chairman:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtElectionCommitteeChairman" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Credit Committee Chairman:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtCreditCommitteeChairman" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Med. & Concilliation:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtMedAndConcilliation" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Other Committees:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtOtherCommittees" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Date of Regular General Assembly Meeting:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtDateofRegularGeneralAssemblyMeeting" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Date of Monthly Board Meeting:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtDateofMonthlyBoardMeeting" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Date of Committee Meeting:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtDateofCommitteeMeeting" required="required" class="form-control"></asp:TextBox>
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
                                                    <asp:TextBox runat="server" ID="txtBusinessEnagagedIn" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Other Business:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtOtherBusiness" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Services/Benefits Offered to Members:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtServicesBenefitsOfferedtoMembers" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Total Cooperative Asset:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtTotalCooperativeAsset" TextMode="Number" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Total Paid-up Capital:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtTotalPaidUpCapital" TextMode="Number" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Beginning: </strong></label>
                                                    <asp:TextBox runat="server" ID="txtBeginning" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Beginning:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtBeginning1" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>To Date: </strong></label>
                                                    <asp:TextBox runat="server" ID="txtToDate" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>To Date:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtToDate1" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><strong>Assisting Financial Institution, if any:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtAssistingFinancialInstitution" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><strong>Total Volume of Sales based in Latest Financial Statement (with Members/Non-Members):</strong></label>
                                                    <asp:TextBox runat="server" ID="txtTotalVolumeOfSales" required="required" class="form-control"></asp:TextBox>
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
                                                    <asp:TextBox runat="server" ID="txtUpdatedBIRNumber" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Tax Identification Number (TIN):</strong></label>
                                                    <asp:TextBox runat="server" ID="txtTIN" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Business Permit Number:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtBusinessPermitNumber" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>COC Number (CDA):</strong></label>
                                                    <asp:TextBox runat="server" ID="txtCOCNumber" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Certificate of Tax Exemption Number:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtCertificateOfTaxExemptionNumber" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Date of Issue (COC):</strong></label>
                                                    <asp:TextBox runat="server" ID="txtDateOfIssueCOC" required="required" class="form-control"></asp:TextBox>
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
                                                    <asp:TextBox runat="server" ID="txtTotalNumberOfMembership" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Male:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtMale" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Female:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtFemale" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Number of Regular Members:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtNumberOfRegularMembers" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Number of Associate Members:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtNumberOfAssociateMembers" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Membership Composition:</strong></label>
                                                    <asp:DropDownList runat="server" ID="ddlMembershipComposition" required="required" CssClass="form-control">
                                                        <asp:ListItem Value="" Text=""></asp:ListItem>
                                                        <asp:ListItem Value="1" Text="Drivers/ Operators"></asp:ListItem>
                                                        <asp:ListItem Value="2" Text="Farmers"></asp:ListItem>
                                                        <asp:ListItem Value="3" Text="Fisherfolks"></asp:ListItem>
                                                        <asp:ListItem Value="4" Text="Government Employees"></asp:ListItem>
                                                        <asp:ListItem Value="5" Text="Indigenous Community"></asp:ListItem>
                                                        <asp:ListItem Value="6" Text="Persons with Disability"></asp:ListItem>
                                                        <asp:ListItem Value="7" Text="Private Employees"></asp:ListItem>
                                                        <asp:ListItem Value="8" Text="Women"></asp:ListItem>
                                                        <asp:ListItem Value="9" Text="Youth"></asp:ListItem>
                                                        <asp:ListItem Value="10" Text="Others (Specify)"></asp:ListItem>
                                                    </asp:DropDownList>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Basic Trainings Attended by Members:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtBasicTrainingsAttendedByMembers" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Basic Trainings Attended by Officers:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtBasicTrainingsAttendedByOfficers" required="required" class="form-control"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Basic Trainings Attended by Management Staff:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtBasicTrainingsAttendedByManagementStaff" required="required" class="form-control"></asp:TextBox>
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
                                                    <asp:TextBox runat="server" ID="txtUsername" required="required" class="form-control" MaxLength="40"></asp:TextBox>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label><span class="text-danger">* </span><strong>Password:</strong></label>
                                                    <asp:TextBox runat="server" ID="txtPassword" TextMode="Password" required="required" class="form-control" MinLength="6" MaxLength="40"></asp:TextBox>
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
                                                    <asp:TextBox runat="server" ID="txtPassword1" TextMode="Password" required="required" class="form-control" MinLength="6" MaxLength="40" equalsTo="txtPassword"></asp:TextBox>
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
                                                        <asp:Label runat="server" class="label-default bg-info" ID="lblCoopName" Text="Coop Name"></asp:Label>
                                                        Cooperative, I hereby certify that the above information are correct and true with the best of my knowledge and belief.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>

                                <div class="text-right">
                                    <asp:Button runat="server" ID="Button1" CssClass="btn btn-danger" Text="Cancel" CausesValidation="false" UseSubmitBehavior="false" />
                                    <asp:Button runat="server" ID="btnSubmit" CssClass="btn btn-primary" Text="Save" />
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
        </script>

    </form>
</body>
</html>
