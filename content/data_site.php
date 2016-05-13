<div class="page-title">
	<div class="title-env">
		<h1 class="title">Data Customer Site </h1>
		<p class="description">Seluruh Data Customer Site </p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>	
			<li class="active">
				<strong>Data Site</strong>
			</li>
		</ol>	
	</div>
</div>

<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Data Customer Site</h3>
				
				<div class="panel-options">
					<a href="home.php?page=add_customer_site">
						<button class="btn btn-primary btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Add Customer Site</span>
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
						{column_number : 2},
					]);
				});
				</script>
				
				<table class="table table-striped table-bordered" id="customer">
					<thead>
						<tr class="replace-inputs">
							<th><center>Customer Site</center></th>
							<th><center>Customer Name</center></th>
							<th><center>Status</center></th>
							<th width="15%"><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
					    <?php for($i=1; $i<100; $i++){ ?>
							<tr>
								<td>SITE  <?=$i?></td>
								<td>FREEPORT INDONESIA <?=$i?></td>
								<td class="center">Active</td>
								<td>
									<center>
										<a href="home.php?page=edit_customer" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
										</a>
										<a href="home.php?page=view_site" class="btn btn-info btn-sm btn-icon icon-left">
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