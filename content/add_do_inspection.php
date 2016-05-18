<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create Do Inspection</h1>
		<p class="description">Create Do Inspection <b>Action #HOL/NRG/006</b></p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_action">Data Schedule Action</a>
			</li>
			<li>
				<a href="home.php?page=add_inspection">Inspection View</a>
			</li>
			<li class="active">
				<strong>Do Inspection</strong>
			</li>
		</ol>
	</div>
</div>

<div class="col-md-12">
	<div class="panel panel-color panel-info"><!-- Add class "collapsed" to minimize the panel -->
		<div class="panel-heading">
			<h3 class="panel-title"><b>Action #HOL/NRG/006</b></h3>			
			<div class="panel-options">
				
			</div>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th class="col-md-2">Date</th>
						<th class="col-md-10"> 4 April 2016</th>
					</tr>
					<tr>
						<th class="col-md-2">Site / Project</th>
						<th class="col-md-10"> HOLCIM, PT / NAROGONG</th>
					</tr>
					<tr>
						<th class="col-md-2">Conveyor</th>
						<th class="col-md-10"> NRG00001</th>
					</tr>
					<tr>
						<th class="col-md-2">Action Type</th>
						<th class="col-md-10"> Inspection</th>
					</tr>
					<tr>
						<th class="col-md-2">Inspect On</th>
						<th class="col-md-10"> 
							<div class="input-group">
								<input type="text" class="form-control datepicker" data-format="D, dd MM yyyy" value="Tue, 17 May 2016">
								
								<div class="input-group-addon">
									<a href="#"><i class="linecons-calendar"></i></a>
								</div>
							</div>
						</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>


<div class="col-md-12">				
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><b>RESULTS INSPECTION</b></h3>
			<div class="panel-options">
				<a href="javascript:;" onclick="jQuery('#add_inspection_part').modal('show', {backdrop: 'static'});">
					<button class="btn btn-info btn-icon btn-icon-standalone">
						<i class="fa-plus-circle"></i>
						<span>Add Part Inspection</span>
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
					// {column_number : 1, filter_type: 'text'},
					// {column_number : 2, filter_type: 'text'},
					// {column_number : 3, filter_type: 'text'},
					// {column_number : 4, filter_type: 'text'},
					// {column_number : 5},
					// {column_number : 6},
				]);

			});
			</script>
		<table class="table table-striped table-bordered" id="action">
			<thead>
				<tr class="replace-inputs">
					<th><center>#ID</center></th>
					<th><center>Part Name</center></th>
					<th><center>Conveyor Part Asset</center></th>
					<th><center>Broken Level</center></th>
					<th width="200"><center>Notes</center></th>
					<th><center>Do Some Actin</center></th>
					<th><center>Photos</center></th>
					<th><center>Old Thread</center></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="center">1</td>
					<td>Belt (Section)</td>
					<td>BLS002 </td>
					<td class="center">Level 1</td>
					<td>Belt Conveyor terbakar dari flamed coal </td>
					<td class="center">False</td>
					<td class="center">
						<a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" >
							<img src="images/inspection/thumbnail/1384822703-576-1.png" class="img-squre" alt="user-pic" />
						</a>
					</td>
					<td class="center">
						
					</td>
				</tr>
				<tr>
					<td class="center">2</td>
					<td>Belt (Section)</td>
					<td>BLS003 </td>
					<td class="center">Level 4</td>
					<td>Belt Terbakar dan putus, dikarnakan blocking material di dalam chute </td>
					<td class="center">False</td>
					<td class="center">
						<a href="javascript:;" onclick="jQuery('#modal-1').modal('show', {backdrop: 'static'});" >
							<img src="images/inspection/thumbnail/1384826082-588-1.png" class="img-squre" alt="user-pic" />
						</a>
					</td>
					<td class="center">
						
					</td>
				</tr>
				<tr>
					<td class="center">3</td>
					<td>Roller</td>
					<td>FRM001-CA </td>
					<td class="center">Level 1</td>
					<td>Bunyi</td>
					<td> </td>
					<td class="center"></td>
					<td class="center">
						
					</td>
				</tr>
				<tr>
					<td class="center">4</td>
					<td>Roller</td>
					<td>FRM001-CB </td>
					<td class="center">Level 1</td>
					<td>Bunyi</td>
					<td> </td>
					<td class="center"></td>
					<td class="center">
						
					</td>
				</tr>
				<tr>
					<td class="center">5</td>
					<td>Roller</td>
					<td>FRM002-CB </td>
					<td class="center">Level 1</td>
					<td>Bunyi</td>
					<td> </td>
					<td class="center"></td>
					<td class="center">
						
					</td>
				</tr>
				<tr>
					<td class="center">6</td>
					<td>Roller</td>
					<td>FRM003-CA </td>
					<td class="center">Level 1</td>
					<td>Bunyi</td>
					<td> </td>
					<td class="center"></td>
					<td class="center">
						
					</td>
				</tr>
				<tr>
					<td class="center">7</td>
					<td>Roller</td>
					<td>FRM003-CC </td>
					<td class="center">Level 1</td>
					<td>Bunyi</td>
					<td> </td>
					<td class="center"></td>
					<td class="center">
						
					</td>
				</tr>
			</tbody>
		</table>
			<button class="btn btn-blue btn-icon btn-icon-standalone">
				<i class="fa-close"></i>
				<span>Cancel</span>
			</button>
			<button class="btn btn-blue btn-icon btn-icon-standalone">
				<i class="fa-save"></i>
				<span>Save</span>
			</button>			
		</div>
	</div>
