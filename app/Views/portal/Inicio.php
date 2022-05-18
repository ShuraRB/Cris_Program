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
				<h2><a href="single.html">Noticias semanales geek</a></h2>
				<p>Nuevas estrenos y recomendaciones para todo el mundo UWU</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2022-03-03">03/03/2022</time>
				<a href="#" class="author"><span class="name">Autor</span><img src="images/avatar.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/pic01.jpg" alt="" /></a>
		<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
		<footer>
			<ul class="actions">
				<li><a href="single.html" class="button large">Continue Reading</a></li>
			</ul>
			<ul class="stats">
				<li><a href="#">General</a></li>
				<li><a href="#" class="icon solid fa-heart">28</a></li>
				<li><a href="#" class="icon solid fa-comment">128</a></li>
			</ul>
		</footer>
	</article>

	<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="single.html">Noticias semanales geek</a></h2>
				<p>Nuevas estrenos y recomendaciones para todo el mundo UWU</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2022-03-03">03/03/2022</time>
				<a href="#" class="author"><span class="name">Autor</span><img src="images/avatar.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/pic01.jpg" alt="" /></a>
		<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
		<footer>
			<ul class="actions">
				<li><a href="single.html" class="button large">Continue Reading</a></li>
			</ul>
			<ul class="stats">
				<li><a href="#">General</a></li>
				<li><a href="#" class="icon solid fa-heart">28</a></li>
				<li><a href="#" class="icon solid fa-comment">128</a></li>
			</ul>
		</footer>
	</article>

	<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><a href="single.html">Noticias semanales geek</a></h2>
				<p>Nuevas estrenos y recomendaciones para todo el mundo UWU</p>
			</div>
			<div class="meta">
				<time class="published" datetime="2022-03-03">03/03/2022</time>
				<a href="#" class="author"><span class="name">Autor</span><img src="images/avatar.jpg" alt="" /></a>
			</div>
		</header>
		<a href="single.html" class="image featured"><img src="recursos_portal/images/pic01.jpg" alt="" /></a>
		<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
		<footer>
			<ul class="actions">
				<li><a href="single.html" class="button large">Continue Reading</a></li>
			</ul>
			<ul class="stats">
				<li><a href="#">General</a></li>
				<li><a href="#" class="icon solid fa-heart">28</a></li>
				<li><a href="#" class="icon solid fa-comment">128</a></li>
			</ul>
		</footer>
	</article>





<!-- Pagination -->
	<ul class="actions pagination">
		<li><a href="" class="disabled button large previous">Previous Page</a></li>
		<li><a href="#" class="button large next">Next Page</a></li>
	</ul>

</div>

<?= $this->endSection("contenido"); ?>


<!-- JS -->
<?= $this->section("js") ?>
<?= $this->endSection("js"); ?>