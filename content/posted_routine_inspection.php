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
			<!-- <div class="table-responsive">  -->
			<form role="form" id="form1" method="post" class="validate">
				<table class="table">
					<thead>
						<tr>
							<th class="col-md-2">Date</th>
							<th class="col-md-4"> 2013-08-02,2013-08-15
							</th>
							<th class="col-md-2">Only Weekday</th>
							<th class="col-md-4">
								<div class="style-radio">
									<input type="checkbox" name="radio" id="toggle-1.1" class="checkbox" disabled />
									<label class="label-radio default-checkbox" for="toggle-1.1">Only Weekday</label>
								</div>
							</th>
						</tr>
						<tr>
							<th class="col-md-2">Customer / Site</th>
							<th class="col-md-4" colspan="4">
								HOLCIM INDOCEMENT, PT / NAROGONG	
							</th>
						</tr>


						<tr>
							<th class="col-md-2">Conveyor</th>
							<th class="col-md-4">
								NRG-0001
							</th>
							
						</tr>
						


						<tr>
							<th class="col-md-2">Routine Interval</th>
							<th class="col-md-10" colspan="4">
								<div class="label label-danger">30 Day</div>
							</th>
						</tr>
						<tr>
							<th class="col-md-2">Action Type</th>
							<th class="col-md-10" colspan="4">
								Inspection
							</th>
						</tr>
						<tr>
							<th class="col-md-2" >Doc No</th>
							<th class="col-md-10" colspan="4">
								#HOL/NRG/001
							</th>
						</tr>
					</thead>
				</table>
			</form>
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