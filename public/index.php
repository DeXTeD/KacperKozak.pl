<?php
$uri = trim($_SERVER['REQUEST_URI'], '/');
$private = false;
if ($uri === 'private')
{
	$private = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Kacper Kozak - Front-end Developer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.min.css">
	<!--[if lt IE 9]>
		<script src="https://raw.github.com/aFarkas/html5shiv/master/dist/html5shiv.js"></script>
	<![endif]-->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:600,400,300&amp;subset=latin,latin-ext" rel="stylesheet">
</head>
<body>

	<div class="page">
		<div class="topWrapper">
			<header class="top">
				<div class="top-inner">
					<h1 class="top-heading">
						<a href="#" class="il">
							<small class="top-label">Front-end Developer</small>
							Kacper Kozak
						</a>
					</h1>
					<nav class="top-nav navWrapper" id="menu">
						<button class="hamburger" aria-label="Menu" id="menu-trigger"><span class="hamburger-lines"></span></button>
						<ul class="nav" id="menu-list">
							<li class="nav-item"><a href="#" class="nav-link">O mnie</a></li>
							<li class="nav-item"><a href="#skills" class="nav-link">Umiejętności</a></li>
							<li class="nav-item"><a href="#portfolio" class="nav-link">Portfolio</a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
		<main class="grid">
			<div class="grid-row">
				<article class="grid6--desk grid12--tab">

					<h2 class="underline">O mnie</h2>
					<p>Nazywam się <strong>Kacper Kozak</strong>. Mam 23 lata i jestem web developerem z Częstochowy. W swojej pracy stawiam na dbałość o szczegóły oraz profesjonalizm.</p>

					<p>Tworzeniem stron zainteresowałem się 7 lat temu, a od ponad 4 lat pracuję na stanowisku Front-end developer. Już od samego początku wiedziałem, że programowanie to jest to co będę robił przez całe życie.</p>


				</article>
				<article class="grid6--desk grid12--tab">

					<h2 class="underline">Kontakt</h2>

					<div class="grid">
						<div class="grid-row">
							<div class="grid12--mob grid6--desk">
								<ul class="unstyled">
									<li><a href="mailto:kontakt@kacperkozak.pl">
										<strong class="icon icon--mail" title="E-mail">E-mail</strong>kontakt@kacperkozak.pl</a>
									</li>
									<li><a href="tel:508314717">
										<strong class="icon icon--tel" title="Telefon">Telefon</strong>508 314 717</a>
									</li>
								</ul>
							</div>
							<div class="grid12--mob grid6--desk">
								<ul class="unstyled">
									<li><a href="http://github.com/DeXTeD">
										<strong class="icon icon--github" title="Github">Github</strong>github.com/DeXTeD</a>
									</li>
									<li><a href="http://twitter.com/Kacper_Kozak">
										<strong class="icon icon--twitter" title="Twitter">Twitter</strong>twitter.com/Kacper_Kozak</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</article>
				<article class="grid12--desk" id="skills">
					<h2 class="underline">Umiejętności</h2>

					<div class="grid">
						<div class="grid-row">
							<div class="grid6--desk grid12--mobi">
								<div class="skill">
									<div class="skill-circle">
										<div data-circle data-text="HTML &amp; CSS" data-percent="97"></div>
									</div>
									<div class="skill-description">
										<h3 class="vh">HTML &amp; CSS</h3>
										<p>HTML5, CSS3, LESS, SASS, Stylus, SVG, Microdata, AWI-ARIA, standardy W3C, Responsive Web Design</p>
									</div>
								</div>
							</div>
							<div class="grid6--desk grid12--mobi">
								<div class="skill">
									<div class="skill-circle">
										<div data-circle data-text="JavaScript" data-percent="97"></div>
									</div>
									<div class="skill-description">
										<h3 class="vh">JavaScript</h3>
										<p>JavaScirpt, CoffeeScript, jQuery, Backbone.js, Gulp, Grunt, Bower, Single-page application, Require.js, node.js</p>
									</div>
								</div>
							</div>
							<div class="grid6--desk grid12--mobi">
								<div class="skill">
									<div class="skill-circle">
										<div data-circle data-text="Back-end" data-percent="75"></div>
									</div>
									<div class="skill-description">
										<h3 class="vh">Back-end</h3>
										<p>PHP 5.5, MySQL, SQLite, Laravel</p>
									</div>
								</div>
							</div>
							<div class="grid6--desk grid12--mobi">
								<div class="skill">
									<div class="skill-circle">
										<div data-circle data-text="Linux" data-percent="65"></div>
									</div>
									<div class="skill-description">
										<h3 class="vh">Linux</h3>
										<p>Znajomość systemu Linux, skrypty Bash</p>
									</div>
								</div>
							</div>
							<div class="grid6--desk grid12--mobi">
								<div class="skill">
									<div class="skill-circle">
										<div data-circle data-text="GIT" data-percent="65"></div>
									</div>
									<div class="skill-description">
										<h3 class="vh">GIT</h3>
										<p>System kontroli wersji GIT</p>
									</div>
								</div>
							</div>
							<div class="grid6--desk grid12--mobi">
								<div class="skill">
									<div class="skill-circle">
										<div data-circle data-text="Design" data-percent="50"></div>
									</div>
									<div class="skill-description">
										<h3 class="vh">Design</h3>
										<p>Adobe Photoshop</p>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</article>
			</div>
		</main>
	</div>

	<div class="galleryBackground" id="portfolio">
		<div class="gallery">
			<h2>Portfolio</h2>
			<div class="grid">

				<article class="grid-row work">
					<div class="grid6--tab  grid12--mobi">
						<a href="images/portfolio/aps.png"><img src="images/portfolio/small/aps.png" alt="" class="work-image"></a>
					</div>
					<div class="grid6--tab  grid12--mobi work-description">
						<h3 class="work-description-header">Simex APS</h3>
						<p>System do planowania i zarządzania pracownikami.</p>
						<p><strong>Zakres obowiązków:</strong> <br> Front-end - stworzenie systemu do zarządzania zadaniami.</p>
						<p><strong>Użyte technologie:</strong> <br> CoffeeScript, Backbone.js, jQueryUI</p>
						<!-- <p><a href="demo/aps" rel="nofollow" class="button">Demo</a></p> -->
					</div>
				</article>

				<?php if ($private): ?>
				<article class="grid-row work">
					<div class="grid6--tab  grid12--mobi">
						<a href="images/portfolio/lenort.png"><img src="images/portfolio/small/lenort.png" alt="" class="work-image"></a>
					</div>
					<div class="grid6--tab  grid12--mobi work-description">
						<h3 class="work-description-header">Lenort</h3>
						<p>Strona firmy zajmującej się eksportem produktów na rynki międzynarodowe. Strona w całości działa używając technologii Ajax oraz dynamicznie zmieniając adresy za pomocą History API.</p>
						<p><strong>Zakres obowiązków:</strong> <br> Front-end - złożenie dostarczonego layoutu, napisanie mechanizmu dynamicznej nawigacji oraz animacji.</p>
						<p><strong>Użyte technologie:</strong> <br> CoffeeScript, Require.js, Gulp, Backbone.js, HTML5 History API</p>
						<p class="work-description-hint">Projekt wykonany przy współpracy z firmą Redhand.</p>
						<p><a href="http://www.lenort.eu/" rel="nofollow" class="button">Online</a></p>
					</div>
				</article>
				<?php endif ?>

				<article class="grid-row work">
					<div class="grid6--tab  grid12--mobi">
						<a href="images/portfolio/wake1.png"><img src="images/portfolio/small/wake1.png" alt="" class="work-image"></a>
					</div>
					<div class="grid6--tab  grid12--mobi work-description">
						<h3 class="work-description-header">Wakestyle</h3>
						<p>Serwis sportowy z nowościami, filmami, wywiadami oraz relacjami związanymi z wakestyle'em (na kajcie, na wyciągu, za motorówką czy wyciągarką)</p>
						<p><strong>Zakres obowiązków:</strong> <br> Back-end, front-end oraz layout.</p>
						<p><strong>Użyte technologie:</strong> <br> PHP5, Laravel, jQuery</p>
						<p><a href="http://wakestyle.pl/" rel="nofollow" class="button">Online</a></p>
					</div>
				</article>

				<?php if ($private): ?>
				<article class="grid-row work">
					<div class="grid6--tab  grid12--mobi">
						<a href="images/portfolio/quiandci.png"><img src="images/portfolio/small/quiandci.png" alt="" class="work-image"></a>
					</div>
					<div class="grid6--tab  grid12--mobi work-description">
						<h3 class="work-description-header">Quo&amp;Ci</h3>
						<p>Sklep internetowy z edytorem biżuterii.</p>
						<p><strong>Zakres obowiązków:</strong> <br> Front-end - złożenie dostarczonego layoutu, napisanie edytora produktu.</p>
						<p><strong>Użyte technologie:</strong> <br> CoffeeScript, SVG, Raphaël, Backbone.js</p>
						<p class="work-description-hint">Projekt wykonany przy współpracy z firmą Redhand.</p>
						<p><a href="http://quiandci.pl/c75,Bransoletki-Kolekcjonerskie-Elegance" rel="nofollow" class="button">Online</a></p>
					</div>
				</article>
				<?php endif ?>

			</div>
		</div>
	</div>

	<footer class="page footer">
		Copyright ©2014 by Kacper Kozak
	</footer>

	<script src="js/min.js"></script>

</body>
</html>