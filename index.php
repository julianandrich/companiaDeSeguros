<?php include("conexion.php"); ?>
<?php
  if ($_POST) {
    $name = $_POST['name'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $tipo_seguro = $_POST['tipo_seguro'];

    $nuevaConexion = new Conexion();
    $sql = "INSERT INTO `contact_form` (`id`, `name`, `dni`, `email`, `number`, `tipo_seguro`) VALUES (NULL, '$name', '$dni', '$email', '$number', '$tipo_seguro');";
    $nuevaConexion->ejecutar($sql);
  }

  $nuevaConexion = new Conexion();
  $resultado = $nuevaConexion->consultar("SELECT * FROM `contact_form`");

  // print_r($resultado);


  // $name = "";
  // $dni = "";
  // $email = "";
  // $number = "";
  // $tipo_seguro = "";

    // $name = (isset($_POST['name'])) ? $_POST['name'] : ""; // método if ternario: ? haz esto, : de lo contrario esto.
    // $dni = (isset($_POST['dni'])) ? $_POST['dni'] : "";
    // $email = (isset($_POST['email'])) ? $_POST['email'] : "";
    // $number = (isset($_POST['number'])) ? $_POST['number'] : "";
    // $tipo_seguro = (isset($_POST['tipo_seguro'])) ? $_POST['tipo_seguro'] : "";
?>

<?php
  // $conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('conecction failed');

  // if (isset($_POST['submit'])) {
  //   $name = mysqli_real_escape_string($conn, $_POST['name']);
  //   $dni = $_POST['dni'];
  //   $email = mysqli_real_escape_string($conn, $_POST['email']);
  //   $number = $_POST['number'];
  //   $tipo_seguro = $_POST['tipo_seguro'];

  //   $insert = mysqli_query($conn, "INSERT INTO 'contact_form' (name, dni, email, number, tipo_seguro) VALUES ($name, $dni, $email, $number, $tipo_seguro)") or die('query failed');

  //   if ($insert) {
  //     $message[] = '¡Enviado exitosamente!';
  //   } else {
  //     $message[] = 'El envío no se realizó.';
  //   }
  // }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta
			http-equiv="X-UA-Compatible"
			content="IE=edge"
		/>
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>SNPC</title>
		<!-- custom css link -->
		<link rel="stylesheet" href="css/style.css" />
		<!-- bootstrap cdn link -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"
		/>
		<!-- font awesome cdn link-->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
			integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
    <!-- Ajax -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	</head>
	<body>
		<!-- header section starts -->
		<header class="header fixed-top" id="header">
			<div class="container">
				<div
					class="row align-items-center justify-content-between"
				>
					<a href="#inicio" class="logo">SNPC</a>
					<nav class="nav">
						<a href="#inicio">Inicio</a>
						<a href="#nosotros">Nosotros</a>
						<a href="#servicios">Servicios</a>
						<a href="#testimonios">Testimonios</a>
					</nav>
					<a href="#contacto" class="link-btn">
						Contáctanos
					</a>
					<div
						id="menu-btn"
						class="fas fa-bars"
					></div>
				</div>
			</div>
		</header>
		<!-- header section ends -->

		<!-- home section starts -->
		<section class="home" id="home">
			<div class="container">
				<div
					class="row min-vh-100 align-items-center"
				>
					<div
						class="content text-center text-md-left"
					>
						<h3>Valoramos tu vida</h3>
						<p>
							Infórmate más sobre nuestros
							servicios con uno de nuestro
							asesores.
						</p>
						<a href="#contacto" class="link-btn"
							>Contáctanos</a
						>
					</div>
				</div>
			</div>
		</section>
		<!-- home section ends -->

		<!-- nosotros section starts -->
		<section class="about" id="about">
			<div class="container">
				<div
					class="row align-items-center justify-content-between"
				>
					<div class="col-md-6 col-lg-5 image">
						<img
							src="img/about.jpg"
							alt=""
							class="w-100 mb-5 mb-md-0"
						/>
					</div>
					<div class="col-md-6 col-lg-6 content">
						<span>Sobre nosotros</span>
						<h3>Deseamos tu bienestar</h3>
						<p>
							Lorem ipsum, dolor sit amet
							consectetur adipisicing elit. Nam in
							illum, officiis amet possimus
							deleniti reprehenderit nisi itaque
							voluptates quaerat placeat cumque,
							omnis officia quae.
						</p>
						<a href="" class="link-btn"
							>Contáctanos</a
						>
					</div>
				</div>
			</div>
		</section>
		<!-- nosotros section ends -->

		<!-- servicios section starts -->
		<section class="services" id="services">
			<h1 class="heading">Nuestros servicios</h1>
			<div class="box-container container">
				<div class="box">
					<i class="fa-solid fa-user-doctor"></i>
					<h3>Citas médicas</h3>
					<p>
						Lorem, ipsum dolor sit amet
						consectetur adipisicing elit. Illum,
						non!
					</p>
				</div>
				<div class="box">
					<i class="fa-solid fa-microscope"></i>
					<h3>Pruebas clínicas</h3>
					<p>
						Lorem, ipsum dolor sit amet
						consectetur adipisicing elit. Illum,
						non!
					</p>
				</div>
				<div class="box">
					<i class="fa-solid fa-stethoscope"></i>
					<h3>Tratamientos médicos</h3>
					<p>
						Lorem, ipsum dolor sit amet
						consectetur adipisicing elit. Illum,
						non!
					</p>
				</div>
				<div class="box">
					<i
						class="fa-solid fa-file-waveform"
					></i>
					<h3>Intervenciones quirúrgicas</h3>
					<p>
						Lorem, ipsum dolor sit amet
						consectetur adipisicing elit. Illum,
						non!
					</p>
				</div>
				<div class="box">
					<i class="fa-solid fa-bed-pulse"></i>
					<h3>Hospitalización</h3>
					<p>
						Lorem, ipsum dolor sit amet
						consectetur adipisicing elit. Illum,
						non!
					</p>
				</div>
				<div class="box">
					<i class="fa-solid fa-capsules"></i>
					<h3>Descuentos farmacéuticos</h3>
					<p>
						Lorem, ipsum dolor sit amet
						consectetur adipisicing elit. Illum,
						non!
					</p>
				</div>
			</div>
		</section>
		<!-- servicios section ends -->

		<!-- process section starts -->
		<section class="process">
			<h1 class="heading">Seguros</h1>
			<div class="box-container container">
				<div class="box">
					<img src="img/Basico.svg" alt="" />
					<h3>Básico</h3>
					<p>$500</p>
				</div>
				<div class="box">
					<img src="img/Intermedio.svg" alt="" />
					<h3>Intermedio</h3>
					<p>$1000</p>
				</div>
				<div class="box">
					<img src="img/Premium.svg" alt="" />
					<h3>Premium</h3>
					<p>$1500</p>
				</div>
			</div>
		</section>
		<!-- process section ends -->

		<!-- testimonios section starts -->
		<section class="reviews" id="reviews">
      <h1 class="heading">Clientes satisfechos</h1>
      <div class="box-container container">
        <div class="box">
          <img src="img/Sabrina.jpg" alt="">
          <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque porro, veritatis distinctio facilis soluta atque quisquam ab? Vero, quae nam."</p>
          <h3>Sabrina</h3>
          <span>Cliente satisfecho</span>
        </div>
        <div class="box">
          <img src="img/Ricardo.jpg" alt="">
          <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque porro, veritatis distinctio facilis soluta atque quisquam ab? Vero, quae nam."</p>
          <h3>Ricardo</h3>
          <span>Cliente satisfecho</span>
        </div>
        <div class="box">
          <img src="img/Jannet.jpg" alt="">
          <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque porro, veritatis distinctio facilis soluta atque quisquam ab? Vero, quae nam."</p>
          <h3>Jannet</h3>
          <span>Cliente satisfecho</span>
        </div>
      </div>
    </section>
    <!-- testimonios section ends -->
    
    <!-- contact section starts -->
    <section class="contact" id="contact">
      <h1 class="heading">Contáctanos</h1>
      <form action="" method="post" name="contact-form" id="Formulario">

        <!-- <?php if ($_POST) { ?>
        <?php } ?> -->
        <div id="message">H</div>

        <span>Nombre y Apellido:</span>
        <input type="text" name="name" placeholder="Nombre" class="box" required>
        <span>DNI:</span>
        <input type="number" name="dni" placeholder="DNI" class="box" required>
        <span>Email:</span>
        <input type="email" name="email" placeholder="Email" class="box" required>
        <span>Teléfono:</span>
        <input type="number" name="number" placeholder="Teléfono" class="box" required>
        <span>Tipo de seguro:</span>
        <select class="form-select box" name="tipo_seguro" id="tipo_seguro_id" onchange="getTipoSeguro()" required>
          <option selected disabled>Selecciona el tipo</option>
          <option value="basico">Básico</option>
          <option value="intermedio">Intermedio</option>
          <option value="premium">Premium</option>
        </select>
        <input type="text" name="valorTipoSeguro" id="valorTipoSeguro" placeholder="$" class="box-precio">
        <div class="btn-contact">
          <input type="submit" name="submit" id="Enviar" class="link-btn" value="Enviar">
        </div>
      </form>
      <!-- <div id="respuesta"></div> -->
    </section>
    <!-- contact section ends -->

	</body>
	<script src="js/script.js"></script>
  <script>
  //   $('#Enviar').click(function () {
  //   $.ajax({
  //     url: 'datos.php',
  //     type: 'POST',
  //     // dataType: ,
  //     data: $('#Formulario').serialize(),
  //     success: function (res) {
  //       $('#message').html(res);
  //     }
  //   })
  // });

  </script>
</html>
