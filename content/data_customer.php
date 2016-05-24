<div class="page-title">
	<div class="title-env">
		<h1 class="title">Data Customer </h1>
		<p class="description">Seluruh Data Customer </p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>	
			<li class="active">
				<strong>Data Customer</strong>
			</li>
		</ol>	
	</div>
</div>

<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Data Customer</h3>
				
				<div class="panel-options">
					<a href="home.php?page=add_customer">
						<button class="btn btn-primary btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Add Customer</span>
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
						{column_number : 1},
						{column_number : 2},
					]);
				});
				</script>

				<div class="table-responsive"> 
					<table class="table table-striped table-bordered" id="customer">
						<thead>
							<tr class="replace-inputs">
								<th><center>Customer Name</center></th>
								<th><center>CO Type</center></th>
								<th><center>Status</center></th>
								<th width="15%"><center>Action</center></th>
							</tr>
						</thead>
						<tbody>
						    <?php for($i=1; $i<100; $i++){ ?>
								<tr>
									<td>FREEPORT INDONESIA <?=$i?></td>
									<td class="center">PT</td>
									<td class="center">Active</td>
									<td>
										<center>
											<a href="home.php?page=edit_customer" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
											</a>
											<a href="home.php?page=view_customer" class="btn btn-info btn-sm btn-icon icon-left">
												Profile
											</a>
										</center>
									</td>
								</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr class="replace-inputs">
								<th>Customer Name</th>
								<th>CO Type</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
</div>