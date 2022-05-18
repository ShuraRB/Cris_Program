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
				<h2><a href="single.html">Forastera</a></h2>
				<p>Una saga de pasión de un tiempo y otra epoca</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2015-11-01">November 1, 2015</time>
				<a href="#" class="author"><span class="name">Diana Gabaldon</span><img src="recursos_portal/images/Diana.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/forastera.jpg" alt="" /></a>
		<p>la primera parte de la saga de Claire Randall, Diana Gabaldon narra una historia de amor diferente, en la que los encuentros fortuitos y el juego equívoco del tiempo se conjugan en un intigante final.</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/dp/B000GW8NVA/ref=sr_1_1?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=XKMA72N3O3O&keywords=outlander+book&qid=1645825692&sprefix=outlander+b%2Caps%2C1997&sr=8-1">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>

<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="single.html">El color púrpura</a></h2>
				<p>Los caminos de la vida en definición del lazo de la hermandad y amor</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2015-10-25">October 25, 2015</time>
				<a href="#" class="author"><span class="name">Alice Walker</span><img src="recursos_portal/images/alice.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/purpura.jpg" alt="" /></a>
		<p>narra la historia de vida de dos hermanas afroamericanas, las cuales mantendrán una relación fraterna, en la distancia, tejida por una serie de cartas, que viajarán a través del océano durante treinta años.</p>
		<footer>
		
			<ul class="stats">
				<li><a href="https://www.amazon.com/dp/B07LCSL8PS/ref=sr_1_1?__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2NOT78OVF4M1I&keywords=the+color+purple+book&qid=1645825738&s=audible&sprefix=the+color+purple+book%2Caudible%2C754&sr=1-1">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>

<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="single.html">Donde habitan los ángeles</a></h2>
				<p>Una historia motivante de reflexion y amor a quiene verdaderamente se lo ganan</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2015-10-22">October 22, 2015</time>
				<a href="#" class="author"><span class="name">Clauidia Celis</span><img src="recursos_portal/images/claudia.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/angeles.jpg" alt="" /></a>
		<p>Durante las vacaciones, Pancho y otros sobrinos de Tacho y Chápela llenan de alegría la casa de San Miguel. En esas breves temporadas, los tíos olvidan la tristeza que la muerte de su hijo les dejó. 

Cuando las vacaciones llegan a su fin, todos los sobrinos vuelven a su hogar, pero en una ocasión, Pancho no lo hace: abandonado por su madre, atractiva viuda, y después de esperarla mucho tiempo, se convierte en el hijo de sus tíos.</p>
		<footer>
			
			<ul class="stats">
				<li><a href="https://www.amazon.com/-/es/Claudia-M%C3%A9xico-Celis/dp/6072427162/ref=sr_1_1?keywords=donde+habitan+los+angeles+claudia+celis&qid=1645825795&sprefix=donde+habitan+los+angeles+%2Caps%2C1846&sr=8-1">Comprar Libro</a></li>
				
			</ul>
		</footer>
	</article>





</div>

<?= $this->endSection("contenido"); ?>


<!-- JS -->
<?= $this->section("js") ?>
<?= $this->endSection("js"); ?>