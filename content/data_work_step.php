<div class="page-title">
	<div class="title-env">
		<h1 class="title">Data Work Type </h1>
		<p class="description">Seluruh Data Work Type</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>	
			<li class="active">
				<strong>Data Work Type</strong>
			</li>
		</ol>	
	</div>
</div>

<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Data Work Type</h3>
				
				<div class="panel-options">
					<a href="home.php?page=add_work_step">
						<button class="btn btn-primary btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Add Work Type</span>
						</button>
					</a>
				</div>
			</div>
			<div class="panel-body">
				
				<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					$("#work_type").dataTable().yadcf([
						{column_number : 0, filter_type: 'text'},
						{column_number : 1, filter_type: 'text'},
						{column_number : 2, filter_type: 'text'},
						{column_number : 3, filter_type: 'text'},
						{column_number : 4}
					]);
				});
				</script>
				<div class="table-responsive"> 
					<table class="table table-striped table-bordered" id="work_type">
						<thead>
							<tr class="replace-inputs">
								<th><center>Name</center></th>
								<th><center>Description</center></th>
								<th><center>Seq</center></th>
								<th><center>Work Name</center></th>
								<th><center>Active</center></th>
								<th width="15%"><center>Action</center></th>
							</tr>
						</thead>
						<tbody>
						    <?php for($i=1; $i<100; $i++){ ?>
								<tr>
									<td>Name Work <?=$i?></td>
									<td class="center">Description <?=$i?></td>
									<td class="center"><?=$i?></td>
									<td class="center">Name</td>
									<td class="center">Active</td>
									<td>
										<center>
											<a href="home.php?page=edit_customer" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
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