const button = document.getElementById("pay-button");
const notificacion = document.getElementById("notificacion");

var name = document.getElementById('name').innerHTML;
var email = document.getElementById('email').innerHTML;
var amount = document.getElementById('amount').innerHTML;
var id_libro = document.getElementById('id_libro').innerHTML;
var id_usuario = document.getElementById('id_usuario').innerHTML;

OpenPay.setId('mk56ggsqs8uuv78kvtnd');
OpenPay.setApiKey('pk_d8647023087c48a285d2be5041ae54c3');
OpenPay.setSandboxMode(true);
//Se genera el id de dispositivo
var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");
console.log(deviceSessionId);


button.addEventListener("click", function(e){
    e.preventDefault();
    button.setAttribute("disabled", "true");
    OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);
});

var sucess_callbak = async function(response) {
    var token_id = response.data.id;
    const res = await fetch("pagar.php?token="+token_id+"&diviceId="+deviceSessionId+'&email='+email+'&name='+name+ '&amount='+amount+'&id_libro='+id_libro+'&id_usuario='+id_usuario);
    
    const data = await res.json();

    if (data == 200) {
        notificacion.innerHTML = 'Se ha registrado el cobro exitosamente.';
        notificacion.classList.add('is-success');
        notificacion.classList.remove('is-danger');
        notificacion.classList.remove('is-hidden');

        setTimeout("location.href='./../../perfil/'", 3600);
    } else {
        notificacion.innerHTML = data;
        notificacion.classList.remove('is-success');
        notificacion.classList.add('is-danger');
        notificacion.classList.remove('is-hidden');
    }

    // 
    button.removeAttribute("disabled");
  
};

var error_callbak = function(response) {
    var desc = response.data.description != undefined ? response.data.description : response.message;
    notificacion.innerHTML = desc;
    notificacion.classList.remove('is-success');
    notificacion.classList.add('is-danger');
    notificacion.classList.remove('is-hidden');
    button.removeAttribute("disabled");
};