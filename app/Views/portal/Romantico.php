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
				<h2><a href="single.html">Los puentes de Madison</a></h2>
				<p>Revivir la llama de pasión no hay limite el recorrerlo con tiempo que se disfruta</p>
			</div>
			<div class="meta">
				<time class="published" datetime="1992-11-11">November 11, 1992</time>
				<a href="#" class="author"><span class="name">Robert James Waller</span><img src="recursos_portal/images/robert.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/Puente.jpg" alt="" /></a>
		<p> nos habla sobre la relación furtiva que tuvieron Robert Kincaid, quien es un fotógrafo de National Geographic y de Francesca Johnson, una mujer de descendientes italiana, ama de casa. Ambos personajes se conocen por azares del destino y llegarán a vivir, lo que marcaría sus vidas para siempre, el encuentro más lindo que hayan tenido, amándose entre ellos como nunca en la vida.</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/dp/B00H7HS4QG/ref=sr_1_1?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=110QKYN2O5JP3&keywords=Madison+bridge&qid=1645826149&s=audible&sprefix=p%2Caudible%2C3836&sr=1-1">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>

<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="single.html">El amor en los tiempos de cólera </a></h2>
				<p>Si no sabes lo que es amar, la lectura te cambiara tu persepción</p>
			</div>
			<div class="meta">
				<time class="published" datetime="1985-03-13">Marzo 13, 1985</time>
				<a href="#" class="author"><span class="name">Gabriel García Márquez</span><img src="recursos_portal/images/gabriel.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/Colera.jpg" alt="" /></a>
		<p>Nos narra la historia de amor entre Florenino Ariza y Fermina Daza, que  pasea por las diferentes registros del amor: el amor romántico, el amor a los hijos, el amor construido en las costumbres cotidianas, la pasión entre los amantes furtivos, la amistad y la lealtad.</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/El-Amor-Tiempos-Colera-audiolibro/dp/B00SZ4AXP0/ref=sr_1_1?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1479604IHWJW5&keywords=love+queue+times&qid=1645826196&s=audible&sprefix=amor%2Caudible%2C1154&sr=1-1">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>

<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="single.html">A dos metros de ti</a></h2>
				<p>Sin importar las circunstancias el amor es indistanciable</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2015-10-22">Abril 22, 2017</time>
				<a href="#" class="author"><span class="name">Rachael Lippincott</span><img src="recursos_portal/images/rachel.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/metros.jpg" alt="" /></a>
		<p>Nos cuenta la historia de Stella Grant es una paciente con fibrosis quística, muy activa en las redes sociales pues evita el contacto físico con otros para reducir el riesgo de infección, como todo paciente que sufre la enfermedad. En el hospital conoce a Will Newman, quien también la padece y con quien comienza una osada y divertida relación amorosa que le cambia el modo de ver la vida y la muerte, la esperanza y el amor.</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/A-dos-metros-ti-audiolibro/dp/B07ZPBF5CP/ref=sr_1_2?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=ZRMRV6ZT5JOH&keywords=five+feet+apart&qid=1645826260&s=audible&sprefix=%2Caudible%2C810&sr=1-2">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>





</div>

<?= $this->endSection("contenido"); ?>


<!-- JS -->
<?= $this->section("js") ?>
<?= $this->endSection("js"); ?>