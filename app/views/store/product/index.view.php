<div class="pcoded-content">
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10"><?= $data['breadcrumb'] ?></h5>
					</div>
				</div>
				<div class="col-md-4">
						<ul class="breadcrumb">
								<li class="breadcrumb-item">
										<a href="<?= BASE_PATH ?>/home"> <i class="fa fa-home"></i> </a>
								</li>
								<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a>
								</li>
						</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">
					<div class="row">
						<div class="col-lg-12">
							<a href="javascript:void(0)" class="btn btn-primary" onclick="addForm()">Tambah</a>
							<div class="table-responsive mt-2">
								<table class="table table-striped">
									<thead>
										<tr>
											<th> Code </th>
											<th> Nama Barang </th>
											<th> Price </th>
											<th> Description </th>
											<th> Stock </th>
											<th> Action </th>
										</tr>
									</thead>
									<tbody>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-form" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title"> Detail </h3>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
			</div>
			<form class="form-horizontal" id="form-data">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-form-label col-lg-2"> Code </label>
						<div class="col-lg-8">
							<input type="hidden" name="id" class="form-control" id="id">
							<input type="text" name="code" id="code" class="form-control" readonly>
						</div>
						<div class="col-lg-2">
							<label class="col-form-label"><a href="javascript:void(0)" id="link_change_number">
							Change </a></label>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-lg-2"> Name </label>
						<div class="col-lg-10">
							<input type="text" name="name" id="name" class="form-control" required>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-lg-2"> Price </label>
						<div class="col-lg-10">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text"> Rp. </span>
								</div>
								<input type="text" name="price" id="price" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-lg-2"> Stock </label>
						<div class="col-lg-10">
							<input type="text" name="stock" id="stock" class="form-control">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-lg-2"> Description </label>
						<div class="col-lg-10">
							<textarea class="form-control" id="description" name="description" cols="10" rows="3"></textarea>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button class="btn btn-info" type="submit" id="btn_save"> Save </button>
					<button class="btn btn-secondary" type="button" data-dismiss="modal" aria-hidden="true"> Cancel </button>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	let table, save_method, html, i;

	function addForm(){
		save_method = 'add';
		$('#modal-form').modal('show');
		$('#modal-form form')[0].reset();
		$('input[type=hidden]').val('');
		$.ajax({
			url: "<?= BASE_PATH ?>/product/generateCode",
			type: "POST",
			dataType: "JSON",
			success: function(data){
				$('#code').val(data);
			}
		});
	}

	function editForm(id){
		save_method = "edit";
		$('#modal-form form')[0].reset();
		$.ajax({
			url: "<?= BASE_PATH ?>/product/edit/"+id,
			type: "GET",
			dataType: 'JSON',
			success: function(data){
				$('#modal-form').modal('show');
				$('#id').val(data.id);
				$('#code').val(data.code);
				$('#name').val(data.name);
				$('#price').val(data.price);
				$('#stock').val(data.stock);
				$('#description').val(data.description);
			}
		});
	}

	function deleteForm(id){
		Swal.fire({
			icon: 'warning',
			title: 'Are you sure?',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Sure!'
		}).then((result) => {
			if(result.value){
				$.ajax({
					url: "<?= BASE_PATH ?>" + "/product/deleteData/"+id,
					type: 'POST',
					dataType: 'JSON',
					success: function(data){
						if(data[1][1] == 'ok'){
							Swal.fire({
								icon: 'success',
								title: data[1][0]
							}).then((result) => {
								table.ajax.reload();
							});
						}else{
							Swal.fire({
								icon: 'warning',
								title: data[1][0]
							});
						}
					}, error: function(jqXHR){
						Swal.fire({
							icon: 'error',
							title: 'Error when try connect to server!',
							text: 'Error code: '+jqXHR.status
						});
					}
				});
			}
		});
	}

	$(function(){
		table = $('.table').DataTable({
			"processing":  true,
			"ajax": {
				url: "<?= BASE_PATH ?>" + "/product/listData",
				type: 'POST',
				dataType: 'JSON',
				crossDomain: true
			}
		});

		// $.ajax({
		// 	url: "<?= BASE_PATH ?>" + "/product/listData",
		// 	type: 'POST',
		// 	dataType: 'JSON',
		// 	crossDomain: true,
		// 	success: function(data){
		// 		if(data.result.lengt > 0){
		// 			for(i = 0; i < data.result.length; i++){
		// 				html += '<tr>'+
		// 						'<td>';
		// 			}
		// 		}
		// 	}
		// });

		$('#btn_save').on('click', function(e){
			$('#form-data').validate({
				submitHandler: function(){
					e.preventDefault();
					$.ajax({
						url: "<?= BASE_PATH ?>" + "/product/insert",
						type: "POST",
						dataType: "JSON",
						data: $('#form-data').serialize(),
						success: function(data){
							if(data[1][1] == 'ok'){
								Swal.fire({
									icon: 'success',
									title: data[1][0]
								}).then((result) => {
									table.ajax.reload();
								});
							}else{
								Swal.fire({
									icon: 'warning',
									title: data[1][0]
								});
							}
						}, error: function(jqXHR){
							Swal.fire({
								icon: 'error',
								title: 'Error when try connect to server',
								text: 'Error code: '+jqXHR.status
							});
						}
					});
				}
			});

		});

		$('#link_change_number').on('click', function(){
			$('#code').prop('readonly', false);
		});
	});
</script>
