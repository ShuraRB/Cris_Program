<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	<title><?= $nombre_pagina; ?></title>
	<link rel="shortcut icon" href="recursos_portal/images/libloge.png">

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="<?= base_url(RECURSOS_PORTAL_CSS.'fontawesome-all.min.css');?>" >
		<link rel="stylesheet" href="<?= base_url(RECURSOS_PORTAL_CSS.'main.css');?>" >
        <?= $this->renderSection("css") ?>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="<?=route_to("Drama"); ?>">AS GOOD AS BOOK</a></h1>
						<nav class="links">
							<ul>
								<li><a href="<?=route_to("Drama"); ?>">Drama</a></li>
								<li><a href="<?=route_to("Suspenso"); ?>">Suspenso</a></li>
								<li><a href="<?=route_to("Romantico"); ?>">Romantico</a></li>
								<li><a href="<?=route_to("Fantasía"); ?>">Fantasía</a></li>
								<li><a href="<?=route_to("Ciencia_Ficción"); ?>">Ciencia Ficción</a></li>
							</ul>
						</nav>
						
					</header>

				<!-- Menu -->
					<section id="menu">

						

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="#">
											<h3>Lorem ipsum</h3>
											<p>Feugiat tempus veroeros dolor</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Dolor sit amet</h3>
											<p>Sed vitae justo condimentum</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Feugiat veroeros</h3>
											<p>Phasellus sed ultricies mi congue</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Etiam sed consequat</h3>
											<p>Porta lectus amet ultricies</p>
										</a>
									</li>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="#" class="button large fit">Ingresar</a></li>
								</ul>
							</section>

					</section>
                    <?= $this->renderSection("contenido") ?>
				

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="recursos_portal/images/liblog.jpg" alt="" /></a>
								<header>
									<h2>AS GOOD AS BOOK</h2>
									<p>Tan bueno como el libro de tu historia favorita</p>
								</header>
							</section>

						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">
								<h2>Recomendaciones Chidas UWU</h2>
									<!-- Mini Post -->
										<article class="mini-post">
										
											<header>
												<h3><a href="<?=route_to("amor"); ?>">El amor en los tiempos de cólera</a></h3>
												<time class="published" datetime="2015-10-20">Marzo 13, 1985</time>
												<a href="#" class="author"><img src="recursos_portal/images/gabriel.jpg" alt="" /></a>
											</header>
											<a href="<?=route_to("amor"); ?>" class="image"><img src="recursos_portal/images/Colera.jpg" alt="" /></a>
											<!-- width="10" height="300" -->
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="<?=route_to("cuentos"); ?>">Recopilación de Cuentos Issac Asimov</a></h3>
												<time class="published" datetime="2015-10-19">Octubre 04, 2000</time>
												<a href="#" class="author"><img src="recursos_portal/images/isaac.jpg" alt="" /></a>
											</header>
											<a href="<?=route_to("cuentos"); ?>" class="image"><img src="recursos_portal/images/cuentos.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="<?=route_to("codigo"); ?>">El Código Da Vinci</a></h3>
												<time class="published" datetime="2015-10-18">Octubre 22, 2015</time>
												<a href="#" class="author"><img src="recursos_portal/images/Dan.jpg" alt="" /></a>
											</header>
											<a href="<?=route_to("codigo"); ?>" class="image"><img src="recursos_portal/images/codigo.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="<?=route_to("anillo"); ?>">El señor de los anillos</a></h3>
												<time class="published" datetime="2015-10-17">Diciembre 12, 1954</time>
												<a href="#" class="author"><img src="recursos_portal/images/tolkien.jpg" alt="" /></a>
											</header>
											<a href="<?=route_to("anillo"); ?>" class="image"><img src="recursos_portal/images/anillo.jpg" alt="" /></a>
										</article>

								</div>
							</section>

						<!-- Posts List -->
							<section>
								<ul class="posts">
								<h2>Autores Rockstar OWO</h2>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Alice Walker</a></h3>
												<li><a href="<?=route_to("Drama"); ?>">Drama</a></li>
											</header>
											<a href="single.html" class="image"><img src="recursos_portal/images/alice.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Dan Abnett</a></h3>
												<li><a href="<?=route_to("Ciencia_Ficción"); ?>">Ciencia_Ficción</a></li>
											</header>
											<a href="single.html" class="image"><img src="recursos_portal/images/Dan.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Diana Gabaldon</a></h3>
												<li><a href="<?=route_to("Drama"); ?>">Drama</a></li>
											</header>
											<a href="single.html" class="image"><img src="recursos_portal/images/Diana.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Rifujin na Magonote</a></h3>
												<li><a href="<?=route_to("Fantasía"); ?>">Fantasía</a></li>
											</header>
											<a href="single.html" class="image"><img src="recursos_portal/images/creator.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Arron Dembski-Bowden</a></h3>
												<li><a href="<?=route_to("Ciencia_Ficción"); ?>">Ciencia_Ficción</a></li>
											</header>
											<a href="single.html" class="image"><img src="recursos_portal/images/aron.jpg" alt="" /></a>
										</article>
									</li>
								</ul>
							</section>

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>AS GOOD AS BOOK es un sitio donde encontraras reseñas de buenas premisas de libros y recomendaciones semanales de nuevos bestsellers o verdaderos clásicos.</p>
								
							</section>
                        
						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="<?= base_url(RECURSOS_PORTAL_JS.'jquery.min.js');?>"></script>
			<script src="<?= base_url(RECURSOS_PORTAL_JS.'browser.min.js');?>"></script>
			<script src="<?= base_url(RECURSOS_PORTAL_JS.'breakpoints.min.js');?>"></script>
			<script src="<?= base_url(RECURSOS_PORTAL_JS.'util.js');?>"></script>
			<script src="<?= base_url(RECURSOS_PORTAL_JS.'main.js');?>"></script>
            <?= $this->renderSection("js") ?>
            
	</body>
</html>