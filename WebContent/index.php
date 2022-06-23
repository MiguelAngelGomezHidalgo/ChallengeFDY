<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Automarket</title>
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
	crossorigin="anonymous">


<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./js/Ejercicio1.js"></script>
<script src="./js/Ejercicio2.js"></script>
<script src="./js/Ejercicio3.js"></script>
<link href="./css/carousel.css" rel="stylesheet"></link>

<style>
.bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}

@media ( min-width : 768px) {
	.bd-placeholder-img-lg {
		font-size: 3.5rem;
	}
}

.b-example-divider {
	height: 3rem;
	background-color: rgba(0, 0, 0, .1);
	border: solid rgba(0, 0, 0, .15);
	border-width: 1px 0;
	box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em
		rgba(0, 0, 0, .15);
}

.b-example-vr {
	flex-shrink: 0;
	width: 1.5rem;
	height: 100vh;
}

.bi {
	vertical-align: -.125em;
	fill: currentColor;
}

.nav-scroller {
	position: relative;
	z-index: 2;
	height: 2.75rem;
	overflow-y: hidden;
}

.nav-scroller .nav {
	display: flex;
	flex-wrap: nowrap;
	padding-bottom: 1rem;
	margin-top: -1px;
	overflow-x: auto;
	text-align: center;
	white-space: nowrap;
	-webkit-overflow-scrolling: touch;
}
</style>


</head>
<body>

	<header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Automarket</a>
				<button class="navbar-toggler" type="button"
					data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
					aria-controls="navbarCollapse" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav me-auto mb-2 mb-md-0">
						<li class="nav-item"><a class="nav-link active"
							aria-current="page" href="#" >Home</a></li>

						<li class="nav-item"><a class="nav-link active"
							aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Ejercicio1</a></li>
							
							<li class="nav-item"><a class="nav-link active"
							aria-current="page" href="#" onclick="Ejercicio2();">Ejercicio2</a></li>
							
							<li class="nav-item"><a class="nav-link active"
							aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">Ejercicio3</a></li>

					</ul>

				</div>
			</div>
		</nav>
	</header>
	<!--Emieza la seccion del caroucel  -->

	<div class="container">
		<div id="myCarousel" class="carousel slide carousel-fade"
			data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#myCarousel"
					data-bs-slide-to="0" class="active" aria-current="true"
					aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#myCarousel"
					data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#myCarousel"
					data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="./img/carrousel3.jpg" width="100%"
						class="bd-placeholder-img" alt="...">

					<div class="container">
						<div class="carousel-caption text-start">
							<h1>Nuevos modelos 2022</h1>
							<p>Experiencia confortable para todo tipo de terreno</p>
							<p>
								<a class="btn btn-lg btn-primary" href="#">Ver mas</a>
							</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="./img/carrousel1.jpg" width="100%"
						class="bd-placeholder-img" alt="...">

					<div class="container">
						<div class="carousel-caption">
							<h1>Modelos mas modernos</h1>
							<p>Modelos deportivos y modernos para todo tipo de gustos</p>
							<p>
								<a class="btn btn-lg btn-primary" href="#">Ver mas</a>
							</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="./img/carrousel2.jpg" width="100%"
						class="bd-placeholder-img" alt="...">

					<div class="container">
						<div class="carousel-caption text-end">
							<h1>Una experiencia inmersiva</h1>
							<p>Una experiencia inersiva en cada uno de nuestros autos
								cada dia es una nueva aventura</p>
							<p>
								<a class="btn btn-lg btn-primary" href="#">Ver mas</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button"
				data-bs-target="#myCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button"
				data-bs-target="#myCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card" style="width: 18rem;">
					<img src="./img/images.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">80% De descuento</h5>
						<p class="card-text">En tu primer servicio comprando un auto
							2022</p>
						<a href="#" class="btn btn-primary">Ver Oferta</a>
					</div>
				</div>

			</div>
			<div class="col">
				<div class="card" style="width: 18rem;">
					<img src="./img/images1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Carro recargable</h5>
						<p class="card-text">Bonito carro de juguete al contratar un
							credito automotriz</p>
						<a href="#" class="btn btn-primary">Ver Oferta</a>
					</div>
				</div>

			</div>
			<div class="col">
				<div class="card" style="width: 18rem;">
					<img src="./img/images2.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Gran venta de liquidación</h5>
						<p class="card-text">Venta de liquidacion ultimos modelos 2021
						</p>
						<a href="#" class="btn btn-primary">Ver Oferta</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	<br>
	<br>
	<br>


	<div class=" fixed-bottom bg-dark">



		<footer class="text-center text-white">

			<div class="text-center p-3">
				Av. Revolución #325 Miguel Hidalgo CDMX<br />
				automarket@correo.mail.com<br /> 01800-5561-65465-55 ext. 32
			</div>


		</footer>



	</div>



	<!-- Modal Ejercicio1 -->
	<div class="modal fade" id="exampleModal" tabindex="-1"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ejercicio 1</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"
						aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<h5>Contar la cantidad de Mayusculas en una cadena</h5>

					<input type="text" name="sEjericio1" id="sEjericio1">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary"
						data-bs-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary"
						onclick="CantidadMayusculas();">Contar</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal Ejercicio3 -->
	<div class="modal fade" id="exampleModal1" tabindex="-1"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ejercicio 3</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal"
						aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<h5>Ingresa tu array separado por comas</h5>

					<input type="text" name="sEjericio3" id="sEjericio3">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary"
						data-bs-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary"
						onclick="Ejercicio3();">Ordenar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Termina la seccion del carousel -->
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>

</body>
</html>