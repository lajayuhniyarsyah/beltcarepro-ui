<div class="page-title">
	<div class="title-env">
		<h1 class="title">Data User </h1>
		<p class="description">Seluruh Data User</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>	
			<li class="active">
				<strong>Data User </strong>
			</li>
		</ol>	
	</div>
</div>

<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Data User</h3>
				
				<div class="panel-options">
					<a href="home.php?page=add_user">
						<button class="btn btn-primary btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Add User</span>
						</button>
					</a>
				</div>
			</div>
			<div class="panel-body">
				
				<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					$("#User").dataTable().yadcf([
						{column_number : 0, filter_type: 'text'},
						{column_number : 1},
						{column_number : 2, filter_type: 'text'},
						{column_number : 3, filter_type: 'text'},
						{column_number : 4},
					]);
				});
				</script>
				
				<table class="table table-striped table-bordered" id="User">
					<thead>
						<tr class="replace-inputs">
							<th><center>Name</center></th>
							<th><center>Position</center></th>
							<th><center>Customer</center></th>
							<th><center>Site</center></th>
							<th><center>User</center></th>
							<th width="15%"><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
					    <?php for($i=1; $i<10; $i++){ ?>
							<tr>
								<td>User Name <?=$i?></td>
								<td>Planner</td>
								<td>Freeport Indonesia, PT</td>
								<td>Site Bontang</td>
								<td class="center">True</td>
								<td>
									<center>
										<a href="home.php?page=edit_customer" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
										</a>
										<a href="home.php?page=view_user" class="btn btn-info btn-sm btn-icon icon-left">
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