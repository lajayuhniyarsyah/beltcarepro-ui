<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create New Customer</h1>
		<p class="description">Pages user admin create new customer</p>
	</div>

	<div class="breadcrumb-env">

		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_customer">Data Customer</a>
			</li>
			<li class="active">
				<strong>Detail Customer</strong>
			</li>
		</ol>

	</div>
</div>
			
			<div class="row">
				<div class="col-sm-12">
			
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">VIEW CUSTOMER</h3>
							<div class="panel-options">
						</div>
						</div>
						<div class="panel-body">
			
							<form role="form" class="form-horizontal" role="form">
			
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Customer Name</label>
			
									<div class="col-sm-10">
										<input type="text" class="form-control" id="field-1" name="name" placeholder="Placeholder">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-5">CO Type</label>
									<script type="text/javascript">
										jQuery(document).ready(function($)
										{
											$("#sboxit-1").selectBoxIt().on('open', function()
											{
												// Adding Custom Scrollbar
												$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
											});
										});
									</script>
									<div class="col-sm-10">
										<select class="form-control" id="sboxit-1">
											<option value="PT">PT</option>
											<option value="CV">CV</option>
										</select>
									</div>
								</div>
			
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-5">Description</label>
			
									<div class="col-sm-10">
										<textarea class="form-control" cols="5" id="field-5" name="desc"></textarea>
									</div>
								</div>
			
								

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-5">Active</label>
			
									<div class="col-sm-10">
										<input type="checkbox" checked class="iswitch">
									</div>
								</div>
							</form>
			
						</div>
						<div class="panel-heading">
							<div class="panel-options">
							<a href="home.php?page=add_customer">
								<button class="btn btn-info btn-icon btn-icon-standalone">
									<i class="fa-plus-circle"></i>
									<span>Create Customer</span>
								</button>
							</a>
						</div>
						</div>
					</div>
			
				</div>
			</div>