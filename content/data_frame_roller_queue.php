<div class="page-title">
	<div class="title-env">
		<h1 class="title">Data Frame Roller Queue</h1>
		<p class="description">Detail Frame Roller Queue</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>	
			<li class="active">
				<strong>Data Frame Roller Queue</strong>
			</li>
		</ol>	
	</div>
</div>

<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Data Frame Roller Queue</h3>
				<div class="panel-options">
					<a href="home.php?page=add_frame_roller_queue">
						<button class="btn btn-primary btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Add Frame Roller Queue</span>
						</button>
					</a>
				</div>
			</div>
			<div class="panel-body">
				
				<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					$("#part").dataTable().yadcf([
						{column_number : 0, filter_type: 'text'},
						{column_number : 1},
					]);
				});
				</script>
				
				<div class="table-responsive"> 
					<table class="table table-striped table-bordered" id="part">
						<thead>
							<tr class="replace-inputs">
								<th><center>Frame Qty</center></th>
								<th><center>State</center></th>
								<th width="15%"><center>Action</center></th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td>100</td>
									<td>Draft</td>
									<td>
										<center>
											<a href="home.php?page=edit_frame_roller_queue" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
											</a>
											<a href="home.php?page=view_frame_roller_queue" class="btn btn-info btn-sm btn-icon icon-left">
												Profile
											</a>
										</center>
									</td>
								</tr>
								<tr>
									<td>200</td>
									<td>Draft</td>
									<td>
										<center>
											<a href="home.php?page=edit_frame_roller_queue" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
											</a>
											<a href="home.php?page=view_frame_roller_queue" class="btn btn-info btn-sm btn-icon icon-left">
												Profile
											</a>
										</center>
									</td>
								</tr>
								<tr>
									<td>100</td>
									<td>Deactive</td>
									<td>
										<center>
											<a href="home.php?page=edit_frame_roller_queue" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
											</a>
											<a href="home.php?page=view_frame_roller_queue" class="btn btn-info btn-sm btn-icon icon-left">
												Profile
											</a>
										</center>
									</td>
								</tr>
								<tr>
									<td>100</td>
									<td>Posted</td>
									<td>
										<center>
											<a href="home.php?page=edit_frame_roller_queue" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
											</a>
											<a href="home.php?page=view_frame_roller_queue" class="btn btn-info btn-sm btn-icon icon-left">
												Profile
											</a>
										</center>
									</td>
								</tr>
						</tbody>
					</table>
				</div>
			</div>
</div>