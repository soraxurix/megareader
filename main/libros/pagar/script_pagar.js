OpenPay.setId('mk56ggsqs8uuv78kvtnd');
OpenPay.setApiKey('pk_d8647023087c48a285d2be5041ae54c3');
OpenPay.setSandboxMode(true);
//Se genera el id de dispositivo
var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");
console.log(deviceSessionId);

/*$('#pay-button').on('click', function(event) {
    event.preventDefault();
    $("#pay-button").prop( "disabled", true);
    OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);                
});

var sucess_callbak = function(response) {
  var token_id = response.data.id;
  $('#token_id').val(token_id);
  $('#payment-form').submit();
};

var error_callbak = function(response) {
    var desc = response.data.description != undefined ? response.data.description : response.message;
    alert("ERROR [" + response.status + "] " + desc);
    $("#pay-button").prop("disabled", false);
};*/