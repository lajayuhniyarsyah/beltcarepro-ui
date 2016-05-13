<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create New Part Type</h1>
		<p class="description">Pages user admin create new Part Type</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_part_type">Data Part Type</a>
			</li>
			<li class="active">
				<strong>Create Part Type</strong>
			</li>
		</ol>
	</div>
</div>
			
<div class="row">
	<div class="col-sm-12">
	<form role="form" id="form1" method="post" class="validate form-horizontal">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title font-bold">FORM CREATE PART TYPE</h3>
				<div class="panel-options">
					<a href="#">
						<button class="btn btn-info btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Create Part type</span>
						</button>
					</a>
				</div>
			</div>
			<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">Part Type Name<span class="font-red"> * </span></label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="Please Input Part Name." placeholder="Part Name" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">Part Type Code <span class="font-red"> * </span></label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="code" data-validate="required" data-message-required="Please Input Part Code." placeholder="Part Code" />
						</div>
					</div>

			</div>
			
		</div>
		</form>
	</div>
</div>



</div>

