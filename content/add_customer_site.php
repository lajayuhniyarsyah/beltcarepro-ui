<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create New Customer Site</h1>
		<p class="description">Pages user admin create new customer site</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_site">Data Customer Site</a>
			</li>
			<li class="active">
				<strong>Create Customer Site</strong>
			</li>
		</ol>

	</div>
</div>
			
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title font-bold">FORM CREATE CUSTOMER SITE</h3>
				<div class="panel-options">
					<a href="#">
						<button class="btn btn-info btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Create Customer Site</span>
						</button>
					</a>
				</div>
			</div>
			<div class="panel-body">
				<form role="form" class="form-horizontal" role="form">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">Site Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="field-1" name="name" placeholder="Customer Site Name">
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
						<label class="col-sm-2 control-label" for="field-5">Customer Name</label>
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

