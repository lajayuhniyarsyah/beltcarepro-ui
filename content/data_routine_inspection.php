<div class="page-title">
	<div class="title-env">
		<h1 class="title">FREEPORT INDONESIA,PT </h1>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li class="active">
				<a href="home.php?page=data_routine_inspection">Data Routine Inspection </a>
			</li>
		</ol>

	</div>
</div>

	
<div class="col-md-12">				
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">LIST ROUTINE INSPECTION </h3>
			<div class="panel-options">
				<a href="home.php?page=add_routine_inspection">
					<button class="btn btn-primary btn-icon btn-icon-standalone">
						<i class="fa-plus-circle"></i>
						<span>Add Routine Action</span>
					</button>
				</a>
			</div>
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
							<th><center>Doc No</center></th>
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
							<td class="center">Posted</td>
							<td class="center">
								<center>
									<a href="home.php?page=posted_routine_inspection" class="btn btn-secondary btn-sm btn-icon icon-left">
									View
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
							<td class="center">Posted</td>
							<td class="center">
								<center>
									<a href="home.php?page=posted_routine_inspection" class="btn btn-secondary btn-sm btn-icon icon-left">
									View
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
							<td class="center">Posted</td>
							<td class="center">
								<center>
									<a href="home.php?page=posted_routine_inspection" class="btn btn-secondary btn-sm btn-icon icon-left">
									View
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
									<a href="home.php?page=view_routine_inspection" class="btn btn-gray btn-sm btn-icon icon-left">
									 View
									</a>
								</center>
							</td>
						</tr>
						<tr>
							<td>HOL/NRG/005</td>
							<td>HOLCIM, PT</td>
							<td>NAROGONG </td>
							<td>NRG002</td>
							<td>2016/04/15</td>
							<td class="center">Corrective </td>
							<td class="center">Posted</td>
							<td class="center">
								<center>
									<a href="home.php?page=posted_routine_inspection" class="btn btn-secondary btn-sm btn-icon icon-left">
									View
									</a>
								</center>
							</td>
						</tr>
						<tr>
							<td>HOL/NRG/006</td>
							<td>HOLCIM, PT</td>
							<td>NAROGONG </td>
							<td>NRG003</td>
							<td>2016/04/15</td>
							<td class="center">Corrective </td>
							<td class="center">Draft</td>
							<td class="center">
								<center>
									<a href="home.php?page=view_routine_inspection" class="btn btn-danger btn-sm btn-icon icon-left">
									 Update
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