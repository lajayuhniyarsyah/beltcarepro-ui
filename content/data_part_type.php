<div class="page-title">
	<div class="title-env">
		<h1 class="title">Data Part Type </h1>
		<p class="description">Seluruh Data Part Type</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>	
			<li class="active">
				<strong>Data Part Type </strong>
			</li>
		</ol>	
	</div>
</div>

<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">DATA PART TYPE</h3>
				
				<div class="panel-options">
					<a href="home.php?page=add_part_type">
						<button class="btn btn-primary btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Add Part Type</span>
						</button>
					</a>
				</div>
			</div>
			<div class="panel-body">
				<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					$("#part_type").dataTable().yadcf([
						{column_number : 0, filter_type: 'text'},
						{column_number : 1, filter_type: 'text'},
					]);
				});
				</script>
				
				<div class="table-responsive"> 
					<table class="table table-striped table-bordered" id="part_type">
						<thead>
							<tr class="replace-inputs">
								<th><center>Name</center></th>
								<th><center>Code</center></th>
								<th width="15%"><center>Action</center></th>
							</tr>
						</thead>
						<tbody>
						    <?php for($i=1; $i<100; $i++){ ?>
								<tr>
									<td>NAME <?=$i?></td>
									<td>CODE <?=$i?></td>
									<td>
										<center>
											<a href="home.php?page=edit_customer" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
											</a>
											<a href="home.php?page=view_data_part_type" class="btn btn-info btn-sm btn-icon icon-left">
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