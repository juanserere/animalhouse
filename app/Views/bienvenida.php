<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Animal House</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&family=Open+Sans&family=Patrick+Hand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('public/styles/estilos.css')?>">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark fondo">
			<div class="container-fluid">
				<a class="navbar-brand fuente" href="#">
					<i class="fas fa-paw"></i>
					Casa Hogar
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?= site_url('/')?>">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?= site_url('/productos/registro')?>">Registro Productos</a>
					</li>
					<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?= site_url('/animal/registro')?>">Registro Animales</a>
					</li>
				</ul>
			</div>
			</div>
		</nav>
	</header>
	
	<section>
		<div class="container mt-3">
			<div class="row">
				<div class="col-12">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?= base_url('public/img/catjugando.jpg')?>" class="d-block w-100" alt="foto">
						</div>
						<div class="carousel-item">
							<img src="<?= base_url('public/img/catydog.jpg')?>" class="d-block w-100" alt="foto">
						</div>
						<div class="carousel-item">
							<img src="<?= base_url('public/img/pajarofondo.jpg')?>" class="d-block w-100" alt="foto">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" 		data-bs-target="#carouselExampleControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
					</div>
				</div>
			</div>
		</div>
	</section>


	<main>
	<div class="container-fluid">
			<div class="row d-flex justify-content-center mt-4">
				<div class="col-12 col-md-6">
					<h3 class="text-center fw-bold text-center fuente2">Hogar de animales ANIMALHOUSE</h3>
					<p class="text-center fuente2">
              			Casa hogar Animalhouse, atiende desde 2000 animales y fauna silvestre en estado de abandono, y desnutrición, ofreciendo atención integral y completa,con servicios veterinarios incluidos en la adopción, además somos fabricantes de comida y accesorios para todo tipo de mascota.
            		</p>
				</div>
			</div>
			<div class="row d-flex justify-content-center mt-5 mx-5 mb-5">
				<div class="col-1">
					<a href="">
						<img src="<?= base_url('public/img/dog-icon.png')?>" alt="icono1" class="img-fluid zoom">
					</a>
            		<p class="text-center">Perros</p>
          		</div>
				<div class="col-1">
					<a href="">
						<img src="<?= base_url('public/img/cat-icon.png')?>" alt="icono1" class="img-fluid zoom">
					</a>
					<p class="text-center">Gatos</p>
				</div>
				<div class="col-1">
					<a href="">
						<img src="<?= base_url('public/img/bird-icon.png')?>" alt="icono1" class="img-fluid zoom">
					</a>
					<p class="text-center">Aves</p>
				</div>
				<div class="col-1">
					<a href="">
						<img src="<?= base_url('public/img/reptile-icon.png')?>" alt="icono1" class="img-fluid zoom">
					</a>
					<p class="text-center">Reptiles</p>
				</div>
				<div class="col-1">
					<a href="">
						<img src="<?= base_url('public/img/horse-icon.png')?>" alt="icono1" class="img-fluid zoom">
					</a>
					<p class="text-center">Caballos</p>
				</div>
			</div>

			<div class="row fondoAdopcion">
				
			</div>
		</div>
		<div class="container mb-5">
			<div class="row mt-5">
				<div class="col-12 col-md-6">
					<img src="<?=base_url('public/img/perrofondo.jpg')?>" alt="adopta" class="img-fluid w-100 rounded">
				</div>
				<div class="col-12 col-md-6 align-self-center">

					<h2 class="fuente2 fw-bold">Hogar AnimalHouse</h2>
					<p class="fuente2 ">
						Somos una organización protectora de animales especializada, desde 2000, en la ayuda a perros y gatos maltratados y/o abandonados; una organización colombiana totalmente independiente que no recibe subvenciones de organismos oficiales, empresas ni partidos políticos. Las cuotas de nuestros socios y las donaciones de nuestros simpatizantes permiten que nuestra labor sea sostenible y preservan nuestra libertad de acción. Contamos con un centro veterinario en Medellín abierto al público, que destina sus ingresos íntegramente al cuidado de los animales abandonados, y un centro de acogida en El Poblado.
						<br>
						Defendemos el “sacrificio cero”. Esto significa que establecemos una línea muy clara entre “el sacrificio” y “la eutanasia”. Nunca sacrificamos cachorros recién nacidos, ni animales cojos, ciegos, sordos o con enfermedades crónicas que sean tratables. Exclusivamente en caso de enfermedad en fase terminal que produzca un sufrimiento irreversible, se recurre a la eutanasia con toda la dignidad, el respeto y el amor que ellos merecen.
					</p>

				</div>
			</div>
		</div>
	</main>

	<footer class="fondoDos p-5">

		<div class="container-fluid">

		<div class="row">
			<div class="col-12 col-md-4">
				<h3 class="fw-bold">Horario de atención:</h3>
				<p>Lunes a viernes 7:00 am - 3:00 pm / Sábado: 7:00 am - 2:30 pm / Domingos y festivos 8:00 am - 3:00 pm</p>
				<br>
				<h3 class="fw-bold">Dirección:</h3>
				<p>Poblado  Calle 8A # 112-82 </p>
			</div>

			<div class="col-12 col-md-4">
				<h3 class="fw-bold">Ayudas:</h3>
				<p>Glosario / Correo remoto  /  Monitoreo y desempeño de uso del sitio web</p>
				<br>
				<h3 class="fw-bold">Protección de datos:</h3>
				<p>Protección de datos personales en el Municipio de Medellín </p>
			</div>

			<div class="col-12 col-md-4">
				<h1 class="fw-bold fuente"><span><i class="fas fa-paw"></i></span>ANIMALHOUSE</h1>
				<br>
				<i class="fab fa-facebook fa-3x"></i>
				<i class="fab fa-instagram fa-3x"></i>
				<i class="fab fa-youtube fa-3x"></i>
				<br>
				<p class="mt-4">© 2021 / NIT: 890905211-1 / Código DANE: 05001 / Código Postal: 050015</p>
				
			</div>
		</div>

		</div>

	</footer>
	


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
</body>
</html>