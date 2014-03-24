<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport"
content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Mi nueva web</title>
<link rel="stylesheet" href="includes/normalize.css" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="includes/estilos.css" />
</head>

<body>
<header>
<figure id="logo">
<img src="images/logo.png" />
</figure>
<h1 id="titulo_header">Mi web</h1>
<figure id="avatar">
<img src="images/avatar.jpg" />
<figcaption></figcaption>
</figure>
</header>
<nav>
<ul>
<li id="flechita_nav"><a href="index.php"></a></li>
<li><a href="#">Noticias</a></li>
<li><a href="#">Videos</a></li>
</ul>
</nav>
<aside id="bienvenida">
<h2>Hola, registrate por favor!</h2>
<a id="registro" href="login.php">Registrate</a>
<p id="mensaje_registro">en serio, registrate por favor</p>
</aside>
<section id="contenido">
<?php
	include ("includes/includes.php");
	$id = $_GET['id'];
	$blogPosts = GetBlogPosts($id,null);
	
	foreach ($blogPosts as $post)
	{
?>
<article class="item">
<h2 class="titulo_item">
<a href="#"><? echo $post->title?></a>
</h2>
<div class="contenido_item">
<p class="contenido_ads"><img src="images/ads.jpg" width="300" height="250"></p>
<? echo $post->postfull?>
</div>
<p class="autor_item">
Por <a href="#"><? echo $post->author?></a>
</p>
<p class="datos_item">
<? echo $post->tags?>
<span class="fecha_item"><? echo $post->datePosted?></span>
<a class="comentarios_item" href="#">455</a>
<a class="guardar_item" href="#"></a>
</p>
<p class="votacion">
<a class="up" href="#"></a>
3141
<a class="down" href="#"></a>
</p>
</article>
<section>
<h1>Comentarios</h1>
</section>
<? }?>
</section>
<footer>
<p>Powered by dan!</p>
<p>miweb.com 2013 ®</p>
</footer>
</body>
</html>