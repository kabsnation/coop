<?php
session_start();
require("../Handlers/DocumentHandler.php");
require("../Handlers/AccountHandler.php");
require("../config/config.php");
include('../UI/header/header_user.php');
$doc = new DocumentHandler();
$id = $_SESSION['idAccount'];
?>
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default has-cover" style="border: 1px solid #ddd; border-bottom: 0;">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i><span class="text-semibold">Messages</span> - Inbox</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-trash text-danger"></i> <span>Delete</span></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Media library -->
					<div class="panel panel-white">
						<div class="panel-heading">
							<h6 class="panel-title text-semibold">Inbox</h6>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a data-action="reload"></a></li>
			                	</ul>
		                	</div>
						</div>

						<table class="table datatable-html" id="tableInbox">
	                        <thead>
	                            <tr>
	                            	<th><input type="checkbox" class="styled"></th>
	                            	<th>Subject</th>
	                                <th>From</th>
	                                <th>Date</th>
	                                <th class="text-center">Actions</th>
	                            </tr>
	                        </thead>
	                    </table>
                    </div>
                    <!-- /media library -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
<script>
    function realTime(){
        setTimeout(realTime,1000);
        var tablee = $('#tableInbox').DataTable();
        var info = tablee.page.info();
         $.ajax({
            type: "POST",
            url: "checkerInbox.php",
            data: "count="+info.recordsTotal+"&id="+<?php echo $id;?>,
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
            url: "realtimeInboxFunction.php",
            data: "id="+<?php echo $id;?>,
            success: function(data){
                var tablee = $('#tableInbox').DataTable();
                tablee.clear().draw();
                for (var i = 0; i < data[0].length; i++) {
                    var table = $('#tableInbox').DataTable();
                    var checkbox = "<td style='width:5%''><input type='checkbox' class='styled'></td>";
                    var trackingNumber ="<td>"+data[0][i]+"</td>";
                    var type = "<td>"+data[1][i]+"</td>";
                    var date = "<td>"+data[2][i]+"</td>";
                    var action = " <td class='text-center'><a href='CCDO_ViewMessage.php?id="+data[3][i]+"'><i class='icon-mail-read'></i> Open </a></li><a class='text-danger' onclick='deleteFunction("+data[3][i]+");'><i class='icon-trash'></i> Delete </a></li>";
                    table.row.add([checkbox,trackingNumber,type,date, action]).draw(false);
                }
                realTime();
            },
            dataType: "json"
        });
    } 
    realTime();
    function deleteFunction(val){
    	//put ajax delete
    }
</script>