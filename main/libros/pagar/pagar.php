<?php 
session_start();
include '../../../clases/conexion.php';
date_default_timezone_set("America/Mexico_City");

// Añadimos la librearía php de OpenPay
require (dirname(__FILE__) . '/../../../librerias/openpay-php/Openpay.php');

$token = $_GET['token'];
$divice = $_GET['diviceId'];
$name = $_GET['name'];	
$email = $_GET['email'];
$amount = $_GET['amount'];
$id_libro = $_GET['id_libro'];
$id_usuario = $_GET['id_usuario'];


$hoy = date('Y-m-d G:i:s');

try {
	$openpay = Openpay::getInstance('mk56ggsqs8uuv78kvtnd', 'sk_989780e339a5422294756bc50775a6fb');

	$customer = array(
	     'name' => $name,
	     'email' => $email);

	$chargeRequest = array(
	    'method' => 'card',
	    'source_id' => $token,
	    'amount' => $amount,
	    'currency' => 'MXN',
	    'description' => 'Pago de libros',
	    'device_session_id' => $divice,
	    'customer' => $customer);

	// print_r($chargeRequest);

	$charge = $openpay->charges->create($chargeRequest);

	$consulta = "INSERT into ventas(id_usuario, id_libro, fecha_registro) VALUE ($id_usuario,$id_libro,'$hoy');";
	$result = mysqli_query($conexion, $consulta);

	if($result) echo json_encode(200);

} catch (OpenpayApiTransactionError $e) {
	echo json_encode('ERROR on the transaction: ' . $e->getMessage() . 
	      ' [error code: ' . $e->getErrorCode() . 
	      ', error category: ' . $e->getCategory() . 
	      ', HTTP code: '. $e->getHttpCode() . 
	      ', request ID: ' . $e->getRequestId() . ']', 0) ;

} catch (OpenpayApiRequestError $e) {
	echo json_encode('ERROR on the request: ' . $e->getMessage(), 0);

} catch (OpenpayApiConnectionError $e) {
	echo json_encode('ERROR while connecting to the API: ' . $e->getMessage(), 0);

} catch (OpenpayApiAuthError $e) {
	echo json_encode('ERROR on the authentication: ' . $e->getMessage(), 0);
	
} catch (OpenpayApiError $e) {
	echo json_encode('ERROR on the API: ' . $e->getMessage(), 0);
	
} catch (Exception $e) {
	echo json_encode('Error on the script: ' . $e->getMessage(), 0);
}
 ?>