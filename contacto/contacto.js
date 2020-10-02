$(function(){

  window.verifyRecaptchaCallback = function(response) {
      $('input[data-recaptcha]').val(response).trigger('change')
  }

  window.expiredRecaptchaCallback = function() {
    $('input[data-recaptcha]').val("").trigger('change')
  }


  // init the validator
  $('#contact-form').validator();

  // when the for is submitted
  $('#contact-form').on('submit', function(e){

    // if the validator does not prevent form submit
    if (!e.isDefaultPrevented()) {
      var url = "test-contact.php";

      // POST values in the background of the script url
      $.ajax({
        type: "POST",
        url: url,
        data: $(this).serialize(),
        success: function (data)
        {
          // data = JSON object that test-contact.php returns
          // we recieve the type of the message, success or danger, and aply
          let messageAlert = 'alert-' + data.type;
          let messageText = data.message;

          // compose the Bootstrap alert box html
          let alertBox = `<div class="alert ${messageAlert} alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>${messageText}</div>`;

          // if we have a messageAlert and messageText
          if (messageAlert && messageText) {
            //inject the alert to .messages div in our document
            $('#contact-form').find('.messages').html(alertBox);
            // empty the form
            $('#contact-form')[0].reset();
            grecaptcha.reset();
          }
        }
      });
      return false;
    }
  })
}); 