<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create New Brand</h1>
		<p class="description">Pages user admin create new Brand</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_brand">Data Brand</a>
			</li>
			<li class="active">
				<strong>Create Brand</strong>
			</li>
		</ol>
	</div>
</div>
			
<div class="row">
	<div class="col-sm-12">
	<form role="form" id="form1" method="post" class="validate form-horizontal">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title font-bold">FORM CREATE BRAND</h3>
				<div class="panel-options">
					<a href="#">
						<button class="btn btn-info btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Create Brand</span>
						</button>
					</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-sm-2 control-label" for="field-1">Brand Name<span class="font-red"> * </span></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" data-validate="required" data-message-required="Please Input Brand Name." placeholder="Brand Name" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" for="field-1">Active</label>
					<div class="col-sm-10">
						<input type="checkbox" checked class="iswitch">	
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
</div>

