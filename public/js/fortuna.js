const getAjax = (url) => {
  $.ajax({
    url: url,
    type: 'POST',
    dataType: 'JSON',
    success: function(data){
      returnData(data);
    }
  })
}
