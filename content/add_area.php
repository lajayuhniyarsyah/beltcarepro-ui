<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create New Customer Site Area</h1>
		<p class="description">Pages user admin create new customer site</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_area">Data Customer Site Area</a>
			</li>
			<li class="active">
				<strong>Create Customer Site Area</strong>
			</li>
		</ol>

	</div>
</div>
			
<div class="row">
	<div class="col-sm-12">
	<form role="form" id="form1" method="post" class="validate form-horizontal">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title font-bold">FORM CREATE CUSTOMER SITE AREA</h3>
				<div class="panel-options">
					<a href="#">
						<button class="btn btn-info btn-icon btn-icon-standalone error_validasi">
							<i class="fa-plus-circle"></i>
							<span>Create Customer Site Area</span>
						</button>
					</a>
				</div>
			</div>
			<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Customer Name <span class="font-red"> * </span></label>
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#data_customer").select2({
										minimumInputLength: 1,
										placeholder: 'Search',
										ajax: {
											url: "data/data_customer.php",
											dataType: 'json',
											quietMillis: 100,
											data: function(term, page) {
												return {
													limit: -1,
													q: term
												};
											},
											results: function(data, page ) {
												return { results: data }
											}
										},
										formatResult: function(student) { 
											return "<div class='select2-user-result'>" + student.name + "</div>"; 
										},
										formatSelection: function(student) { 
											return  student.name; 
										}
										
									});
								});
							</script>
						<div class="col-sm-10">
							<input type="hidden" name="data_customer" id="data_customer" data-validate="required" class="form-control validasi" data-message-required="Please Input Data Customer." placeholder="Data Customer" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">Site Name <span class="font-red"> * </span></label>
						<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#data_site").select2({
										minimumInputLength: 1,
										placeholder: 'Search',
										ajax: {
											url: "data/data_customer.php",
											dataType: 'json',
											quietMillis: 100,
											data: function(term, page) {
												return {
													limit: -1,
													q: term
												};
											},
											results: function(data, page ) {
												return { results: data }
											}
										},
										formatResult: function(student) { 
											return "<div class='select2-user-result'>" + student.name + "</div>"; 
										},
										formatSelection: function(student) { 
											return  student.name; 
										}
										
									});
								});
							</script>
						<div class="col-sm-10">
							<input type="hidden" name="data_site" id="data_site" data-validate="required" class="form-control validasi" data-message-required="Please Input Data Site." placeholder="Data Site" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">Area Name <span class="font-red"> * </span></label>
						<div class="col-sm-10">
							<input type="text" class="form-control validasi" name="name" data-validate="required" data-message-required="Please Input  Area Name." placeholder="Customer Site Area Name" />
						</div>
					</div>

					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Description</label>
						<div class="col-sm-10">
							<textarea class="form-control" cols="5" id="field-5" name="desc"></textarea>
						</div>
					</div>
					<div class="form-group-separator"></div>

					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Active</label>

						<div class="col-sm-10">
							<input type="checkbox" checked class="iswitch iswitch-red">
						</div>
					</div>
			</div>
			
		</div>
		</form>
	</div>
</div>


<div class="row">
	<div class="col-sm-12">
		<div class="panel-group" id="accordion-test-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-2" class="collapsed">
						<span class="font-bold">DATA CONVEYOR</span>
					</a>
					</h4>
				</div>
				<div id="collapseTwo-2" class="panel-collapse collapse in">
					<div class="panel-body">
						<script type="text/javascript">
						
						</script>
						<div class="table-responsive"> 
							<table class="table table-striped table-bordered" id="conveyor">
								<thead>
									<tr class="replace-inputs">
										<th><center>Code</center></th>
										<th><center>Customer Area</center></th>
										<th><center>Customer Site</center></th>
										<th><center>Customer Name</center></th>
										<th><center>Status</center></th>
									</tr>
								</thead>
								<tbody>
								    <?php for($i=1; $i<4; $i++){ ?>
										<tr>
											<td>CODE 000<?=$i?></td>
											<td>AREA  <?=$i?></td>
											<td>SITE  <?=$i?></td>
											<td>FREEPORT INDONESIA <?=$i?></td>
											<td class="center">Active</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<a href="javascript:;" onclick="jQuery('#create-area').modal('show', {backdrop: 'static'});">
							<button class="btn btn-info btn-icon btn-icon-standalone">
								<i class="fa-plus-circle"></i>
								<span>Add Conveyor</span>
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="create-area">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Create Conveyor</h4>
			</div>
			
			<div class="modal-body">
			
				<div class="row">
					<div class="col-md-12">
						
						<div class="form-group">
							<label for="field-1" class="control-label">Code</label>
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="Please Input Code Conveyor." placeholder="Code Conveyor" />
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="field-1" class="control-label">Description</label>
							<textarea class="form-control" cols="5" id="field-5" name="desc"></textarea>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="field-1" class="control-label">Map</label>
							<input type="file" class="form-control" id="field-4">
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="field-1" class="control-label">Active</label>
							<input type="checkbox" checked class="iswitch iswitch-red">
						</div>	
					</div>
				</div>

			<!-- 	<div class="row">
					<div class="col-md-12">
						<div class="form-group no-margin">
							<label for="field-7" class="control-label">Customer Name</label>
								<script type="text/javascript">
									jQuery(document).ready(function($)
									{
										$("#data_customer").select2({
											minimumInputLength: 1,
											placeholder: 'Search',
											ajax: {
												url: "data/data_customer.php",
												dataType: 'json',
												quietMillis: 100,
												data: function(term, page) {
													return {
														limit: -1,
														q: term
													};
												},
												results: function(data, page ) {
													return { results: data }
												}
											},
											formatResult: function(student) { 
												return "<div class='select2-user-result'>" + student.name + "</div>"; 
											},
											formatSelection: function(student) { 
												return  student.name; 
											}
											
										});
									});
								</script>
								<div class="col-sm-10">
									<input type="hidden" name="data_customer" id="data_customer" />
								</div>
							<br/>
						</div>
					</div>
				</div> -->
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info">Save changes</button>
			</div>
		</div>
	</div>
</div>

