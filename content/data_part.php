<div class="page-title">
	<div class="title-env">
		<h1 class="title">Data Conveyor Part </h1>
		<p class="description">Seluruh Data Conveyor Part</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>	
			<li class="active">
				<strong>Data Conveyor Part </strong>
			</li>
		</ol>	
	</div>
</div>

<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Data Conveyor Part</h3>
				
				<div class="panel-options">
					<a href="home.php?page=add_part">
						<button class="btn btn-primary btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Add Conveyor Part</span>
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
						{column_number : 1, filter_type: 'text'},
						{column_number : 2},
						{column_number : 3},
					]);
				});
				</script>
				
				<table class="table table-striped table-bordered" id="part">
					<thead>
						<tr class="replace-inputs">
							<th><center>Name</center></th>
							<th><center>Code</center></th>
							<th><center>Level</center></th>
							<th><center>Point</center></th>
							<th width="15%"><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
					    <?php 
					    for($i=1; $i<10; $i++){
					  
					    	 ?>
					    	
							<tr>
								<td>PART Roller A00<?=$i?></td>
								<td>CODE 00<?=$i?></td>
								<td>1</td>
								<td>10</td>
								<td>
									<center>
										<a href="home.php?page=edit_customer" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
										</a>
										<a href="home.php?page=view_part" class="btn btn-info btn-sm btn-icon icon-left">
											Profile
										</a>
									</center>
								</td>
							</tr>
						<?php 
						} ?>
					</tbody>
				</table>
				
			</div>
</div>