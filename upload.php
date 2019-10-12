<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Advanced Plugins - Ninja Admin Template</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/styles/style.min.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/plugin/sweet-alert/sweetalert.css">
	
	<!-- FlexDatalist -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/plugin/flexdatalist/jquery.flexdatalist.min.css">

	<!-- Popover -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/plugin/popover/jquery.popSelect.min.css">

	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/plugin/select2/css/select2.min.css">

	<!-- Timepicker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/plugin/timepicker/bootstrap-timepicker.min.css">

	<!-- Touch Spin -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/plugin/touchspin/jquery.bootstrap-touchspin.min.css">

	<!-- Colorpicker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/plugin/colorpicker/css/bootstrap-colorpicker.min.css">

	<!-- Datepicker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/plugin/datepicker/css/bootstrap-datepicker.min.css">

	<!-- DateRangepicker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets1/plugin/daterangepicker/daterangepicker.css">

</head>
			<div class="col-lg-6 col-xs-12">
				<div class="card-content">
					<div class="form-group has-inverse">
						<label for="input-states-4">Custom Icons</label>
							<div class="form-with-icon">
								<input type="email" class="form-control" id="input-states-4" placeholder="Enter...">
								<i class="fa fa-envelope item-icon item-icon-right"></i>
							</div>
					</div>
				</div>	
			</div>	
			<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Input</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">lokasi</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="inp-type-1" placeholder="Some text value ...">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">tanggal</label>
							<div class="col-sm-9">
								<div id="reportrange" class="form-control">
									<i class="fa fa-calendar"></i>
									<span>August 30, 2016 - September 28, 2016</span>
								</div>
							</div>
							</div>
							<div class="form-group">
								<label for="inp-type-3" class="col-sm-3 control-label">jam</label>
								<div class="col-sm-9">
									<div class="input-group margin-bottom-20">
										<div class="bootstrap-timepicker">
											<input id="timepicker" type="text" class="form-control">
										</div>
									<span class="input-group-addon bg-primary b-0 text-white"><i class="glyphicon glyphicon-time"></i></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">telepon</label>
								<div class="col-sm-9">
									<i class="fa fa-phone"></i>
									<input type="text" class="form-control" id="inp-type-4" placeholder="telepon">
								</div>
							</div>
							<div class="form-group margin-bottom-20">
								<select class="form-control">
									<option value="">Nothing selected</option>
									<option value="1">Dropdown 1</option>
									<option value="2">Dropdown 1</option>
									<option value="3">Dropdown 1</option>
								</select>
							</div>
						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content card white -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->

			<div class="col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Default File</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="http://placehold.it/1000x667" />
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-md-6 col-xs-12 -->

				<div class="col-md-6">
					<div class="m-t-20">
						<h5><b>textareas</b></h5>
						<textarea id="textarea" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
					</div>
				</div>	
		<!--	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url(); ?>assets1/scripts/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets1/scripts/modernizr.min.js"></script>
	<script src="<?php echo base_url(); ?>assets1/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets1/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo base_url(); ?>assets1/plugin/nprogress/nprogress.js"></script>
	<script src="<?php echo base_url(); ?>assets1/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="<?php echo base_url(); ?>assets1/plugin/waves/waves.min.js"></script>
	<!-- Full Screen Plugin -->
	<script src="<?php echo base_url(); ?>assets1/plugin/fullscreen/jquery.fullscreen-min.js"></script>

	<!-- Flex Datalist -->
	<script src="<?php echo base_url(); ?>assets1/plugin/flexdatalist/jquery.flexdatalist.min.js"></script>

	<!-- Popover -->
	<script src="<?php echo base_url(); ?>assets1/plugin/popover/jquery.popSelect.min.js"></script>

	<!-- Select2 -->
	<script src="<?php echo base_url(); ?>assets1/plugin/select2/js/select2.min.js"></script>

	<!-- Multi Select -->
	<script src="<?php echo base_url(); ?>assets1/plugin/multiselect/multiselect.min.js"></script>

	<!-- Touch Spin -->
	<script src="<?php echo base_url(); ?>assets1/plugin/touchspin/jquery.bootstrap-touchspin.min.js"></script>

	<!-- Timepicker -->
	<script src="<?php echo base_url(); ?>assets1/plugin/timepicker/bootstrap-timepicker.min.js"></script>

	<!-- Colorpicker -->
	<script src="<?php echo base_url(); ?>assets1/plugin/colorpicker/js/bootstrap-colorpicker.min.js"></script>

	<!-- Datepicker -->
	<script src="<?php echo base_url(); ?>assets1/plugin/datepicker/js/bootstrap-datepicker.min.js"></script>

	<!-- Moment -->
	<script src="<?php echo base_url(); ?>assets1/plugin/moment/moment.js"></script>

	<!-- DateRangepicker -->
	<script src="<?php echo base_url(); ?>assets1/plugin/daterangepicker/daterangepicker.js"></script>

	<!-- Maxlength -->
	<script src="<?php echo base_url(); ?>assets1/plugin/maxlength/bootstrap-maxlength.min.js"></script>

	<!-- Demo Scripts -->
	<script src="<?php echo base_url(); ?>assets1/scripts/form.demo.min.js"></script>

	<!-- Dropify -->
	<script src="<?php echo base_url(); ?>assets1/plugin/dropify/js/dropify.min.js"></script>
	<script src="<?php echo base_url(); ?>assets1/scripts/fileUpload.demo.min.js"></script>

	<script src="<?php echo base_url(); ?>assets1/scripts/main.min.js"></script>
</body>
</html>