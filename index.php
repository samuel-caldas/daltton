<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="fonts/stylesheet.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Daltton Caetano</title>
<link href="css/cssreset.css" rel="stylesheet" type="text/css" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link href="css/nivo-slider.css" rel="stylesheet" type="text/css" />
<link href="css/elastislide.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
var $j = jQuery.noConflict();
$j(window).load(function() {
	$j('#slider').nivoSlider({
		effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
        slices: 1, // For slice animations
        boxCols: 1, // For box animations
        boxRows: 1, // For box animations
        pauseOnHover: true // Stop animation while hovering
	});
});
function link(a){
	window.location =a;
}
</script>
<style type="text/css">
body {
	background-image: url(imagens/bg.jpg);
	background-repeat: repeat-x;
	cursor: default;
	overflow-x:hidden;
}
</style>
</head>
<body>
<div class="header">
<div class="topbar1"></div>
<div class="topbar2"></div>
<div class="topbar3"></div>
<div class="content">
<div class="toptitle">
<div class="name1">Daltton</div>
<div class="name2">Caetano</div>
</div>
<div class="verde">
<div class="txt">Home  |  Not&iacute;cias  |  Fotos  | V&iacute;deos  |  Fale com Daltton</div>
</div>
</div>
</div>
<div class="body">
<?php
	include_once("cpainel/funcoes/funcoes.php");
	include_once("cpainel/funcoes/conectar.php");
	$saida=selecionar("*","cpnoticias","galeria='slide'","data DESC");
	$linha=count($saida);
?>
<div class="slide1">
<div class="slidecontent" id="slider">
<?php
		for($i=0; $i<$linha; $i++){
		if ($saida[$i][6]=="s"){$link="href='noticia.php?cd=".$saida[$i][0]."'";} else {$link="";};
		$imagem=selecionar("*","cpimagens","capa='s' and id='".$saida[$i][0]."'","");
			echo("
			<a ".$link."><img src='".$imagem[0][2]."' alt='".$saida[$i][2]."' title=".$saida[$i][2]." /></a>
			");
        }
?>
</div>
</div>
<div class="menubar">
  <div class="txtativo">BIOGRAFIA</div><div class="txt">FORMA&Ccedil;&Atilde;O</div><div class="txt">VEREADOR</div><div class="txt">PREFEITO</div>
</div>
<div class="noticias">
<div class="titulo"><strong>NOT&Iacute;CIAS</strong> | Fique por dentro de todas as realiza&ccedil;&otilde;es de Daltton Caetano</div>

<!-- Elastislide Carousel -->
<div id="carousel" class="es-carousel-wrapper">
<div class="es-carousel">
<ul>
<?php
	$saida=selecionar("*","cpnoticias","galeria='thumb'","data DESC");
	$linha=count($saida);
	for($i=0; $i<$linha; $i++){
		if ($saida[$i][6]=="s"){$link="noticia.php?cd=".$saida[$i][0];} else {$link="";};
	$imagem=selecionar("*","cpimagens","capa='s' and id='".$saida[$i][0]."'","");
		if ($imagem[0][2][11] == 'y'){$img="<img src='".$imagem[0][3]."'/>";$link=$imagem[0][2];}else{$img="<img src='".$imagem[0][2]."'/>";};
echo('
<li>
<a onclick=link("'.$link.'");>
    <div class=item>
        '.$img.'
        <div class=texto>
            <h5>'.$saida[$i][2].'</h5>
                '.$saida[$i][3].'
        </div>
    </div>
</a>
</li>
');
       }
?>
</ul>
</div>
<!-- End Elastislide Carousel -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript">
			var $k = jQuery.noConflict();
			$k('#carousel').elastislide({
				imageW		: 200,
				minItems	: 3,
				border		: 0
			});
		
		</script>
</div>
</div>
<div class="midia">
<div class="titulo">
<div class="name1">Daltton</div>
<div class="name2">Caetano</div>
<div class="txt">Na mídia</div>
</div>
<div class="social"><img src="imagens/seta1.gif" height="60" /></div>
<a href="#" name="Orkut" id="Orkut"><div class="social"><img src="imagens/orkut.png" alt="orkut" /><div class="socialtxt">Acompanhe-nos no Orkut!</div></div></a>
<a href="#" name="FaceBook" id="FaceBook"><div class="social"><img src="imagens/facebook.png" alt="FaceBook" /><div class="socialtxt">Curta-nos no Facebook!</div></div></a>
<a href="#" name="Twitter" id="Twitter"><div class="social"><img src="imagens/twitter.png" alt="Twitter" /><div class="socialtxt">Siga-nos no Twitter!</div></div></a>
</div>

<div class="foot">
<div class="footer">
<div class="noticia">
  <img src="http://chriscoyier.github.com/MovingBoxes/demo/2.jpg"/>
  <h1>Noticia 1</h1>
</div>
<div class="noticia">
  <img src="http://chriscoyier.github.com/MovingBoxes/demo/2.jpg"/>
  <h1>Noticia 2</h1>
</div>
<div class="noticia">
  <img src="http://chriscoyier.github.com/MovingBoxes/demo/2.jpg"/>
  <h1>Facebook</h1>
</div>
</div>
<div class="verde"></div>
</div>

</div>
</body>
</html>