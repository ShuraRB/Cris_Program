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
				<h2><a href="single.html">El señor de los anillos</a></h2>
				<p>La comunidad del anillo necesitara la ayuda de unos particulares amigos para salvar la tierra media</p>
			</div>
			<div class="meta">
				<time class="published" datetime="1954-12-12">Diciembre 12, 1954</time>
				<a href="#" class="author"><span class="name">J.R.R Tolkien</span><img src="recursos_portal/images/tolkien.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/anillo.jpg" alt="" /></a>
		<p>Frodo Boloson es un hobbit que vive en la comarca de los hobbits, donde por casualidad le heredan un misterioso anillo con poderes sobrenaturales que desatan un mal de un antiguo nigromante y la comunidad del anillo debera deshacer en Mordor.</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/dp/B0099SNQYG/ref=sr_1_1?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=IPHEC8JZ2WY8&keywords=lord+of+rings&qid=1645826334&s=audible&sprefix=lord+o%2Caudible%2C1432&sr=1-1">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>

<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="single.html">Mushoku Tensei</a></h2>
				<p>Reencarnar en un mundo de magia teniendo una segunda oportunidad de vida interesante</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2012-02-23">Febrero 23, 2012</time>
				<a href="#" class="author"><span class="name">Rifujin na Magonote</span><img src="recursos_portal/images/creator.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/novel.jpg" alt="" /></a>
		<p>Es una saga de libros que cuentan la historia de Rudeus, un chico neet de japon que trajicamente muere por salvar a alguien de ser arrollado, al parecer muere pero es invocado a otro mundo reencarnado por un dios humano que tendra que confiar en el para obtener un proposito en su nueva vida, que se encontrara con un ambiente mediaval mágico viviendo aventuras y desventuras.</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/Rifujin-Na-Magonote/dp/1626922357/ref=sr_1_12?crid=ILPS2UTAV48G&keywords=mushoku+tensei&qid=1645826400&s=audible&sprefix=mushoku+tensei%2Caudible%2C864&sr=1-12-catcorr">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>

<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="single.html">Harry Potter Saga</a></h2>
				<p>Un mundo de magia que es acechado por un gran mal y un chico elegido por la muerte sera el salvador de el mundo mágico</p>
			</div>
			<div class="meta">
				<time class="published" datetime="1994-08-13">Agosto 13, 1994</time>
				<a href="#" class="author"><span class="name">J.K Rowling</span><img src="recursos_portal/images/rowling.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/harry.jpg" alt="" /></a>
		<p>Un chico particular que tiene una vida corriente entre muggles llega a tener a la edad de ingresar a la escuela de magía de Hogwarts, empieza a tener muchas aventuras en compañia de sus amigos, con hechizos y encantamientos y un mundo de fantasía totalmente basto aislado del mundo terrenal de los humanos corriente y un mal que va asechandolo desde su nacimiento.</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/J-K-Rowling/dp/0545162076/ref=sr_1_1?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=harry+potter+book+set&qid=1645826527&sr=8-1">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>





</div>

<?= $this->endSection("contenido"); ?>


<!-- JS -->
<?= $this->section("js") ?>
<?= $this->endSection("js"); ?>