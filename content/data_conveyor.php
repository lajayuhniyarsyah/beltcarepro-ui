<div class="page-title">
	<div class="title-env">
		<h1 class="title">Data Conveyor </h1>
		<p class="description">Seluruh Data Conveyor Customer </p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>	
			<li class="active">
				<strong>Data Conveyor Customer</strong>
			</li>
		</ol>	
	</div>
</div>

<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Data Conveyor Customer</h3>
				
				<div class="panel-options">
					<a href="home.php?page=add_conveyor">
						<button class="btn btn-primary btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Add Conveyor</span>
						</button>
					</a>
				</div>
			</div>
			<div class="panel-body">
				
				<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					$("#customer").dataTable().yadcf([
						{column_number : 0, filter_type: 'text'},
						{column_number : 1, filter_type: 'text'},
						{column_number : 2, filter_type: 'text'},
						{column_number : 3, filter_type: 'text'},
						{column_number : 4},
					]);
				});
				</script>
				<div class="table-responsive"> 
					<table class="table table-striped table-bordered" id="customer">
						<thead>
							<tr class="replace-inputs">
								<th><center>Code</center></th>
								<th><center>Customer Area</center></th>
								<th><center>Customer Site</center></th>
								<th><center>Customer Name</center></th>
								<th><center>Status</center></th>
								<th width="15%"><center>Action</center></th>
							</tr>
						</thead>
						<tbody>
						    <?php for($i=1; $i<100; $i++){ ?>
								<tr>
									<td>CODE 000<?=$i?></td>
									<td>AREA  <?=$i?></td>
									<td>SITE  <?=$i?></td>
									<td>FREEPORT INDONESIA <?=$i?></td>
									<td class="center">Active</td>
									<td>
										<center>
											<a href="home.php?page=edit_customer" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
											</a>
											<a href="home.php?page=view_conveyor" class="btn btn-info btn-sm btn-icon icon-left">
												Profile
											</a>
										</center>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				
			</div>
</div>