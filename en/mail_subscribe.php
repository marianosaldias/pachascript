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
	ValidarDatos($_POST['txt_email']);

	$sendToInfo = "marianosaldias@gmail.com";
	$subject = "Subscribe ideaspacha.com";

	//Clean $_POST
	$mail = $_POST['txt_email'];

	$messaje = "E-mail: ". $mail;
			
	$headers = "From: ideaspacha.com - Subscribe <" . $mail .">\r\n";
	$headers .= "Reply-To: " . $mail . "\r\n";
	$headers .= "Return-path: " . $mail;

	mail($sendToInfo, $subject, $messaje, $headers);
	header("Location: thanks.php");
?>