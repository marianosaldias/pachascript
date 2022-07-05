<?
session_start();
?>
<?
	function ValidarDatos($campo){
		//Array con las posibles cabeceras a utilizar por un spammer
		$badHeads = array(	
							"Content-Type:", 
							"MIME-Version:", 
							"Content-Transfer-Encoding:", 
							"Return-path:", 
							"Subject:", 
							"From:", "Envelope-to:", 
							"To:", 
							"bcc:", 
							"cc:"
						);
		//Comprobamos que entre los datos no se encuentre alguna de
		//las cadenas del array. Si se encuentra alguna cadena se
		//dirige a una página de Forbidden
		foreach($badHeads as $valor){
			if(strpos(strtolower($campo), strtolower($valor)) !== false){
			header( "HTTP/1.0 403 Forbidden");
			exit;
			}
		}
	}
	
	//Ejemplo de llamadas a la funcion
	ValidarDatos($_POST['txt_nombreyape']);
	ValidarDatos($_POST['txt_email']);
	ValidarDatos($_POST['txt_mail']);
	ValidarDatos($_POST['txt_comentario']);

	$sendToInfo = "marianosaldias@gmail.com";
	$subject = "Contacto desde ideaspacha.com";

	//Clean $_POST
	$nombreyape = $_POST['txt_nombreyape'];
	$telefono = $_POST['txt_telefono'];
	$mail = $_POST['txt_email'];
	$comentario = $_POST['txt_comentario'];

	$messaje = "Nombre y Apellido: ". $nombreyape .
			"\r\nTelefono: ". $telefono .
			"\r\nE-mail: ". $mail .
			"\r\nComentario: ". $comentario;
			
	$headers = "From: " . $nombreyape . "<" . $mail .">\r\n";
	$headers .= "Reply-To: " . $mail . "\r\n";
	$headers .= "Return-path: " . $mail;

	mail($sendToInfo, $subject, $messaje, $headers);
	header("Location: muchasgracias.php");
?>