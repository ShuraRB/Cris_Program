<!-- Contenido especifico -->
<?= $this-> extend("Plantillas/portal_base") ?>


<!-- CSS ESPECIFICOS DE CADA VISTA-->
<?= $this->section("css") ?>
<?= $this->endSection("css"); ?>

<!-- CONTENIDO -->

<?= $this->section("contenido") ?>
<!-- Main -->
<div id="main">

<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="single.html">Recopilación de Cuentos Issac Asimov</a></h2>
				<p>Los cuentos futuristas nos regalan planos de lo que podriamos ser capaces los humanos y la tecnologías totalmente creativos</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2000-10-04">Octubre 4, 2000</time>
				<a href="#" class="author"><span class="name">Isaac Asimov</span><img src="recursos_portal/images/isaac.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/cuentos.jpg" alt="" /></a>
		<p>Issac Asimov es considerado el padre de la ciencia ficción como lo conocemos en libros y películas, en su tiempo de vida ha escrito uentos cortos pero profundos de planos futuristas que nos harán pensa y asimilar nuetro entorno tecnológico presente y futuro.</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/Isaac-Asimov/dp/8466348409/ref=sr_1_1?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=SVUEBMEY4BBZ&keywords=isaac+asimov+tales&qid=1645825969&sprefix=donde+%2Caps%2C1990&sr=8-1">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>

<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="single.html">Warhammer 40K Fantasmas de Gaunt Saga</a></h2>
				<p>En un mundo consumido por la guerra de facciones en el año 40.000 del emperador</p>
			</div>
			<div class="meta">
				<time class="published" datetime="1990-06-25">Junio 25, 1990</time>
				<a href="#" class="author"><span class="name">Dan Abnett</span><img src="recursos_portal/images/abnet.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/fantasmas.jpg" alt="" /></a>
		<p>En el mundo de Warhammer 40K el comisario Gaunt y sus hombres se adentran asu planeta de destino Tanith para simentar bases para el imperio en dicho planeta y tener poder sobre otras facciones, habra batllas y puntos de inflexion en la guerra por Tanith y sus hombres los fantasmas</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/dp/B07ZL54RBG/ref=sr_1_1?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=FP18JVYA2BNZ&keywords=gaunt+ghosts&qid=1645826009&sprefix=fantasmas+de+gaunt%2Caps%2C593&sr=8-1">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>

<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="single.html">HELSREACH</a></h2>
				<p>El sector Helreach es uno de los sectores sangrientos en el mundo de warhammer 40k</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2015-10-22">October 22, 2015</time>
				<a href="#" class="author"><span class="name">Arron Dembski-Bowden</span><img src="recursos_portal/images/aron.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/war.jpg" alt="" /></a>
		<p>El mundo de Armageddon es atacado por Orkos, el Capítulo de Marines Espaciales de los Templarios Negros está entre los enviados a liberarlo. El Capellán Grimaldus y una banda de Templarios Negros reciben la misión de defender la Colmena Helsreach de los invasores xenos en uno de los muchos escenarios de combate.</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/dp/B075SLHNS9/ref=sr_1_1?keywords=helsreach+warhammer+40%2C000+book&qid=1645826066&sprefix=helsreach+%2Caps%2C1080&sr=8-1">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>





</div>

<?= $this->endSection("contenido"); ?>


<!-- JS -->
<?= $this->section("js") ?>
<?= $this->endSection("js"); ?>