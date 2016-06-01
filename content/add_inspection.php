<div class="page-title">
	<div class="title-env">
		<h1 class="title">Action Inspection View</h1>
		<p class="description">Detail Schedule Action Inspection View Customer Freeport Indonesia, PT <b>4 April 2016</b></p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_action">Data Schedule Action</a>
			</li>
			<li class="active">
				<strong>Inspection View</strong>
			</li>
		</ol>

	</div>
</div>

<div class="col-md-12">
	<div class="panel panel-color panel-info"><!-- Add class "collapsed" to minimize the panel -->
		<div class="panel-heading">
			<h3 class="panel-title"><b>Action #HOL/NRG/006</b></h3>			
			<div class="panel-options">
				
			</div>
		</div>
		<div class="panel-body">
			<div class="table-responsive"> 
				<table class="table">
					<thead>
						<tr>
							<th class="col-md-2">Date</th>
							<th class="col-md-5">
								<div class="input-group">
									<input type="text" class="form-control datepicker" data-format="dd MM yyyy" value="4/1/2016" disabled>
										<div class="input-group-addon">
											<a href="#"><i class="linecons-calendar"></i></a>
										</div>
									</div>
							</th>
							<th class="col-md-2">Doc No</th>
							<th class="col-md-3">
								<input type="text" name="doc_no" id="doc_no" class="form-control" value="Contract No 1/XII/15" disabled/>
							</th>
						</tr>
						<tr>
							<th class="col-md-2">Site / Project</th>
							<th class="col-md-5">
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
								<input type="hidden" class="form-control validasi" name="data_customer" id="data_customer" data-validate="required" value="" data-message-required="Please Input Data Customer." placeholder="NAROGONG / HOLCIM,PT" disabled />
							</th>
							<th class="col-md-2">Action Ref</th>
							<th class="col-md-3">: <a href="#"><div class="label label-danger">#HOL/NRG/11111</div></a></th>
						</tr>
						<tr>
							<th class="col-md-2">Conveyor</th>
							<th class="col-md-10" colspan="4">
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
								<input type="hidden" name="data_conveyor" id="data_conveyor" placeholder="NRG00001" /></th>
						</tr>
						<tr>
							<th class="col-md-2">Action Type</th>
							<th class="col-md-10" colspan="4">
							<script type="text/javascript">
									jQuery(document).ready(function($)
									{
										$("#type").selectBoxIt().on('open', function()
										{
											$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
										});
									});
								</script>
								<select class="form-control" id="type" disabled>
									<option value="inspection">Inspection</option>
									<option value="corrective">Corrective</option>
									<option value="proactive">Proactive</option>
								</select>
								</th>
						</tr>
						<tr>
							<th class="col-md-2" style="vertical-align:top">Notes</th>
							<th class="col-md-10" colspan="4">
							<textarea class="form-control" cols="5" id="field-5" name="notes" disabled>Some notes here Maybe it can multilines Please prepare it Some</textarea>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="col-md-12">
				
	<!-- Default panel -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<b>INSPECTION TEAM</b>
			<a href="javascript:;" onclick="jQuery('#add_team').modal('show', {backdrop: 'static'});" class="float-right">
				<button class="btn btn-info btn-icon btn-icon-standalone">
					<i class="fa-plus-circle"></i>
					<span>Add Team</span>
				</button>
			</a>
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
										<input type="checkbox" name="radio" id="toggle-1.1" class="checkbox status-inspect" checked />
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
										<input type="checkbox" name="radio" id="toggle-1.2" class="checkbox status-inspect" checked/>
										<label class="label-radio waiting-step" for="toggle-1.2">Waiting</label>
									</div>
								</center>
							</td>
						</tr>
						
						<tr>
							<td>3</td>
							<td>Roller</td>
							<td>
								<center>
									<div class="style-radio">
										<input type="checkbox" name="radio" id="toggle-1.3" class="checkbox status-inspect"/>
										<label class="label-radio waiting-step" for="toggle-1.3">Waiting</label>
									</div>
								</center>
							</td>
						</tr>

						<tr>
							<td>4</td>
							<td>Pulley</td>
							<td>
								<center>
									<div class="style-radio">
										<input type="checkbox" name="radio" id="toggle-1.4" class="checkbox status-inspect"/>
										<label class="label-radio waiting-step" for="toggle-1.4">Waiting</label>
									</div>
								</center>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="panel-heading">
			<div class="panel-options">
				<a href="home.php?page=add_do_inspection">
					<button class="btn btn-primary btn-icon btn-icon-standalone">
						<i class="fa-play-circle-o"></i>
						<span>Do Inspection</span>
					</button>
				</a>
			</div>
		</div>
	</div>
	
</div>


