<?php
	header('Access-Control-Allow-Origin: *'); 
?>
<html>
<head>
<style type="text/css">
.speech-bubble {
  background: #276e36; /* el color de fondo */
  color: #FFF; /* el color del texto */
  font-family: Arial, Sans-serif;
  font-size: 12px;
  padding: 20px 10px 10px 10px;
  text-align: center;
  width: 270px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
}
.speech-bubble:after {
  border: solid 10px transparent;
  border-top-color: #276e36;  /* igual al color de fondo */
  border-bottom: 0;
  bottom: -20px;  /* igual al borde + el padding-bottom de la definición anterior */
  content: "";
  display: block;
  height: 0;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 0;
}
.enlace {
  color: white; /* el color del texto */
  font-family: Arial, Sans-serif;
  font-size: 12px;
}


.content {
  padding: 30px ; 
}
</style>
</head>

<body>
		
		
<?php if($infoMod["welcomeTextDecoded"]<>""){?>		
	<ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
		<li data-role="list-divider" data-theme="a" data-swatch="a" data-form="ui-bar-a" role="heading" class="ui-li-divider ui-bar-a ui-first-child green">
			Bienvenida</li>
		<div class="content">
		   <span class="h3"><?php echo $infoMod["welcomeTextDecoded"]?></span>
		</div>

	</ul>
<?php 
}
?>
<?php if($infoMod["introductionDecoded"]<>""){?>	
<ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
	<li data-role="list-divider" data-theme="a" data-swatch="a" data-form="ui-bar-a" role="heading" class="ui-li-divider ui-bar-a ui-first-child green">
		Introducci&oacute;n</li>
	<div class="content">
	   <span class="h3"><?php echo $infoMod["introductionDecoded"]?></span>
	</div>
</ul>
<?php }?>
<?php if($infoMod["intentionsDecoded"]<>""){?>	
<ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
	<li data-role="list-divider" data-theme="a" data-swatch="a" data-form="ui-bar-a" role="heading" class="ui-li-divider ui-bar-a ui-first-child green">
		Intenciones del Curso</li>
	<div class="content">
	   <span class="h3"><?php echo $infoMod["intentionsDecoded"]?></span>
	</div>
</ul>
<?php 
}
?>
<?php if($infoMod["themesDecoded"]<>""){?>	
<ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
	<li data-role="list-divider" data-theme="a" data-swatch="a" data-form="ui-bar-a" role="heading" class="ui-li-divider ui-bar-a ui-first-child green">
		Temas</li>
	<div class="content">
	   <span class="h3"><?php echo $infoMod["themesDecoded"]?></span>
	</div>
</ul>
<?php }?>	
<?php if($infoMod["methodologyDecoded"]<>""){?>	
<ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
	<li data-role="list-divider" data-theme="a" data-swatch="a" data-form="ui-bar-a" role="heading" class="ui-li-divider ui-bar-a ui-first-child green">
		Metodología</li>
	<div class="content">
	   <span class="h3"><?php echo $infoMod["methodologyDecoded"]?></span>
	</div>
</ul>	
<?php }?>	
<?php if($infoMod["evaluationDecoded"]<>""){?>	
<ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
	<li data-role="list-divider" data-theme="a" data-swatch="a" data-form="ui-bar-a" role="heading" class="ui-li-divider ui-bar-a ui-first-child green">
		Evaluacion</li>
	<div class="content">
	   <span class="h3"><?php echo $infoMod["evaluationDecoded"]?></span>
	</div>
</ul>	
<?php }?>
<?php if($infoMod["bibliographyDecoded"]<>""){?>		
<ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
	<li data-role="list-divider" data-theme="a" data-swatch="a" data-form="ui-bar-a" role="heading" class="ui-li-divider ui-bar-a ui-first-child green">
		Bibliografía</li>
	<div class="content">
	   <span class="h3"><?php echo $infoMod["bibliographyDecoded"]?></span>
	</div>
</ul>
<?php }?>



</body>
</html>
