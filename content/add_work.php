<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create New Work</h1>
		<p class="description">Pages user admin create new Work</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_work">Data Work</a>
			</li>
			<li class="active">
				<strong>Create Work</strong>
			</li>
		</ol>
	</div>
</div>
			
<div class="row">
	<div class="col-sm-12">
	<form role="form" id="form1" method="post" class="validate form-horizontal">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title font-bold">FORM CREATE WORK</h3>
				<div class="panel-options">
					<a href="#">
						<button class="btn btn-info btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Create Work</span>
						</button>
					</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-sm-2 control-label" for="field-1">Work Name<span class="font-red"> * </span></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" data-validate="required" data-message-required="Please Input Brand Name." placeholder="Brand Name" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="field-5">Type <span class="font-red"> * </span></label>
					<script type="text/javascript">
						jQuery(document).ready(function($)
						{
							$("#type").selectBoxIt().on('open', function()
							{
								// Adding Custom Scrollbar
								$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
							});
						});
					</script>
					<div class="col-sm-10">
						<select class="form-control" id="type">
							<option value="">Please Select Type......</option>
							<option value="repair">Repair</option>
							<option value="replace">Replace</option>
						</select>
					</div>
				</div>

				<div class="form-group-separator"></div>
						<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Part <span class="font-red"> * </span></label>
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#id_part").select2({
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
						<div class="col-sm-10">
							<input type="hidden" name="id_part" id="id_part" />
						</div>
					</div>
			</div>
		</div>
		</form>
	</div>
</div>
</div>

