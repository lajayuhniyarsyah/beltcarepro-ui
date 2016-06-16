<div class="page-title">
	<div class="title-env">
		<h1 class="title">Detail View Routine Inspection Posted</h1>
		<p class="description">Detail View Routine Inspection Posted <b>4 April 2016 - 4 April 2017</b></p>
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
				<strong>Ruotine Inspection View Posted</strong>
			</li>
		</ol>

	</div>
</div>

<div class="col-md-12">
	<div class="panel panel-color panel-info"><!-- Add class "collapsed" to minimize the panel -->
		<div class="panel-heading">
			<h3 class="panel-title"><b>DETAIL ROUTINE INSPECTION </b></h3>			
				<div class="panel-options">
			</div>
		</div>
		<div class="panel-body">
		<ul class="crumbs2">
				<li class="first"><a href="#">Draft</a></li>
				<li><a href="#">Scheduled</a></li>
				<li><a href="#" class="active">On Progress</a></li>
				<li class="last"><a href="#">Done</a></li>				
			</ul>
			<br/><br/><br/>
			<!-- <div class="table-responsive">  -->
				<div class="panel-body">
			<!-- <div class="table-responsive">  -->
			<form role="form" id="form1" method="post" class="validate form-horizontal label-left">
				<div class="form-group required">
					<label class="col-sm-2 control-label" for="field-1">Date </label>
					<div class="col-sm-4">
						: 2013-08-02,2013-08-15
					</div>

					<label class="col-sm-2 control-label" for="field-1">Only Weekday</label>
					<div class="col-sm-4">
						<div class="style-radio" style="margin-top:-22px;">
							<input type="checkbox" name="radio" id="only_weekday" class="checkbox" disabled />
							<label class="label-radio default-checkbox" for="only_weekday">Only Weekday</label>
						</div>
					</div>
				</div>
				<div class="form-group-separator"></div>

				<div class="form-group required">
					<label class="col-sm-2 control-label" for="field-1">Customer</label>
					<div class="col-sm-4">
						: FREEPORT INDONESIA, PT
					</div>

					<label class="col-sm-2 control-label" for="field-1">Site </label>
					<div class="col-sm-4">
						: SITE NAROGONG
					</div>

				</div>
				<div class="form-group-separator"></div>

				<div class="form-group required">
					<label class="col-sm-2 control-label" for="field-1">Conveyor</label>
					<div class="col-sm-10">
						: CONV_NRG-0001
					</div>
				</div>
				<div class="form-group-separator"></div>



				<div class="form-group required">
					<label class="col-sm-2 control-label" for="field-1">Action Type</label>
					<div class="col-sm-4">
						: Inspection
					</div>
					<label class="col-sm-2 control-label" for="field-1">Interval</label>
					<div class="col-sm-4">
						: 10 Days
					</div>
				</div>
				<div class="form-group-separator"></div>

				<div class="form-group required">
					<label class="col-sm-2 control-label" for="field-1">Doc No</label>
					<div class="col-sm-10">
						: #HOL/NRG/002
					</div>
				</div>
				<div class="form-group-separator"></div>

			</form>
			<!-- </div> -->
		</div>
			<!-- </div> -->
		</div>
	</div>
</div>




<div class="col-md-12">				
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">LIST ROUTINE ACTION INSPECTION</h3>
		</div>
		<div class="panel-body">
			<script type="text/javascript">
			jQuery(document).ready(function($)
			{

				$("#action").dataTable().yadcf([
					// {column_number : 0, filter_type: 'text'},
					{column_number : 0, filter_type: 'text'},
					{column_number : 1, filter_type: 'text'},
					{column_number : 2, filter_type: 'text'},
					{column_number : 3, filter_type: 'text'},
					{column_number : 4, filter_type: 'range_date'},
					{column_number : 5},
					{column_number : 6},
				]);

			});
			</script>
			<div class="table-responsive"> 
				<table class="table table-striped table-bordered" id="action">
					<thead>
						<tr class="replace-inputs">
							<th><center>#No</center></th>
							<th><center>Customer</center></th>
							<th><center>Site</center></th>
							<th><center>Conveyor</center></th>
							<th><center>Date</center></th>
							<th><center>Type</center></th>
							<th><center>Status</center></th>
							<th><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>HOL/NRG/001</td>
							<td>HOLCIM, PT</td>
							<td>NAROGONG </td>
							<td>NRG001</td>
							<td>2016/04/04</td>
							<td class="center">Inspection </td>
							<td class="center">Done</td>
							<td class="center">
								<center>
									<a href="home.php?page=add_inspection" class="btn btn-secondary btn-sm btn-icon icon-left">
									Inspection View
									</a>
								</center>
							</td>
						</tr>
						<tr>
							<td>HOL/NRG/002</td>
							<td>HOLCIM, PT</td>
							<td>NAROGONG </td>
							<td>NRG001</td>
							<td>2016/04/07</td>
							<td class="center">Inspection </td>
							<td class="center">Done</td>
							<td class="center">
								<center>
									<a href="home.php?page=add_inspection" class="btn btn-secondary btn-sm btn-icon icon-left">
									Inspection View
									</a>
								</center>
							</td>
						</tr>
						<tr>
							<td>HOL/NRG/003</td>
							<td>HOLCIM, PT</td>
							<td>NAROGONG </td>
							<td>NRG001</td>
							<td>2016/04/11</td>
							<td class="center">Inspection </td>
							<td class="center">Done</td>
							<td class="center">
								<center>
									<a href="home.php?page=add_inspection" class="btn btn-secondary btn-sm btn-icon icon-left">
									Inspection View
									</a>
								</center>
							</td>
						</tr>
						<tr>
							<td>HOL/NRG/004</td>
							<td>HOLCIM, PT</td>
							<td>NAROGONG </td>
							<td>NRG002</td>
							<td>2016/04/13</td>
							<td class="center">Inspection </td>
							<td class="center">Cancel</td>
							<td class="center">
								<center>
									<a href="home.php?page=add_inspection" class="btn btn-gray btn-sm btn-icon icon-left">
									Inspection View
									</a>
								</center>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
					
		</div>
	</div>
</div>