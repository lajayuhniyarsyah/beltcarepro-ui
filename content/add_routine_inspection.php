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
	<div class="panel panel-color panel-info"><!-- Add class "collapsed" to minimize the panel -->
		<div class="panel-heading">
			<h3 class="panel-title"><b>FORM CREATE RUOTINE INSPECTION</b></h3>			
			
		</div>
		<div class="panel-body">
			<!-- <div class="table-responsive">  -->
			<form role="form" id="form1" method="post" class="validate">
				<table class="table">
					<thead>
						<tr>
							<th class="col-md-2">Date</th>
							<th class="col-md-4">	
								<input type="text" id="field-2" class="form-control daterange" data-format="YYYY-MM-DD" data-start-date="2013-08-02" data-end-date="2013-08-15" data-separator="," />
							</th>
							<th class="col-md-2">Only Weekday</th>
							<th class="col-md-4">
								<div class="style-radio">
									<input type="checkbox" name="radio" id="toggle-1.1" class="checkbox"/>
									<label class="label-radio default-checkbox" for="toggle-1.1">Only Weekday</label>
								</div>
							</th>
						</tr>
						<tr>
							<th class="col-md-2">Customer</th>
							<th class="col-md-4" colspan="4">
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
							</th>
						</tr>


						<tr>
							<th class="col-md-2">Site</th>
							<th class="col-md-4">
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
							</th>
							<th class="col-md-2">Conveyor</th>
							<th class="col-md-4">
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
							</th>
						</tr>
						


						<tr>
							<th class="col-md-2">Routine Interval</th>
							<th class="col-md-10" colspan="4"><input type="text" class="form-control" name="number" data-validate="number" value="10" /></th>
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
								<select class="form-control" id="type">
									<option value="">Please Select Type......</option>
									<option value="inspection">Inspection</option>
									<option value="corrective">Corrective</option>
									<option value="proactive">Proactive</option>
								</select>
							</th>
						</tr>
						<tr>
							<th class="col-md-2" >Doc No</th>
							<th class="col-md-10" colspan="4">
								<input type="text" class="form-control" name="code" data-validate="required" data-message-required="Please Input Document No"/>
							</th>
						</tr>
					</thead>
				</table>
			</form>
			<!-- </div> -->
		</div>
			<div class="panel-options">
				<a href="#" class="float-right">
					<button class="btn btn-info btn-icon btn-icon-standalone error_validasi">
						<i class="fa-plus-circle"></i>
						<span>Create Route Inspection</span>
					</button>
				</a>
			</div>
		<div class="form-group-separator"></div><br/><br/>
	</div>
</div>




