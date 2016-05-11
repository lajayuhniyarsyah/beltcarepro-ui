<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create New Conveyor Asset </h1>
		<p class="description">Pages user admin create new Conveyor Asset</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_area">Data Conveyor Asset </a>
			</li>
			<li class="active">
				<strong>Create Conveyor Asset</strong>
			</li>
		</ol>

	</div>
</div>
			
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title font-bold">FORM CREATE CONVEYOR ASSET</h3>
				<div class="panel-options">
					<a href="#">
						<button class="btn btn-info btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Create Conveyor Asset</span>
						</button>
					</a>
				</div>
			</div>
			<div class="panel-body">
				<form role="form" class="form-horizontal" role="form">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">Part</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="field-1" name="name" placeholder="Part Conveyor">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">Code</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="field-1" name="name" placeholder="Code Conveyor">
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
		

					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">Conveyor Name</label>
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
						<div class="col-sm-10">
							<input type="hidden" name="data_conveyor" id="data_conveyor" />
						</div>
					</div>


					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Brand</label>
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#brand").selectBoxIt().on('open', function()
								{
									// Adding Custom Scrollbar
									$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
								});
							});
						</script>
						<div class="col-sm-10">
							<select class="form-control" id="brand">
								<option value="PT">MARTIN</option>
								<option value="CV">REMA TIP TOP</option>
							</select>
						</div>
					</div>

					<div class="form-group-separator"></div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Status</label>
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#status").selectBoxIt().on('open', function()
								{
									// Adding Custom Scrollbar
									$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
								});
							});
						</script>
						<div class="col-sm-10">
							<select class="form-control" id="status">
								<option value="good">GOOD</option>
								<option value="lvl1">LEVEL 1</option>
								<option value="lvl2">LEVEL 2</option>
								<option value="lvl3">LEVEL 3</option>
								<option value="lvl4">LEVEL 4</option>
							</select>
						</div>
					</div>

					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Active</label>

						<div class="col-sm-10">
							<input type="checkbox" checked class="iswitch">
						</div>
					</div>
				</form>
		
			</div>
			
		</div>

	</div>
</div>



</div>

