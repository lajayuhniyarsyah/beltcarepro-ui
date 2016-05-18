<div class="page-title">
	<div class="title-env">
		<h1 class="title">List Schedule Action FREEPORT INDONESIA,PT </h1>
		<p class="description">Pages Action</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li class="active">
				<a href="home.php?page=data_conveyor">Data Action </a>
			</li>
		</ol>

	</div>
</div>

<div class="col-md-12">	
	<div class="panel panel-color panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">ACTION STATUS FREEPORT INDONESIA,PT </h3>
		</div>

	<div class="panel-body">
		<div class="row">
			<div class="col-sm-5">
				<div class="xe-widget xe-counter" data-count=".num" data-from="0" data-to="2000" data-suffix="" data-duration="2">
					<div class="xe-icon">
						<i class="linecons-star"></i>
					</div>
					<div class="xe-label">
						<strong class="num">0.0%</strong>
						<span class="widget-list">Actions to do On This year</span>
					</div>
				</div>

				<div class="xe-widget xe-counter xe-counter-blue" data-count=".num" data-from="0" data-to="90" data-suffix="" data-duration="2">
					<div class="xe-icon">
						<i class="linecons-calendar"></i>
					</div>
					<div class="xe-label">
						<strong class="num">0.0%</strong>
						<span class="widget-list">Actions To Do on last 3 Month</span>
					</div>
				</div>


				<div class="xe-widget xe-counter xe-counter-red" data-count=".num" data-from="0" data-to="2" data-suffix="" data-duration="2">
					<div class="xe-icon">
						<i class="linecons-clock"></i>
					</div>
					<div class="xe-label">
						<strong class="num">0.0%</strong>
						<span class="widget-list">Actions To Do on This Day</span>
					</div>
				</div>
			</div>
			<div class="col-sm-7">
				<strong class="text-primary h3">FREEPORT INDONESIA, PT</strong>
				<br />
				<br />
				<p>Detail Action Status Schedule <b>FREEPORT INDONESIA, PT</b></p>
				
				<div class="vspacer v3"></div>
				
				<div class="label label-blue judul-action"> <i class="linecons-calendar"></i> 90 Action To Do on last 3 Month</div>
			
				<ul class="list-unstyled list-margin ul-margin-left">
					<li> <strong>80</strong> Action Closed</li>
					<li><strong>1</strong> Action Canceled</li>
					<li><strong>2</strong> On Progress</li>
					<li><strong>7</strong> Action Overdue</li>
					<li>
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-info" style="width: 42.5%;"></div>
						</div>
					</li>
				</ul>
				
				
				<div class="label label-red judul-action"><i class="linecons-clock"></i>2 Actions To Do on This Day</div>

				<ul class="list-unstyled list-margin ul-margin-left">
					<li><strong>1</strong> Actions On Progress</li>
					<li>
						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-red" style="width: 50%;"></div>
						</div>
					</li>
				</ul>
				
			</div>
		</div>

	</div>

	</div>
</div>
	
<div class="col-md-12">				
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">List Action</h3>
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
							<!-- <a href="home.php?page=add_inspection" class="btn btn-secondary btn-sm btn-icon icon-left">
							Inspection View
							</a> -->
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
					<td>HOL/NRG/006</td>
					<td>HOLCIM, PT</td>
					<td>NAROGONG </td>
					<td>NRG003</td>
					<td>2016/04/15</td>
					<td class="center">Corrective </td>
					<td class="center">Scheduled</td>
					<td class="center">
						<center>
							<a href="home.php?page=add_inspection" class="btn btn-danger btn-sm btn-icon icon-left">
							Inspection Action
							</a>
						</center>
					</td>
				</tr>
			</tbody>
		</table>
					
		</div>
	</div>
</div>