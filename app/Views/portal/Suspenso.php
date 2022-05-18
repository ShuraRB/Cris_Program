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
				<h2><a href="single.html">El Psicoanalista</a></h2>
				<p>Encontrar al responsable de quien te esta haciendo la vida dificil</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2002-06-03">Junio 3, 2002</time>
				<a href="#" class="author"><span class="name">John Katzenbach</span><img src="recursos_portal/images/katzenbach.jpg" alt="" /></a>
			</div>
		</header>
		<a href="https://www.amazon.com/-/es/John-Katzenbach/dp/1947783491/ref=sr_1_1?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=el+psicoanalista&qid=1645825274&sr=8-1" class="image featured"><img src="recursos_portal/images/psicoanalista.jpg" alt="" /></a>
		<p>El psicoanalista es una novela de suspenso y psicología, la cual cuenta lo que vive el Doctor Frederick Starks después de recibir una carta amenazadora en la que le indican que debe suicidarse, o de lo contrario en quince días matarían poco a poco a todos los miembros de su familia. En Doctor Starks tenía que averiguar en tan solo dos semanas la identidad del autor de este chantaje, el cual decidió dedicarse a arruinar su vida.</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/John-Katzenbach/dp/1947783491/ref=sr_1_1?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=el+psicoanalista&qid=1645825274&sr=8-1">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>

<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="single.html">El Silencio de los Corderos</a></h2>
				<p>Impresionante conflicto de un ser canibal e intelectual</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2015-10-25">October 25, 2015</time>
				<a href="#" class="author"><span class="name">Thomas Harris</span><img src="recursos_portal/images/Thom.jpg" alt="" /></a>
			</div>
		</header>
		<a href="#" class="image featured"><img src="recursos_portal/images/silencio.jpg" alt="" /></a>
		<p>Narra sobre el asesino asesino Buffalo-Bill, a quien el FBI intenta atrapar donde la investigación es manejada por un departamento especial, en particular, la estudiante de la Academia, Clarissa Starling y su jefe, Jack Crawford. Hannibal Lecter, un ex asesino de ogros, ahora en un hospital psiquiátrico de Maryland</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/dp/B01FKTTLBO/ref=sr_1_2?keywords=silence+of+the+lambs+book&qid=1645825427&sprefix=silence+of+the+lamb%2Caps%2C5221&sr=8-2">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>

<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="single.html">El Código Da Vinci</a></h2>
				<p>Siguiendo las pistas de un gran secreto sobre Leonardo Da Vinci y sus obras</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2015-10-22">October 22, 2015</time>
				<a href="#" class="author"><span class="name">Dan Brown</span><img src="recursos_portal/images/Dan.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="/recursos_portal/images/codigo.jpg" alt="" /></a>
		<p>la búsqueda que realizan juntos un simbólogo, Robert Langdon, profesor de simbologí­a religiosa en la Universidad de Harvard y una criptóloga, Sophie Neveu, nieta de Jacques Saunií¨re y criptóloga del gobierno francés, para encontrar un trascendental secreto mantenido oculto durante mucho tiempo por una antigua hermandad.</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/Dan-Brown/dp/0307474275/ref=sr_1_2?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=da+vinci+code&qid=1645825519&sr=8-2">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>





</div>

<?= $this->endSection("contenido"); ?>


<!-- JS -->
<?= $this->section("js") ?>
<?= $this->endSection("js"); ?>