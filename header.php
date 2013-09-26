<input type="checkbox" class="cssmenu-check toggle" id="cssmenu-check">
<nav class="cssmenu" id="cssmenu">
	<?php include("menu.php"); ?>
</nav>
<div class="page-wrap">
	<header class="main-header">
		<label for="cssmenu-check" class="toggle-menu toggle"><div class="btn-navbar">☰ Menú</div></label>
		<hgroup>
			<a href="/inicio"><img class="boton" src="http://altamirawater.com/images/logo-altamira-water.png" alt="vde"></a>
			<h1 class="hide">Altamira Water Ltda.</h1>
		</hgroup>
			<!--[if IE 9]><div id="menu"><![endif]-->
			<!--[if !(IE 9)]><!--><nav id="menu"><!--<![endif]-->
				<?php include("menu.php"); ?>
			<!--[if IE 9]></div><![endif]-->
			<!--[if !(IE 9)]><!--></nav><!--<![endif]-->
	</header>