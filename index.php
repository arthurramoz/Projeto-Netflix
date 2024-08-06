<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Netflix Brasil</title>
</head>
<body>
	<header>
		<div class="center">
			<div class="header-left">
				<a href="index.php"><img src="img/logotipo.png"></a>
				<div class="menu-header">
					<ul>
						<li class="this"><a href="#">Início</a></li>
						<li><a href="adicionar.php">Adicionar & Vizualizar</a></li>
						<li><a href="editar.php">Procurar & Editar</a></li>
						<li><a href="deletar.php">Deletar</a></li>
					</ul>
				</div><!--menu-header-->
			</div><!--header-left-->
			
			<div class="header-right">
				<div class="search">
					<a href="editar.php"><i class="fa-solid fa-magnifying-glass"></i></a>
				</div><!--search-right-->
				<a href="#">Perfil</a>
				<div class="notifications">
					<div class="circle-notifications">
						<span>10</span>
					</div><!--circle-notifications-->
					<i class="fa-solid fa-bell"></i>
				</div><!--notifications-->
			</div><!--header-right--> 

			<div class="clear"></div>
		</div><!--center-->
	</header>

	<section class="destaque">
	<div id="video-destaque-container">
		<video autoplay muted loop id="video-destaque">
			<source src="img/bb.mp4" type="video/mp4">
			Video Falhou!
		</video>
	</div>

		<div class="overlay"></div><!--overlay-->
		<div class="texto-destaque">
			<img src="img/logobb.png"></img>
			<h3>Assista à 5 temporada agora</h3>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
			<br>
			<a href="#"><i class="fa-solid fa-play"></i> Assistir</a>
			<a href="adicionar.php"><i class="fa-solid fa-plus"></i> Adicionar & Vizualizar</a>
		</div><!--texto-destaque-->
	</section><!--destaque-->

	<section class="vitrine">
		<h2>Filmes</h2>
		<div class="vitrine-flex">
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie1.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie2.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie3.jpg');"></div>
			</div>
				<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie4.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie5.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie3.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie5.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie4.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie3.jpg');"></div>
			</div>
	</div>	<!--vitrine-flex-->

	<section class="vitrine vitrinetext">
		<h2>Continuar Assistindo</h2>
		<div class="vitrine-flex">
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie1.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie2.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie3.jpg');"></div>
			</div>
				<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie4.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie5.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie3.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie5.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie4.jpg');"></div>
			</div>
			<div class="vitrine-single-banner">
				<div class="vitrine-wraper" style="background-image: url('img/movie3.jpg');"></div>
			</div>
	</div>	<!--vitrine-flex-->

	<script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
	<script src="js/style.js"></script>
	<script>
		$('.vitrine-flex').slick({
	dots: false,
	arrows:false,
	infinite: false,
	centerMode: false,
	speed:1000,
	slidesToShow: 6,
    autoplay: false,
    autoplaySpeed: 3000,
    pauseOnHover:false,
    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
  }]
	});

		$('.vitrine-wraper').hover(function(){
			$(this).css('z-index','1000');
		})

		$('.vitrine-wraper').mouseout(function(){
			$(this).css('z-index','0');
		})
	</script>
	<script src="https://kit.fontawesome.com/d586e6a03d.js" crossorigin="anonymous"></script>
</body>
</html>