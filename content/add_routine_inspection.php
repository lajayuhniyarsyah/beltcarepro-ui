<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create Routine Inspection</h1>
		<p class="description">Create Routine Inspection <b>4 April 2016</b></p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_routine_inspection">Data Routine Inspection</a>
			</li>
			<li class="active">
				<strong>Inspection View</strong>
			</li>
		</ol>

	</div>
</div>

<div class="col-md-12">
	<div class="panel panel-color">

		<div class="panel-heading" style="padding-bottom:0px;">
			<h3 class="panel-title">FORM CREATE RUOTINE INSPECTION</h3>
			<div class="panel-options">
				<a href="#" >
					<button class="btn btn-blue btn-icon btn-icon-standalone error_validasi">
						<i class="fa-plus-circle"></i>
						<span>Create Route Inspection</span>
					</button>
				</a>
			</div>
		</div>

		<hr/>
		<div class="panel-body">
			
			<!-- <div class="table-responsive">  -->
			<form role="form" id="form1" method="post" class="validate form-horizontal label-left">
				<div class="form-group required">
					<label class="col-sm-2 control-label" for="field-1">Date  <span class="font-red">*</span></label>
					<div class="col-sm-4">
						<input type="text" id="field-2" class="form-control daterange" data-format="YYYY-MM-DD" data-start-date="2013-08-02" data-end-date="2013-08-15" data-separator="," />
					</div>
					
					<label class="col-sm-2 control-label" for="field-1">Only Weekday  <span class="font-red">*</span></label>
					<div class="col-sm-4">
						<div class="style-radio" style="margin-top:-22px;">
							<input type="checkbox" name="radio" id="only_weekday" class="checkbox"/>
							<label class="label-radio default-checkbox" for="only_weekday">Only Weekday</label>
						</div>
					</div>
				</div>
				<div class="form-group-separator"></div>

				<div class="form-group required">
					<label class="col-sm-2 control-label" for="field-1">Customer  <span class="font-red">*</span></label>
					<div class="col-sm-4">
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
						<input type="hidden" class="form-control validasi" name="data_customer" id="data_customer" data-validate="required" data-message-required="Please Input Data Customer." placeholder="Search Data Customer" />
					</div>

					<label class="col-sm-2 control-label" for="field-1">Site  <span class="font-red">*</span></label>
					<div class="col-sm-4">
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
						<input type="hidden" class="form-control validasi" name="data_site" id="data_site" data-validate="required" data-message-required="Please Input Data Site." placeholder="Search Data Site" />
					</div>

				</div>
				<div class="form-group-separator"></div>

				<div class="form-group required">
					<label class="col-sm-2 control-label" for="field-1">Conveyor  <span class="font-red">*</span></label>
					<div class="col-sm-10">
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#data_conveyor").select2({
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
						<input type="hidden" name="data_conveyor" id="data_conveyor" placeholder="Search Conveyor" />
					</div>
				</div>
				<div class="form-group-separator"></div>



				<div class="form-group required">
					<label class="col-sm-2 control-label" for="field-1">Action Type  <span class="font-red">*</span></label>
					<div class="col-sm-4">
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#type").selectBoxIt().on('open', function()
								{
									$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
								});
							});
						</script>
						<select class="form-control" id="type">
							<option value="">Please Select Type......</option>
							<option value="inspection">Inspection</option>
							<option value="corrective">Corrective</option>
							<option value="proactive">Proactive</option>
						</select>
						
					</div>
					<label class="col-sm-2 control-label" for="field-1">Interval  <span class="font-red">*</span></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="number" data-validate="number" value="10" />
					</div>
				</div>
				<div class="form-group-separator"></div>

				<div class="form-group required">
					<label class="col-sm-2 control-label" for="field-1">Doc No  <span class="font-red">*</span></label>
					<div class="col-sm-10"> 
						<input type="text" class="form-control" name="code" data-validate="required" data-message-required="Please Input Document No"/>
					</div>
				</div>
				<div class="form-group-separator"></div>

			</form>
			<!-- </div> -->
		</div>
			
		<div class="form-group-separator"></div><br/><br/>
	</div>
</div>





<div class="col-md-12">
				
	<!-- Default panel -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<b>INSPECTION TEAM</b>
		</div>
		
		<div class="panel-body">
			<div class="table-responsive"> 
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Position</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>1</td>
							<td>Agustian</td>
							<td>Supervisior</td>
						</tr>
						
						<tr>
							<td>2</td>
							<td>Joko</td>
							<td>Inspection</td>
						</tr>
						
						<tr>
							<td>3</td>
							<td>Alfian</td>
							<td>Inspection</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="panel-heading">
			<a href="javascript:;" onclick="jQuery('#add_team').modal('show', {backdrop: 'static'});" class="float-left">
				<button class="btn btn-info btn-icon btn-icon-standalone">
					<i class="fa-plus-circle"></i>
					<span>Add Team</span>
				</button>
			</a>
		</div>
	</div>
</div>

<div class="modal fade" id="add_team">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add Inspection Team</h4>
			</div>
			
			<div class="modal-body">
			
				<div class="row">
					<div class="col-md-12">
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#data_user").select2({
									minimumInputLength: 1,
									placeholder: 'Search',
									ajax: {
										url: "data/data_user.php",
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
						<input type="hidden" class="form-control validasi" name="data_user" id="data_user" data-validate="required" data-message-required="Please Input Data User Team." placeholder="Select User Team" />
						
						
					</div>
				</div>
			
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info">Save changes</button>
			</div>
		</div>
	</div>
</div>


<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b>PART TO INSPECTION</b>
		
		</div>
		
		<div class="panel-body">
			<div class="table-responsive"> 
				<table class="table table-model-2 table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th width="5%">Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Belt Conveyor</td>
							<td>
								<center>
									<div class="style-radio">
										<input type="checkbox" name="radio" id="toggle-1.1" class="checkbox status-inspect" disabled />
										<label class="label-radio waiting-step" for="toggle-1.1">Waiting</label>
									</div>
								</center>
							</td>
						</tr>
						
						<tr>
							<td>2</td>
							<td>Frame</td>
							<td>
								<center>
									<div class="style-radio">
										<input type="checkbox" name="radio" id="toggle-1.2" class="checkbox status-inspect" disabled/>
										<label class="label-radio waiting-step" for="toggle-1.2">Waiting</label>
									</div>
								</center>
							</td>
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>

		<div class="panel-heading">
			<a href="javascript:;" onclick="jQuery('#add_part_to_inspection').modal('show', {backdrop: 'static'});" class="float-left">
				<button class="btn btn-info btn-icon btn-icon-standalone">
					<i class="fa-plus-circle"></i>
					<span>Add Part To Inspection</span>
				</button>
			</a>
		</div>
	</div>
	
</div>



<div class="modal fade" id="add_part_to_inspection">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add Part Inspection</h4>
			</div>
			
			<div class="modal-body">
			
				<div class="row">
					<div class="col-md-12">
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#data_part").select2({
									minimumInputLength: 1,
									placeholder: 'Search',
									ajax: {
										url: "data/data_part.php",
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
						<input type="hidden" class="form-control validasi" name="data_part" id="data_part" data-validate="required" data-message-required="Please Input Data Part Inspection." placeholder="Select Part Inspection" />
						
						
					</div>
				</div>
			
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info">Save changes</button>
			</div>
		</div>
	</div>
</div>