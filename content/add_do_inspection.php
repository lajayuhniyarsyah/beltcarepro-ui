
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
			<form id="form" method="post" action="../dump.php">
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
						<tr>
							<th class="col-md-2">Inspect Done</th>
							<th class="col-md-10"> 
								<div class="input-group">
									<input type="text" class="form-control datepicker" data-format="D, dd MM yyyy" value="Tue, 17 May 2016">
									
									<div class="input-group-addon">
										<a href="#"><i class="linecons-calendar"></i></a>
									</div>
								</div>
							</th>
						</tr>
						<tr>
							<th class="col-md-2">Clean</th>
							<th class="col-md-12"> 
								<div class="style-radio" style="width:150px;">
									<input type="checkbox" name="radio" id="clean" class="checkbox" />
									<label class="label-radio waiting-step" for="clean">Clean</label>
								</div>
							</th>
						</tr>
					</thead>
				</table>
			</form>

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
			<div class="table-responsive"> 
				<table class="table table-striped table-bordered" id="action"  onload="initLightbox()">
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
								<a href="images/inspection/1384822703-576-1.png" class="beltsection-bls0002 image-Lightbox" rel-image="beltsection-bls0002" title="Belt (Section)">
									<img src="images/inspection/thumbnail/1384822703-576-1.png" class="bordered img-squre" />
								</a>
								<a href="images/inspection/1384826082-588-1.png" class="beltsection-bls0002 image-Lightbox" rel-image="beltsection-bls0002" title="Belt (Section)">
									<img src="images/inspection/thumbnail/1384826082-588-1.png" alt="Belt (Section)" class="bordered hide"/>
								</a>
								<a href="images/inspection/1385553119-1001-1.png"class="beltsection-bls0002 image-Lightbox" rel-image="beltsection-bls0002" title="Belt (Section)">
									<img src="images/inspection/thumbnail/1385553119-1001-1.png" alt="Belt (Section) BLS002 <b>Level 1</b>" class="bordered hide" />
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
								<a href="images/inspection/1385448120-1001-1.png" class="group1 image-Lightbox" rel-image="group1" title="Belt (Section) BLS002 <b>Level 1</b>">
									<img src="images/inspection/thumbnail/1385448120-1001-1.png" alt="Belt (Section) BLS002 <b>Level 1</b>" class="bordered" />
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
			</div>
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

<div class="modal fade bs-example-modal-lg" id="add_inspection_part" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg" role="document">
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
									<div class="style-radio">
										<input type="radio" name="radio" id="radio1" class="radio" checked/>
										<label class="label-radio level1" for="radio1">Level 1</label>
									</div>

									<div class="style-radio">
										<input type="radio" name="radio" id="radio3" class="radio"/>
										<label class="label-radio level2" for="radio3">Level 2</label>
									</div>

									<div class="style-radio">
										<input type="radio" name="radio" id="radio2" class="radio"/>
										<label class="label-radio level3" for="radio2">Level 3</label>
									</div>

									<div class="style-radio">
										<input type="radio" name="radio" id="radio4" class="radio"/>
										<label class="label-radio level4" for="radio4">Level 4</label>
									</div>
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
						<div id="uploader">
							<p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
						</div>
					</div>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info">Save changes</button>
				</div>
				

				<script type="text/javascript">
				// Initialize the widget when the DOM is ready
				$(function() {
					$("#uploader").plupload({
						// General settings
						runtimes : 'html5,flash,silverlight,html4',
						url : '../upload.php',

						// User can upload no more then 20 files in one go (sets multiple_queues to false)
						max_file_count: 20,
						
						chunk_size: '1mb',

						// Resize images on clientside if we can
						resize : {
							width : 200, 
							height : 200, 
							quality : 90,
							crop: true // crop to exact dimensions
						},
						
						filters : {
							// Maximum file size
							max_file_size : '1000mb',
							// Specify what files to browse for
							mime_types: [
								{title : "Image files", extensions : "jpg,gif,png"},
								{title : "Zip files", extensions : "zip"}
							]
						},

						// Rename files by clicking on their titles
						rename: true,
						
						// Sort files
						sortable: true,

						// Enable ability to drag'n'drop files onto the widget (currently only HTML5 supports that)
						dragdrop: true,

						// Views to activate
						views: {
							list: true,
							thumbs: true, // Show thumbs
							active: 'thumbs'
						},

						// Flash settings
						flash_swf_url : '../../js/Moxie.swf',

						// Silverlight settings
						silverlight_xap_url : '../../js/Moxie.xap'
					});


					// Handle the case when form was submitted before uploading has finished
					$('#form').submit(function(e) {
						// Files in queue upload them first
						if ($('#uploader').plupload('getFiles').length > 0) {

							// When all files are uploaded submit form
							$('#uploader').on('complete', function() {
								$('#form')[0].submit();
							});

							$('#uploader').plupload('start');
						} else {
							alert("You must have at least one file in the queue.");
						}
						return false; // Keep the form from submitting
					});
				});
				</script>
			
		</div>
	</div>
</div>