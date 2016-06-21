<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create New Frame Roller Queue</h1>
		<p class="description">Pages user New Frame Roller Queue</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_frame_roller_queue">Data Frame Roller Queue</a>
			</li>
			<li class="active">
				<strong>Create Frame Roller Queue</strong>
			</li>
		</ol>

	</div>
</div>
			
<div class="row">
	<div class="col-sm-12">
	<form role="form" id="form1" method="post" class="validate form-horizontal label-left">

		<div class="panel panel-default">
			<div class="panel-heading">
				<ul class="crumbs2">
					<li class="first"><a href="#">Draft</a></li>
					<li><a href="#">Scheduled</a></li>
					<li><a href="#" class="active">On Progress</a></li>
					<li class="last"><a href="#">Done</a></li>				
				</ul>
				<div style="clear:both"></div>
				<h3 class="panel-title font-bold">FORM FRAME ROLLER QUEUE</h3>
			</div>
			<div class="panel-body">

					<div class="form-group">
						<label class="col-sm-1 control-label" for="field-1">Frame Qty</label>
						<div class="col-sm-2">
							<input type="text" 
							class="form-control validasi" 
							name="name" 
							data-validate="required" 
							data-message-required="Please Input Frame Qty." placeholder="Frame Qty" data-mask="999" />
						</div>
					</div>


					<div class="table-responsive"> 
						<table class="table table-striped" id="example-2">
							<thead>
								<tr>
									<th>Frame Start</th>
									<th>Frame End</th>
									<th>Roller Type</th>
									<th>Qty Per Frame</th>
								</tr>
							</thead>
							<tbody class="middle-align">
								<tr>
									<td>1</td>
									<td>50</td>
									<td>Carry Roller</td>
									<td>3</td>
								</tr>
								<tr>
									<td>51</td>
									<td>80</td>
									<td>Return Roller</td>
									<td>2</td>
								</tr>
							</tbody>
						</table>
					</div>
					<a href="javascript:;" onclick="jQuery('#create-frame-roller-queue').modal('show', {backdrop: 'static'});">
						<button class="btn btn-info btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Add Roller</span>
						</button>
					</a>
		
			</div>

			<div class="panel-heading">
				<div class="panel-options">
					<a href="#">
						<button class="btn btn-primary btn-icon btn-icon-standalone error_validasi">
							<i class="fa-check"></i>
							<span>Process Roller Queue</span>
						</button>
					</a>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>



<div class="modal fade" id="create-frame-roller-queue">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add Roller Queue</h4>
			</div>
			
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Frame List</label>		
							<div class="input-group input-group-sm input-group-minimal">
								<div class="col-xs-6">
									<input type="text" class="form-control" name="start" data-mask="999" placeholder="Start" style="margin-left:-15px;" />
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" name="end" data-mask="999" placeholder="End"/> 
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-12">
						<div class="form-group no-margin">
							<label for="field-7" class="control-label">Roller Type</label>
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#data-roller").selectBoxIt().on('open', function()
									{
										// Adding Custom Scrollbar
										$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
									});
								});
							</script>
							<select class="form-control" id="data-roller">
								<option value="">Please Select Roller Type..............!</option>
								<option value="1">Carry Roller</option>
								<option value="2">Return Roller</option>
							</select>
							<br/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group no-margin">
							<label for="field-7" class="control-label">Roller Qty Per Frame</label>
							<div class="input-group input-group-sm input-group-minimal">
								<span class="input-group-addon">
									<i class="fa-sort-numeric-desc"></i>
								</span>
								<input type="text" class="form-control"  data-mask="999" placeholder="Roller Per Frame" />
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info">Add Roller</button>
			</div>
		</div>
	</div>
</div>