</div>


<!-- Modal =========== -->

<div class="modal fade" id="modal-1">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title uppercase text-center">Belt (Section) BLS003 <b>Level 4</b></h4>
			</div>
			
			<div class="modal-body">
				<img src="images/inspection/1384826082-588-1.png" class="img-squre" alt="user-pic" />
				<br/>
				Belt Terbakar dan putus, dikarnakan blocking material di dalam chute,
				Belt Terbakar dan putus, dikarnakan blocking material di dalam chute
				Belt Terbakar dan putus, dikarnakan blocking material di dalam chute
			</div>
			
			
		</div>
	</div>
</div>

<div class="modal fade" id="modal-6">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title uppercase text-center">Belt (Section) BLS002 <b>Level 1</b></h4>
			</div>
			
			<div class="modal-body">
				<img src="images/inspection/1384822703-576-1.png" class="img-squre" alt="user-pic" />
				<br/>
				Belt Conveyor terbakar dari flamed coal 
			</div>
			
			
		</div>
	</div>
</div>




<div class="modal fade" id="add_inspection_part">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title uppercase text-center">NEW INSPECTION PART CONVEYOR <b>NRG-0001</b></h4>
			</div>
			
				<div class="modal-body">
				
					<div class="row">
						<div class="col-md-12">
							
							<div class="form-group">
								<label for="field-1" class="control-label">Conveyor</label>
								
								<b>NRG-0001</b>
							</div>	
							
						</div>
					</div>
				
					<div class="row">
						<div class="col-md-12">
							
							<div class="form-group">
								<div class="col-md-3">
									<label for="field-3" class="control-label">Part</label>
								</div>
								<script type="text/javascript">
									jQuery(document).ready(function($)
									{
										$("#part").selectBoxIt().on('open', function()
										{
											$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
										});
									});
								</script>
								<div class="col-md-9">
									<select class="form-control" id="part">
										<option value="">Please Select Part......</option>
										<option value="1">Roller</option>
										<option value="2">Belt</option>
										<option value="3">Pulley</option>
									</select>
								</div>
							</div>	
							
						</div>
					</div>
					
					<div class="form-group-separator"><br/></div>		

					<div class="row">
						<div class="col-md-12">
							
							<div class="form-group">
								<div class="col-md-3">	
									<label for="field-3" class="control-label">Code</label>
								</div>
								<script type="text/javascript">
									jQuery(document).ready(function($)
									{
										$("#code").selectBoxIt().on('open', function()
										{
											$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
										});
									});
								</script>
								<div class="col-md-9">
									<select class="form-control" id="code">
										<option value="">Please Select Code......</option>
										<option value="1">Roller 0001</option>
										<option value="2">Roller 0002</option>
										<option value="3">Roller 0003</option>
										<option value="4">Roller 0004</option>
										<option value="5">Roller 0005</option>
									</select>

									<br/>
									<div class="well well-sm">
										<div class="label label-danger">Part Already Broken on Level 3</div>
										<br/>
										<br/>
										last Inspection on 4-April-2016 on  <div class="label label-info">#HOL/NRG/006</div>
									</div>
									<!-- <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself"></textarea> -->
								</div>
							</div>	
							
						</div>
					</div>

					<div class="form-group-separator"><br/></div>		

					<div class="row">
						<div class="col-md-12">
							
							<div class="form-group no-margin">
								<div class="col-md-3">
									<label for="field-7" class="control-label">Broken Level</label>
								</div>
								<div class="col-md-9">
									<label>
										<input type="radio" name="radio-3"class="cbr cbr-success">
										level 1
									</label>
									<br />
									<label>
										<input type="radio" name="radio-3"class="cbr cbr-yellow">
										level 2
									</label>
									<br />
									<label>
										<input type="radio" name="radio-3"class="cbr cbr-info">
										level 3
									</label>
									<br />
									<label>
										<input type="radio" name="radio-3"class="cbr cbr-red">
										level 4
									</label>
								</div>
							</div>	
						</div>
					</div>

					<div class="form-group-separator"><br/></div>	

					<div class="row">
						<div class="col-md-12">
							
							<div class="form-group">
								<div class="col-md-3">
									<label for="field-3" class="control-label">Description</label>
								</div>
								<div class="col-md-9">
									<textarea class="form-control autogrow" id="desc" placeholder="Write something about yourself"></textarea>
								</div>
							</div>	
							
						</div>
					</div>

					<div class="kotak-gallery">
						<section class="gallery-env">
							<div class="row">
								<div class="col-sm-12 gallery-right">
									<div class="album-header line-judul">
										<h2>Media</h2>
						
										<ul class="album-options list-unstyled list-inline">
											<li>
												<a href="#">
													<i class="fa-upload"></i>
													<b>Add Images</b>
												</a>
											</li>
										</ul>
									</div>
						
									<!-- Sorting Information -->
									<div class="album-sorting-info">
										<div class="album-sorting-info-inner clearfix">
											<a href="#" class="btn btn-secondary btn-xs btn-single btn-icon btn-icon-standalone pull-right" data-action="sort">
												<i class="fa-save"></i>
												<span>Save Current Order</span>
											</a>
						
											<i class="fa-arrows-alt"></i>
											Drag images to sort them
										</div>
									</div>
						
									<!-- Album Images -->
									<div class="album-images row">
						
										<!-- Album Image -->
										<div class="col-md-3 col-sm-4 col-xs-6">
											<div class="album-image">
												<a href="#" class="thumb" data-action="edit">
													<img src="assets/images/album-img-1.png" class="img-responsive" />
												</a>
											</div>
										</div>
						
										<!-- Album Image -->
										<div class="col-md-3 col-sm-4 col-xs-6">
											<div class="album-image">
												<a href="#" class="thumb" data-action="edit">
													<img src="assets/images/album-img-2.png" class="img-responsive" />
												</a>
											</div>
										</div>
						
										<!-- Album Image -->
										<div class="col-md-3 col-sm-4 col-xs-6">
											<div class="album-image">
												<a href="#" class="thumb" data-action="edit">
													<img src="assets/images/album-img-3.png" class="img-responsive" />
												</a>
											</div>
										</div>
						
										<!-- Album Image -->
										<div class="col-md-3 col-sm-4 col-xs-6">
											<div class="album-image">
												<a href="#" class="thumb" data-action="edit">
													<img src="assets/images/album-img-4.png" class="img-responsive" />
												</a>
											</div>
										</div>
									</div>

								</div>
							</div>
						</section>
					</div>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info">Save changes</button>
				</div>
			
			
		</div>
	</div>
</div>