<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create New Work Step</h1>
		<p class="description">Pages Create Work Step</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_work_step">Data Work Type</a>
			</li>
			<li class="active">
				<strong>Create Work Type</strong>
			</li>
		</ol>

	</div>
</div>
			
<div class="row">
	<div class="col-sm-12">
	<form role="form" id="form1" method="post" class="validate form-horizontal">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title font-bold">FORM CREATE WORK STEP</h3>
				<div class="panel-options">
					<a href="#">
						<button class="btn btn-info btn-icon btn-icon-standalone error_validasi">
							<i class="fa-plus-circle"></i>
							<span>Create Work Step</span>
						</button>
					</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="form-group-separator"></div>
						<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Work Name <span class="font-red"> * </span></label>
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#id_work").select2({
										minimumInputLength: 1,
										placeholder: 'Search',
										ajax: {
											url: "data/data_work.php",
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
							<input type="hidden" name="id_work" id="id_work" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">Name <span class="font-red"> * </span></label>
						<div class="col-sm-10">
							<input type="text" class="form-control validasi" name="name" data-validate="required" data-message-required="Please Input Work Step Name."/>
						</div>
					</div>

					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Description <span class="font-red"> * </span></label>
						<div class="col-sm-10">
							<textarea class="form-control" cols="5" id="field-5" name="desc"></textarea>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">Seq</label>
						<div class="col-sm-10">
							<input type="text" class="form-control validasi" name="seq" data-validate="required" data-message-required="Please Input Seq." />
						</div>
					</div>
					
					
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Active</label>

						<div class="col-sm-10">
							<input type="checkbox" checked class="iswitch">
						</div>
					</div>
			</div>
			
		</div>
		</form>
	</div>
</div>


