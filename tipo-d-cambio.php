<?php $active_page="tipodecambio"; ?>
<?php include("includes/head.php"); ?>
 		<title><?php echo "$nombre"?> | Tipo de cambio</title>
 		<meta name="description" content="Tipo de cambio del Dolar">
		<meta name="keywords" content="tipo de cambio, dolar,aviso, importante, tabla, peso, colombiano">
 		<meta name="robots" content="Index, follow">
 	</head>
 	
 <body>
 <section id="container">
 	<?php include("includes/header.php"); ?>	
 	<section id="federatas" class="active">
			<?php include("vde/colombia/tc.php"); ?>	
	</section>
	
 	<?php include("includes/iframe.php"); ?>
 	<?php include("includes/footer.php"); ?>