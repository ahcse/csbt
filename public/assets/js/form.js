 $(document).on('submit','.ajax-form',function(e){
    e.preventDefault();
    let targetUrl = $(this).attr('action');
    $('body').addClass('page-content-loading');
    $('#content').append('<div id="page-content-loader"><span class="spinner"></span></div>');
    $.ajax({
      url: targetUrl,
      type: 'POST',
      data:$(this).serialize(),
      dataType: 'json',
      success: function(data) {
        $.notify(data.message, "success");
        if(data.location){
          if(data.location.url){
            setTimeout(()=>{
              window.location = data.location.url;
            },1000)
          }
        }
        else{
          if(data.reload){
            setTimeout(()=>{
              location.reload();
            },1000)
          }
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        $.notify(jqXHR.responseJSON.message, "error");
        $('#page-content-loader').remove();
        $('body').removeClass('page-content-loading');
      }
    }).done(function() {
      $('#page-content-loader').remove();
      $('body').removeClass('page-content-loading');
    });
});



 $(document).on('submit','.ajax-form-file',function(e){
    e.preventDefault();
    let targetUrl = $(this).attr('action');
    $('body').addClass('page-content-loading');
    $('#content').append('<div id="page-content-loader"><span class="spinner"></span></div>');
    $.ajax({
      url: targetUrl,
      type: 'POST',
      data:new FormData(this),
      dataType: 'json',
      processData: false,
      contentType: false,
      success: function(data) {
        $.notify(data.message, "success");
        if(data.location){
          if(data.location.url){
            setTimeout(()=>{
              window.location = data.location.url;
            },1000)
          }
        }
        else{
          if(data.reload){
            setTimeout(()=>{
              location.reload();
            },1000)
          }
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        $.notify(jqXHR.responseJSON.message, "error");
        $('#page-content-loader').remove();
        $('body').removeClass('page-content-loading');
      }
    }).done(function() {
      $('#page-content-loader').remove();
      $('body').removeClass('page-content-loading');
    });
}); 