<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="favicon.ico">

<title>.:. Contacto .:. Diseño de portales y sitios web - Diseño gráfico: folletos, marcas y logotipos - Diseño UX/UI .:. Mariano Saldías .:. Buenos Aires - Pergamino</title>

<?php include("precarga.php");?>

</head>


<body id="skrollr-body">

	<?php include("header.php");?>
    
    
    <section id="contacto">
    	<div class="container mt-4">
            <div class="row">
            	<div class="col-sm-6 col-sm-offset-3 mbot50 mtop-25">
                	<h1 class="iso-hover-title text-center">CONTACTO</h1>
                    <form id="form1" method="post" action="mail.php">
                        <div class="control">
                            <input type="text" id="txt_nombreyape" name="txt_nombreyape" placeholder="Tu nombre" required>
                        </div>
    
                        <div class="control">
                            <input type="text" id="txt_email" name="txt_email" placeholder="Tu e-mail" required>
                        </div>
    
                        <div class="control">
                            <input type="text" id="txt_telefono" name="txt_telefono" placeholder="Tu teléfono" required>
                        </div>
    
                        <div class="control">
							<textarea name="txt_comentario" id="txt_comentario" placeholder="Tu mensaje" required class="mbott20"></textarea>                        
                        </div>
                        
                        <div class="control mtop30">
                            <button type="submit" class="btn btn-lg" style="border: 1px solid #333333; color: #333333;">ENVIAR</button>
                            <button type="reset" class="btn btn-lg" style="border: 1px solid #333333; color: #333333; opacity:.35;">Borrar</button>
                        </div>                            

                    </form> 
                </div>            
            </div>
        </div>
    </section>    
    
    <?php include("datacontacto.php"); ?>      
         
	<?php include("footer.php"); ?>
    
<?php include("postcarga.php");?>

</body>
</html>
