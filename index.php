<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Wellness Latina</title>
		<!-- <meta name="google-site-verification" content="8wK5NRPCkddUau2CARqQ0k-fW2VUNIX5OsrbDwYj85g" /> -->
		
		<meta http-equiv="cache-control" content="public" />
		<meta http-equiv="content-language" content="es" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Wellness Latina." />
		<meta name="keywords" content="wellness latina" />
		<meta name="copyright" content="Wellness Latina SA" />
		<meta name="author" content="Wellness Latina SA" />
		<meta name="Robots" content="index, follow, noarchive" />
		<meta name="Revisit-after" content="7 Days" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="theme-color" content="#ffffff" />

		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="image/favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="image/favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="image/favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="image/favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="image/favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="image/favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="image/favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="image/favicon/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="image/favicon/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="image/favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="image/favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="image/favicon/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="image/favicon/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="Amican"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="image/favicon/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="image/favicon/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="image/favicon/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="image/favicon/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="image/favicon/mstile-310x310.png" />

		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
		<link href="function/main.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="function/main.js"></script>
  </head>
	<body onload="fLoad();">
    <div id="dContainer" class="container">
    	<img src="image/theme/logo.png" width="80%" style="margin-top:20px;" />

    	<div id="dForm" style="margin:20px 0px 0px 40px; width:calc(100% - 80px); height:0px; overflow:hidden;">
    		<img src="image/theme/form.png" width="100%" style="border-radius:6px;" />
    		<br />
    		<b>Nuestros psicologos, nutricionistas, abogados y contadores están esperando que los contactes para ayudarte.</b>
    		<br /><br />
    		A través de Comunidad SCA te ofrecemos atención confidencial.
    		<br /><br />
    		<input id="sName" name="sName" placeholder="Nombre completo" value="" />
				<input id="sPhone" name="sPhone" placeholder="Teléfono" value="" />
				<input id="sMail" name="sMail" placeholder="Mail" value="" />
				<textarea id="sMessage" name="sMessage" placeholder="Consulta ( Te contestaremos en menos de 12hs )" style="height:80px; font-size:12px;"></textarea>
    	</div>

    	<div id="dButton" class="button green" style="margin:6px 0px 0px 40px; width:calc(100% - 80px);" onclick="fStart(this.innerHTML);">COMENZAR</div>

    	<div id="dSubject0" style="padding:20px;">
    		<b>¿Quieres mejorar el bienestar tuyo y de tu familia?</b>
    		<br /><br />
    		Te damos asesoramiento profesional gratuito, voluntario y absolutamente confidencial para ti y tu familia.
    		<img src="image/theme/subject0.gif" width="100%" style="margin-top:20px;" />
    	</div>
    	<div id="dSubject1" style="padding:20px; display:none; opacity:0;">
    		<b>¿Te gustaría mejorar tus habitos alimenticios y salud?</b>
    		<br /><br />
    		Te damos asesoramiento profesional gratuito, voluntario y absolutamente confidencial para ti y tu familia.
    		<img src="image/theme/subject1.gif" width="100%" style="margin-top:0px;" />
    	</div>
    	<div id="dSubject2" style="padding:20px; display:none; opacity:0;">
    		<b>¿Sabes que puedes influir positivamente en tu ambiente laboral?</b>
    		<br /><br />
    		Te damos asesoramiento profesional gratuito, voluntario y absolutamente confidencial para ti y tu familia.
    		<img src="image/theme/subject2.gif" width="100%" style="margin-top:20px;" />
    	</div>
    	<div id="dSubject3" style="padding:20px; display:none; opacity:0;">
    		<b>¿Necesitas consultar un abogado o contador sobre una situación?</b>
    		<br /><br />
    		Te damos asesoramiento profesional gratuito, voluntario y absolutamente confidencial para ti y tu familia.
    		<img src="image/theme/subject3.png" width="90%" style="margin-top:20px;" />
    	</div>

    	<div id="dFormHeight" style="margin:1020px 0px 0px 40px; width:calc(100% - 80px);">
    		<img src="image/theme/form.png" width="100%" style="border-radius:6px;" />
    		<br />
    		<b>Nuestros psicologos, nutricionistas, abogados y contadores están esperando que los contactes para ayudarte.</b>
    		<br /><br />
    		A través de Comunidad SCA te ofrecemos atención confidencial.
    		<br /><br />
    		<input id="sName" name="sName" placeholder="Nombre completo" value="" />
				<input id="sPhone" name="sPhone" placeholder="Teléfono" value="" />
				<input id="sMail" name="sMail" placeholder="Mail" value="" />
				<textarea id="sMessage" name="sMessage" placeholder="Consulta ( Te contestaremos en menos de 12hs )" style="height:80px; font-size:12px;"></textarea>
    	</div>
    </div>
	</body>
</html>