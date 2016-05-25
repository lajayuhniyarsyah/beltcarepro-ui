<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create New Conveyor Part </h1>
		<p class="description">Pages user admin create new Conveyor Part</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_part">Data Conveyor Part </a>
			</li>
			<li class="active">
				<strong>Create Conveyor Part</strong>
			</li>
		</ol>
	</div>
</div>
			
<div class="row">
	<div class="col-sm-12">
	<form role="form" id="form1" method="post" class="validate form-horizontal">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title font-bold">FORM CREATE CONVEYOR PART</h3>
				<div class="panel-options">
					<a href="#">
						<button class="btn btn-info btn-icon btn-icon-standalone error_validasi">
							<i class="fa-plus-circle"></i>
							<span>Create Conveyor Part</span>
						</button>
					</a>
				</div>
			</div>
			<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">Part Name<span class="font-red"> * </span></label>
						<div class="col-sm-10">
							<input type="text" class="form-control validasi" name="name" data-validate="required" data-message-required="Please Input Part Name." placeholder="Part Name" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">Part Code <span class="font-red"> * </span></label>
						<div class="col-sm-10">
							<input type="text" class="form-control validasi" name="code" data-validate="required" data-message-required="Please Input Part Code." placeholder="Part Code" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Icon</label>
						<div class="col-sm-10">
							<input type="file" class="form-control" id="field-4">
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Important Level <span class="font-red"> * </span></label>
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#level").selectBoxIt().on('open', function()
								{
									// Adding Custom Scrollbar
									$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
								});
							});
						</script>
						<div class="col-sm-10">
							<select class="form-control validasi" name="level" id="level" data-validate="required" data-message-required="Please Input level.">
								<option value="">Please Select level......</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>
					</div>

					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Point<span class="font-red"> * </span></label>
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#point").selectBoxIt().on('open', function()
								{
									// Adding Custom Scrollbar
									$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
								});
							});
						</script>
						<div class="col-sm-10">
							<select class="form-control validasi" name="point" id="point" data-validate="required" data-message-required="Please Input Point.">
								<option value="">Please Select Point......</option>
								<option value="10">10</option>
								<option value="8">8</option>
								<option value="5">5</option>
								<option value="1">1</option>
							</select>
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-5">Depend Part</label>
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#depand").select2({
									placeholder: 'Select your Depend Part...',
									allowClear: true
								}).on('select2-open', function()
								{
									// Adding Custom Scrollbar
									$(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
								});
								
							});
						</script>
						<div class="col-sm-10">
							<select class="form-control" id="depand">
								<option value="">Please Select Part Type......</option>
								<option value="1">ROLLER</option>
								<option value="2">BELT</option>
								<option value="3">PULLEY</option>
								<option value="4">CLEANER</option>
							</select>
						</div>
					</div>

			</div>
			
		</div>
		</form>
	</div>
</div>



</div>

