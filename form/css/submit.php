﻿<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// then send the form to your email
	mail( 'info@imb-genova.it', 'Contatto IMB Genova', print_r($_POST,true) );
}

// otherwise, let the spammer think that they got their message through

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Istituto di Moda Burgo - Genova</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
                <meta http-equiv="refresh" content="5; URL=https://www.imb-genova.it/form/contatto.html">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->





	</head>
	<body style="background-color:#FFFFFF;">

		
		
		<!-- Contact -->
			<article class="container box style3">
				<header>
					<h2>Grazie!</h2>
					<p>Abbiamo ricevuto il tuo messaggio e sará nostra cura rispondere al piu presto.</p>









				</header>







			</article>
		


                

	</body>
</html>