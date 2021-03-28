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
              <a href="<?= BASE_PATH ?>/home"><i class="fa fa-home"></i></a>
            </li>
            <li class="breadcrumb-item"><a href="javascript:void(0)"> Dashboard </a></li>
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
              <a href="javascript:void(0)" class="btn btn-primary" id="btn_add"> Tambah </a>
              <div class="table-responsive mt-2">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> Name </th>
                      <th> Store </th>
                      <th> Join Store </th>
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

<div class="modal fade" id="modal_add" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title"> Officer </h3>
        <button class="close" aria-hidden="true"><span data-dismiss="modal">&times;</span></button>
      </div>

      <form class="form-material" id="frm_modal">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group form-primary">
                <input type="text" id="name_first" name="name_first" class="form-control">
                <input type="hidden" id="id" name="id" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label"> Name First </label>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group form-primary">
                <input type="text" id="name_middle" name="name_middle" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label"> Name Middle </label>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group form-primary">
                <input type="text" id="name_last" name="name_last" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label"> Name Last </label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group form-primary">
                <input type="text" name="name_official" id="name_official" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label"> Name Official </label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group form-primary">
                <input type="email" name="email" id="email" class="form-control" required>
                <span class="form-bar"></span>
                <label class="float-label"> Email </label>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group form-primary">
                <input type="text" name="birth_date" id="birth_date" class="form-control datepicker" readonly>
                <span class="form-bar"></span>
                <label class="float-label"> Birth Date </label>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-primary" type="submit" id="btn_modal_save"> Save </button>
          <button class="btn btn-secondary" type="button" aria-hidden="true" data-dismiss="modal"> Cancel </button>
        </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(function(){
    table = $('.table').DataTable({
      "processing": true,
      "ajax": {
        url: "<?= BASE_PATH ?>" + "/officer/listData",
        type: "POST",
        dataType: "JSON",
        crossDomain: true
      }
    });

    $('#btn_add').tooltip({
      title: 'add new officer'
    });

    $('#btn_add').on('click', function(){
      $('#frm_modal')[0].reset();
      $('#frm_modal input[type=hidden]').val('');

      $('.datepicker').datepicker('update', moment().format('YYYY-MM-DD'));
      $('#birth_date').change();
    });

    document.getElementById('btn_add').addEventListener('click', function(){
      $('#modal_add').modal('show');
    });

    $('#first_name').tooltip({
      'title': 'First Name!',
      'trigger': 'focus'
    });

    $('#btn_modal_save').on('click', function(){
      let method = ($('#id').val() === '' ? 'POST' : 'PUT');

      validateForm('<?= BASE_PATH ?>' + '/officer/insert', '#frm_modal', method, $('#frm_modal').serialize(), 'JSON', false, table.ajax.reload);
    });
  });
</script>
