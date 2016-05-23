<script type="text/javascript">
	jQuery(document).ready(function($)
	{

		var check=$("#super_user").prop('checked');
		if(check == true){
				$(".super_user").show();
			}else{
				$(".super_user").hide();
			}

		$("#super_user").click(function(){
			var check=$("#super_user").prop('checked');

			if(check == true){
				$(".super_user").show();
			}else{
				$(".super_user").hide();
			}
		});
		

		$("#position").change(function(){
			var a= $("#position").val();
			var b= $("#super_user").prop('checked');

		});
	});
</script>


<div class="page-title">
	<div class="title-env">
		<h1 class="title">Create New User</h1>
		<p class="description">Pages user admin create new User</p>
	</div>
	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1" >
			<li>
				<a href="home.php"><i class="fa-home"></i>Dashboard</a>
			</li>
			<li>
				<a href="home.php?page=data_user">Data User</a>
			</li>
			<li class="active">
				<strong>Create User</strong>
			</li>
		</ol>

	</div>
</div>
			
<div class="row">
	<div class="col-sm-12">
		<form role="form" id="form1" method="post" class="validate form-horizontal">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title font-bold">FORM CREATE USER</h3>
					<div class="panel-options">
						<button type="submit" class="btn btn-info btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Create User</span>
						</button>
					</div>
				</div>


				<div class="panel-body">
						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">Super User</label>
							<div class="col-sm-10">
								<input type="checkbox" name="super_user" id="super_user">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">Position</label>
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#position").selectBoxIt().on('open', function()
									{
										$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
									});
								});
							</script>
							<div class="col-sm-10">
								<select class="form-control" id="position">
									<option value="">Please Select Position....</option>
									<option value="executive">Executive</option>
									<option value="customer">Customer</option>
									<option value="site_co">Site CO</option>
									<option value="planner">Planner</option>
									<option value="spv">SPV</option>
									<option value="inspector">Inspector</option>
								</select>
							</div>
						</div>
						<div class="well well-sm">
							<div class="form-group">
								<label class="col-sm-2 control-label" for="field-1">Username <span class="font-red">*</span></label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="username" data-validate="required" data-message-required="Please Input Username." placeholder="Username" />
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="field-1">Password <span class="font-red">*</span></label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="password" data-validate="required" data-message-required="Please Input Password." placeholder="Password" />
								</div>
							</div>

						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-1">First Name <span class="font-red">*</span></label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="first_name" id="first_name" data-validate="required" data-message-required="Please Input First Name." placeholder="First Name" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-1">Last Name <span class="font-red">*</span></label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="last_name" id="last_name" data-validate="required" data-message-required="Please Input Last Name." placeholder="Last Name" />
							</div>
						</div>




						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-1">Email <span class="font-red">*</span></label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="email" data-validate="required" data-message-required="Please Input Email." placeholder="Email" />
							</div>
						</div>


						<div class="form-group">
							<label class="col-sm-2 control-label">Date Joined</label>
							<div class="col-sm-10">
								<div class="input-group">
									<input type="text" class="form-control datepicker" data-format="D, dd MM yyyy" value="Wed, 25 May 2016">
									<div class="input-group-addon">
										<a href="#"><i class="linecons-calendar"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">Staff</label>
							<div class="col-sm-10">
								<input type="checkbox" name="is_staff">
							</div>
						</div>
						<div class="jdl-page super_user"><i class="fa-user"></i> DETAIL USER EMPLOYEE</div>
						<div class="well well-sm super_user">
							<div class="form-group">
								<label class="col-sm-2 control-label" for="field-1">Full Name </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" id="full_name" placeholder="Full Name" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="field-5">Pict</label>
								<div class="col-sm-10">
									<input type="file" class="form-control" id="field-4">
								</div>
							</div>

							<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">Customer Name </label>
								<script type="text/javascript">
									jQuery(document).ready(function($)
									{
										$("#data_customer").select2({
											minimumInputLength: 1,
											placeholder: 'Search',
											ajax: {
												url: "data/data_customer.php",
												dataType: 'json',
												quietMillis: 100,
												data: function(term, page) {
													return {
														limit: -1,
														q: term
													};
												},
												results: function(data, page ) {
													return { results: data }
												}
											},
											formatResult: function(student) { 
												return "<div class='select2-user-result'>" + student.name + "</div>"; 
											},
											formatSelection: function(student) { 
												return  student.name; 
											}
											
										});
									});
								</script>
							<div class="col-sm-10">
								<input type="hidden" name="data_customer" id="data_customer" />
							</div>
							</div>
							<div class="form-group">
							<label class="col-sm-2 control-label" for="field-1">Site Name</label>
							<script type="text/javascript">
									jQuery(document).ready(function($)
									{
										$("#data_site").select2({
											minimumInputLength: 1,
											placeholder: 'Search',
											ajax: {
												url: "data/data_customer.php",
												dataType: 'json',
												quietMillis: 100,
												data: function(term, page) {
													return {
														limit: -1,
														q: term
													};
												},
												results: function(data, page ) {
													return { results: data }
												}
											},
											formatResult: function(student) { 
												return "<div class='select2-user-result'>" + student.name + "</div>"; 
											},
											formatSelection: function(student) { 
												return  student.name; 
											}
											
										});
									});
								</script>
							<div class="col-sm-10">
								<input type="hidden" name="data_site" id="data_site" />
							</div>

							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-6">
								<script type="text/javascript">
									jQuery(document).ready(function($)
									{
										$("#multi-select").multiSelect({
											afterInit: function()
											{
												this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar();
											},
											afterSelect: function()
											{
												this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar('update');
											}
										});
									});
								</script>

								<div class="col-sm-4"><span class="text-right"><b>Groups</b></span></div>

								<div class="col-sm-8">
									<select class="form-control" multiple="multiple" id="multi-select" name="my-select[]">
										<option value="1">Groups 1</option>
										<option value="2">Groups 2</option>
										<option value="3">Groups 3</option>
										<option value="4">Groups 4</option>
										<option value="5">Groups 5</option>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="float-right">
									<script type="text/javascript">
										jQuery(document).ready(function($)
										{
											$("#user_permision").multiSelect({
												afterInit: function()
												{
													this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar();
												},
												afterSelect: function()
												{
													this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar('update');
												}
											});
										});
									</script>
									<div class="col-sm-3"><span class="text-right">User Permissions</span></div>

									<div class="col-sm-9">
										<select class="form-control" multiple="multiple" id="user_permision" name="my-select[]">
											<option value="1">Staff Admin</option>
											<option value="2">Staff Admin Supprt</option>
											<option value="3">Staff Workshop</option>
											<option value="4">Supervisior Admin</option>
											<option value="5">Supervisior Admin Support</option>
										</select>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">Active</label>
							<div class="col-sm-10">
								<input type="checkbox" checked="checked" name="is_active">
							</div>
						</div>
						<hr class="style11">
						<!-- <div class="jdl-page"><i class="fa-user"></i> DETAIL USER EMPLOYEE</div> -->
					<!-- 	<div class="well well-sm">
							<div class="form-group">
								<label class="col-sm-2 control-label" for="field-1">Full Name <span class="font-red">*</span></label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="name" data-validate="required" data-message-required="Please Input Full Name." placeholder="Full Name" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="field-5">Pict</label>
								<div class="col-sm-10">
									<input type="file" class="form-control" id="field-4">
								</div>
							</div>

							<div class="form-group">
							<label class="col-sm-2 control-label" for="field-5">Customer Name <span class="font-red"> * </span></label>
								<script type="text/javascript">
									jQuery(document).ready(function($)
									{
										$("#data_customer").select2({
											minimumInputLength: 1,
											placeholder: 'Search',
											ajax: {
												url: "data/data_customer.php",
												dataType: 'json',
												quietMillis: 100,
												data: function(term, page) {
													return {
														limit: -1,
														q: term
													};
												},
												results: function(data, page ) {
													return { results: data }
												}
											},
											formatResult: function(student) { 
												return "<div class='select2-user-result'>" + student.name + "</div>"; 
											},
											formatSelection: function(student) { 
												return  student.name; 
											}
											
										});
									});
								</script>
							<div class="col-sm-10">
								<input type="hidden" name="data_customer" id="data_customer" />
							</div>
							</div>
							<div class="form-group">
							<label class="col-sm-2 control-label" for="field-1">Site Name <span class="font-red"> * </span></label>
							<script type="text/javascript">
									jQuery(document).ready(function($)
									{
										$("#data_site").select2({
											minimumInputLength: 1,
											placeholder: 'Search',
											ajax: {
												url: "data/data_customer.php",
												dataType: 'json',
												quietMillis: 100,
												data: function(term, page) {
													return {
														limit: -1,
														q: term
													};
												},
												results: function(data, page ) {
													return { results: data }
												}
											},
											formatResult: function(student) { 
												return "<div class='select2-user-result'>" + student.name + "</div>"; 
											},
											formatSelection: function(student) { 
												return  student.name; 
											}
											
										});
									});
								</script>
							<div class="col-sm-10">
								<input type="hidden" name="data_site" id="data_site" />
							</div>

							</div>
						</div> -->
				</div>
				<div class="panel-heading">
					<h3 class="panel-title font-bold"></h3>
					<div class="panel-options">
						<button type="submit" class="btn btn-info btn-icon btn-icon-standalone">
							<i class="fa-plus-circle"></i>
							<span>Create User</span>
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
