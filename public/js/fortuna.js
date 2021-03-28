$('.datepicker').datepicker({
  format: 'yyyy-mm-dd',
  todayBtn: 'linked',
  clearBtn: true,
  autoclose: true
});

$('.datepicker').datepicker('update', moment().format('YYYY-MM-DD'));

const validateForm = (url, form, method, data, returnType, reload, reloadFunction) => {
  $(form).validate({
    submitHandler: function(e){
      e.preventDefault;

      $.ajax({
        url: url,
        type: method,
        data: data,
        dataType: returnType,
        error: function(jqXHR){
          Swal.fire({
            icon: 'error',
            title: 'Something Went Wrong',
            text: 'Error code: '+jqXHR.status
          })
        }
      }).done((data) => {
        Swal.fire({
          icon: data.icon,
          title: data.title
        }).then(() => {
          if(reload){
            window.location.reload()
          }else{
            reloadFunction()
          }
        })
      });
    }
  })
}
