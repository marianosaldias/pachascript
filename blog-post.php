<?
	include("config.php");
	
	// 1.- conectar al servidor
	$link = mysql_connect($servidor, $usuario, $pass) or die(mysql_error());		
	
	// 2.- seleccionar la bd
	$bd = mysql_select_db($basedato, $link) or die(mysql_error());	
	
	$sql = "SELECT * FROM blognotas WHERE idblognota='" . $_GET['id'] . "'";
	/*$sqlcoment = "SELECT * FROM blogcomentarios WHERE idblognota ='" . $_GET['id'] . "' AND alta='s'";*/
	$nubetags = "SELECT * FROM nubetags WHERE lenguaje='sp' ORDER BY cantidad DESC";
	
	//echo $sql; die();
	$resultado = mysql_query($sql, $link) or die(mysql_error());
	/*$resultadocoment = mysql_query($sqlcoment, $link) or die(mysql_error());*/
	$resultag = mysql_query($nubetags, $link) or die(mysql_error());
	
	$r = mysql_fetch_array($resultado);
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
            	<div class="col-lg-12">
	                <h1 class="iso-hover-title text-center mtop-25">BLOG</h1>
                    <div class="col-sm-8">
                        
                        <div class="col-lg-12">
                            <h6 class="mtop20"><i class="fa fa-calendar mright10"></i> <?php echo $r['fecha']; ?></h6>
                            <h3 class="mtop-10"><?php echo $r['titulo']; ?></h3>
                            <?php echo $r['breve']; ?>
                            <br /><br />
                            <?php echo $r['contenido']; ?>
                            
                            <h4 class="mtop30">Tags de la nota</h4>
                            <?
                                $topics = explode(" ", $r['topics']);
                                $cantopics = count($topics);
                                
                                for($i=0 ; $i < $cantopics ; $i++ ){
                                    echo "<a href='blog.php?tag=" . $topics[$i] ."' class='tagcloud'>" . $topics[$i] . "</a>";
                                    echo " ";
                                } 			
								
                            ?> 
                        </div>
    
                    </div>
                    <div class="col-sm-4">
                        <h3>Nube de tags</h3>
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
      </div>
    </section>


	<?php include("footer.php"); ?>
    
<?php include("postcarga.php");?>

</body>
</html>
