<?
	// vemos si el usuario y contrase�a es v�ildo
	
		include("config.php");
		
		// 1.- conectar al servidor
		$link = mysql_connect($servidor, $usuario, $pass) or die(mysql_error());		
		
		// 2.- seleccionar la bd
		$bd = mysql_select_db($basedato, $link) or die(mysql_error());	
		
		/*
		$busqueda = $_GET['tag'];
		$date = $_GET['date'];
		$mesanio = date ("m-Y");
		*/
		
		if($busqueda != "") {
			$sql = "SELECT * FROM blognotas WHERE lenguaje='sp' AND topics LIKE '%". $busqueda ."%' ORDER BY fecha DESC";	
		}
		else if($date != "") {
			$sql = "SELECT * FROM blognotas WHERE lenguaje='sp' AND fecha LIKE '%". $date ."%' ORDER BY fecha DESC";
		}
		else {
			$sql = "SELECT * FROM blognotas WHERE lenguaje='sp' ORDER BY fecha DESC";
		}
		
		$nubetags = "SELECT * FROM nubetags WHERE lenguaje='sp' ORDER BY cantidad DESC";
		
		//echo $sql; die();
		$resultado = mysql_query($sql, $link) or die(mysql_error());
		$resultag = mysql_query($nubetags, $link) or die(mysql_error());
		
		$filasbusq = mysql_num_rows($resultado);
		 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">

<link rel="shortcut icon" href="favicon.ico">

<title>PACHA - Blog: <?php echo $r['titulo']; ?>.</title>

<?php include("precarga.php");?>

</head>


<body id="skrollr-body">

	<?php include("header.php");?>


    <section class="back-grey">
        <div class="container">
            <div class="row mtop30">
                    <div class="col-lg-8">
                        <h1 class="iso-hover-title text-center mtop-25">BLOG</h1>
                        <h5 class="text-center mtop-10 mbot30">Eco-Blog: un aporte de RSE de PACHA.</h5>
                        <?php if ($filasbusq == 0) {
                            echo "<h4>No se han encontrado respuestas a la consulta <strong>\"". $busqueda.$date ."\"</strong></h4>";	
                        }
                        ?>                    
                        <?php //aqui recorremos el array
                        if($resultado) {
                            while($r = mysql_fetch_array($resultado)){
                        ?>
    
                                <div class="col-sm-4 fadInUp">
                                	<div class="box-blog">
                                        <h6 class="mtop10"><i class="fa fa-calendar mright10"></i> <?php echo $r['fecha']; ?></h6>								<h5 class="mtop-10"><a href="blog-post.php?id=<?php echo $r['idblognota']; ?>" style="text-decoration:underline;"><?php echo $r['titulo']; ?></a></h5>                                
                                    </div>
                                </div>
                        <?php }
                        }
                        ?>
                    </div>
                    
                    <div class="col-lg-4 fadInUp">
                        <h3>Tags</h3>
                        <?php //aqui recorremos el array
                        if($resultag) {
                            while($tag = mysql_fetch_array($resultag)) {
                            ?>
                            <a href="blog.php?tag=<?php echo $tag['topic']; ?>" class="tagcloud"><?php echo $tag['topic']; ?></a>
                            <?
                            }
                        }
                        ?>
                    </div>
                    
            </div>
      </div>
    </section>
    



	<?php include("footer.php"); ?>
    
<?php include("postcarga.php");?>

</body>
</html>
