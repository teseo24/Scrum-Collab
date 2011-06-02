<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Demo del script:	�C�mo hacer un login de usuarios en php?</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Efect�a tus propias pruebas on-line. Para ejecutarlo en tu sitio necesitas del framework CodeIgniter, provisto gratis por la empresa de hosting Solo10.com." />
<meta name="keywords" content="php, login, codeigniter, hosting, demo, web hosting, script, usuarios" />

<link rel="stylesheet" href="http://www.blogdephp.com/script/php-login.css" type="text/css" media="screen">
<link rel="stylesheet" href="http://www.blogdephp.com/script/addtoany.min.css" type="text/css" media="screen">

<!--<link rel="stylesheet" href="../../php-login.css" type="text/css" media="screen">-->
<meta name="google-site-verification" content="xWxEFUMgHER4nLx6TAXD9rHFhclvQkEX-RX6qClbszI" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20047775-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<meta property="og:title" content="�C�mo hacer un login de usuarios en php y codeigniter? Ver script y demo !" />
<meta property="og:type" content="blog" />
<meta property="og:url" content="http://www.blogdephp.com/script/php/login/" />
<meta property="og:image" content="http://www.blogdephp.com/images/php.gif" />
<meta property="og:site_name" content="www.blogdephp.com" />
<meta property="fb:admins" content="100001608753773" />

</head>

<body style="margin-top:0px">
<?php echo form_open('php/login'); ?>
<div class="Info">
	<p class="Titulo">
            <h1>Demo del script:
                <a href="/php-login/">�C�mo hacer un login de usuarios en php y codeigniter?</a>
            </h1>
        </p>
	<p>&nbsp;</p>	
</div>
<div id="LoginUsuarios">
	<div class="fila">
		<div class="LoginUsuariosCabecera">E-mail:</div>
		<div class="LoginUsuariosDato"><input type="text" name="maillogin" value="<?php set_value('maillogin'); ?>" size="25" /></div>
		<div class="LoginUsuariosError">
		<?php
		if(isset($error)){
			echo "<p>".$error."</p>";
		}
		echo form_error('maillogin');
		?>
		</div>
	</div>		
	<div class="fila">
		<div class="LoginUsuariosCabecera">Contrase�a:</div>
		<div class="LoginUsuariosDato"><input type="password" name="passwordlogin" value="<?php set_value('passwordlogin'); ?>" size="25" /></div>
		<div class="LoginUsuariosError"><?php  form_error('passwordlogin');?></div>
	</div>
	<div class="fila">
		<div class="LoginUsuariosCabecera"></div>
		<div class="LoginUsuariosDato"></div>
	</div>		
	<div class="fila">
		<div class="LoginUsuariosCabecera"><input type="submit" value="Ingresar"></div>
		<div class="LoginUsuariosDato"></div>
	</div>		
</div>
<?php echo form_close(); ?>
<p>&nbsp;</p>
<div class="Info">
	<p><u><h2>Datos de acceso (demo)</h2></u></p>
	<p>&nbsp;</p>	
	<p>(correspondiente a un usuario ya ingresado en la base de datos)</p>
	<p><strong>e-mail</strong>: diego@blogdephp.com</p>
	<p><strong>password</strong>: blogdephp </p>
</div>

</body>
</html>