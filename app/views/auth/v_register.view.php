<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="Register Your Own Account=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= BASE_PATH ?>/public/sweetalert/dist/sweetalert2.min.css">
	<title>Register Your Own Account</title>
	<style>
		.loader7{width:100px;height:100px;margin:50px auto;position:relative}
		.loader7 .loader-inner-1,.loader7 .loader-inner-2,.loader7 .loader-inner-3,.loader7 .loader-inner-4{display:block;width:20px;height:20px;border-radius:20px;position:absolute}
		.loader7 .loader-inner-1:before,.loader7 .loader-inner-2:before,.loader7 .loader-inner-3:before,.loader7 .loader-inner-4:before{content:"";display:block;width:20px;height:20px;border-radius:20px;position:absolute;right:0;animation-name:loading-7;animation-iteration-count:infinite;animation-direction:normal;animation-duration:2s}
		.loader7 .loader-inner-1{top:0;left:0;transform:rotate(70deg)}
		.loader7 .loader-inner-1:before{background:#06aed5}
		.loader7 .loader-inner-2{top:0;right:0;transform:rotate(160deg)}
		.loader7 .loader-inner-2:before{background:#ec008c}
		.loader7 .loader-inner-3{bottom:0;right:0;transform:rotate(-110deg)}
		.loader7 .loader-inner-3:before{background:#ffbf00}
		.loader7 .loader-inner-4{bottom:0;left:0;transform:rotate(-20deg)}
		.loader7 .loader-inner-4:before{background:#079c00}
		@keyframes loading-7{
		    0%{width:20px;right:0}
		    30%{width:120px;right:-100px}
		    60%{width:20px;right:-100px}
		}

	</style>
</head>
<body style="background: rgba(0,0,0,.2);">
	<!-- Just an image -->
	<nav class="navbar navbar-dark bg-info">
	  <a class="navbar-brand" href="#">
	    <img src="<?= BASE_PATH ?>/public/images/fortuna_logo2.png" width="30" height="30" alt="" loading="lazy">
	    Fortuna
	  </a>
	</nav>
	<div class="container-fluid">
		<div class="row mt-2">
			<div class="col-md-9 mx-auto">
				<div class="card">
					<div class="card-body">
						<ul class="nav nav-pills mb-3 setup-panel" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<a href="#step1" class="nav-link active" id="store_tab" data-toggle="pill" role="tab" aria-controls="pills-store" aria-selected="true"> Store </a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="#step2" class="nav-link" id="user_tab" data-toggle="pill" role="tab" aria-controls="pills-user" aria-selected="false"> User </a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="#step3" class="nav-link" id="confirmation_tab" data-toggle="pill" role="tab" aria-controls="pills-confirmation" aria-selected="false"> Confirmation </a>
							</li>
						</ul>

						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active setup-content" id="step1" role="tabpanel" aria-labelledBy="store_tab">
								<form class="form-horizontal" id="wizard_setup_step1" action="javascript:void(0)">
									<div class="form-group row">
										<label class="col-form-label col-lg-3"> Store Name </label>
										<div class="col-lg-9">
											<input type="text" name="store_name" id="store_name" class="form-control" required>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-3"> Address </label>
										<div class="col-lg-9">
											<textarea name="store_address" id="store_address" cols="30" rows="3" class="form-control" required></textarea>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-3"> Business Type </label>
										<div class="col-lg-9">
											<input type="text" name="store_business_type" id="store_business_type" class="form-control" required>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-3"> Your Store Logo </label>
										<div class="col-lg-5">
											<input type="file" name="store_logo" id="store_logo" class="form-control">
										</div>
										<div class="col-lg-4" style="min-height: 200px">
											<img src="" id="store_logo_frame" alt="Logo.." class="img-thumbnail rounded mx-auto d-block" style="height: 200px; width: 200px">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-lg-3">
											<button class="btn btn-primary next" type="submit"> Next <i class="fa fa-chevron-right"></i></button>
										</div>
									</div>
								</form>
							</div>
							<div class="tab-pane fade setup-content" id="step2" role="tabpanel" aria-labelledBy="user_tab">
								<form action="javascript:void(0)" class="form-horizontal" id="wizard_setup_step2">
									<div class="form-group row">
										<label class="col-form-label col-lg-3"> Official Name </label>
										<div class="col-lg-9">
											<input type="text" name="username" id="username" class="form-control" required>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-3"> Email </label>
										<div class="col-lg-9">
											<input type="email" name="user_email" id="user_email" class="form-control" required>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-3"> Password </label>
										<div class="col-lg-9">
											<input type="password" name="password" id="password" class="form-control" required>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-3"> Confirmation </label>
										<div class="col-lg-9">
											<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-lg-12">
											<div class="btn-group">
												<button class="btn btn-primary prev" type="button"><i class="fa fa-chevron-left"></i> Previous </button>
												<button class="btn btn-primary next" type="submit"> Next <i class="fa fa-chevron-right"></i></button>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="tab-pane fade setup-content" id="step3" role="tabpanel" aria-labelledBy="confirmation_tab">
								<div class="well">
	                <h2 class=""> Data completed. </h2><p class=""> Are you sure this employee data already valid?</p>
	                <div class="row">
	                    <div class="col-lg-4">
	                        <a href="javascript:void(0)" class="btn btn-success" id="do_hire">
	                            <i class="fa fa-check"></i> Yes
	                        </a>
	                        <a href="javascript:void(0)" class="btn btn-danger" id="dont_hire">
	                            <i class="fa fa-times"></i> No
	                        </a>
	                    </div>

	                    <div class="col-lg-8">
	                        <button class="btn btn-primary pull-right" type="button" id="insertModal" disabled=""><i class="glyphicon glyphicon-check"></i> Join Us! </button>
	                    </div>
	                	</div>
	          			</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal-loading" role="dialog">
		<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container">
				        <br/><br/>
				        <h5 class="text-dark">Just one moment, please wait..</h5>
				        <div class="row">
				            <div class="col-md-12">
				                <div class="loader7">
				                    <span class="loader-inner-1"></span>
				                    <span class="loader-inner-2"></span>
				                    <span class="loader-inner-3"></span>
				                    <span class="loader-inner-4"></span>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?= BASE_PATH ?>/public/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= BASE_PATH ?>/public/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= BASE_PATH ?>/public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= BASE_PATH ?>/public/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?= BASE_PATH ?>/public/sweetalert/dist/sweetalert2.min.js"></script>

	<script>
		$(document).ready(function(){
			var allNextBtn = $('.next');

			// $('#modal-loading').modal('show');

			// All btn next event

			allNextBtn.on('click', function(e){
				var curStep = $(this).closest(".setup-content"),
					curStepBtn = curStep.attr('id'),
					nextSetupWizard = $('ul.setup-panel li a[href="'+curStepBtn+'"]').parent().next().children('a'),
					curSelectpicker = curStep.find('select2'),
					isValid = true;

				var wizard;
				if(curStepBtn == 'step1'){
					wizard = '#wizard_setup_step1';
				}else if(curStepBtn == 'step2'){
					wizard = '#wizard_setup_step2';
				}

				if($(wizard).valid()){
					var nextId = $(this).parents('.tab-pane').next().attr('id');
					console.log(nextId);
					$('[href=\\#'+nextId+']').removeClass('disabled').tab('show');
				}
			});

			// Button previous event

			$('.prev').on('click', function(){
				var currentVal = $(this).parents('.tab-pane').attr('id');
				currentVal = currentVal.replace(/step/, '');

				var prevId = currentVal - 1;
				if(prevId == 2){ prevID = prevId - 1 }
				prevId = "step"+prevId;

				$('[href=\\#'+prevId+']').tab('show');
				return false;
			});

			// image validation

			let file, imageFile, match, msg, status, reader, result;

			$('#store_logo').on('change', function(){
				file = this.files[0];

				imageFile = file.type;

				// console.log(file.type);

				match = ['application/pdf', 'image/jpg', 'image/png', 'image/jpeg'];

				if(!((imageFile == match[0]) || (imageFile == match[1]) || (imageFile == match[2]) || (imageFile == match[3]))){
					msg = 'File Type is not allowed!';
					status = 'errtypefile';
					$('.alert-text').remove();
					$(this).after('<span class="alert-text">'+msg+'</span>');
					$(this).val('');
					// $('#wizard_setup_step1 ').prop('disabled', true);
					return false;
				}

				if(file.size > (1024*1024)){
					msg = 'Approx 1Mb Limit size of file!';
					status = 'errmaxsize';
					$('.alert-text').remove();
					$(this).after('<span class="alert-text">'+msg+'</span>');
					$(this).val('');
					return false;
				}

				if((imageFile == match[0])){

				}else{
					reader = new FileReader();
					reader.readAsDataURL(file);
					reader.onload = function(){
						$('#store_logo_frame').attr('src', reader.result);
					}

					reader.onerror = function(error){
						console.log('Error: '+error);
					}
				}
			});

			// password matching

			let anotherPass;

			$('#password').blur(function(){
				anotherPass = $('#password_confirmation').val();
				$('.alert-text').remove();
				if(anotherPass != ''){
					if(anotherPass != $(this).val()){
						$(this).after('<span class="alert-text"> Sorry, your password is not match! <span>');
						$('#wizard_setup_step2 .next').prop('disabled', true);
					}else{
						$('#wizard_setup_step2 .next').prop('disabled', false);
					}
				}
			});

			$('#password_confirmation').blur(function(){
				anotherPass = $('#password').val();
				$('.alert-text').remove();
				if(anotherPass != ''){
					if(anotherPass != $(this).val()){
						$(this).after('<span class="alert-text"> Sorry, your password is not match! <span>');
						$('#wizard_setup_step2 .next').prop('disabled', true);
					}else{
						$('#wizard_setup_step2 .next').prop('disabled', false);
					}
				}
			});

			// Confirmation The Data

			$('#do_hire').on('click', function(){
				Swal.fire({
					title: 'Ok!'
				}).then(function(){
					$('#insertModal').prop('disabled', false);
				});
			});

			$('#dont_hire').on('click', function(){
				Swal.fire({
					title: 'Canceled!'
				}).then(function(){
					$('#insertModal').prop('disabled', true);
				});
			});


			$('#insertModal').on('click', function(e){
				Swal.fire({
					icon: 'info',
					title: 'Please make sure your data is correct!',
					text: 'Your are 10 seconds away from make your life easy',
					showCancelButton: true
				}).then((result) => {
					if(result.value){
						$('#modal-loading').modal('show');
						var data = new FormData(document.querySelector('#wizard_setup_step1'));
						var userData = $('#wizard_setup_step2').serializeArray();
						for(var i = 0; i < userData.length; i++){
							data.append(userData[i].name, userData[i].value);
						}

						console.log(data);

						$.ajax({
							url: "<?= BASE_PATH ?>" + '/login/register_data',
							type: 'POST',
							data: data,
							processData: false,
							contentType: false,
							error: function(jqXHR){
								$('#modal-loading').modal('hide');
								Swal.fire({
									icon: 'error',
									title: 'Error when connect to server!'
								});
							}
						}).done(function(result){
							result = JSON.parse(result);
							$('#modal-loading').modal('hide');
							if(result.status == 'success'){
								Swal.fire({
									icon: 'success',
									title: result.message
								}).then((result) => {
									window.location.replace(result.url);
								});
							}else{
								Swal.fire({
									icon: 'warning',
									title: result.message
								});
							}
						});
					}
				})
			});
		});
	</script>
</body>
</html>
