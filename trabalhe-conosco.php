<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
	<meta http-equiv="Content-Language" content="pt-br, en, fr, it">
	<meta charset="utf-8">


	<link rel="stylesheet" href="./css/style-menu.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdn.es.gov.br/fonts/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/style-form.css">
	<link rel="stylesheet" href="./css/style-menu.css">

	<title>Trabalhe Conosco</title>

	<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
</head>

<body>

	<header>
		<nav>
			<a href="index.html" class="logo"><img src="./images/logo1.png" alt=""></a>
			<div class="mobile-menu">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
			<ul class="nav-list">
				<li><a href="index.html#sobre">Sobre</a></li>
				<li><a href="index.html#servicos">Serviços</a></li>
				<li><a href="solicite-orcamento.php">Orçamento</a></li>
				<li><a href="trabalhe-conosco.php">Vagas</a></li>
			</ul>
		</nav>
	</header>

	<div class="inicio">
		<div class="voltar">
			<h1> TRABALHE CONOSCO</h1>
		</div>

		<div class="div-tc container mt-3">
			<h2>Faça Parte da Nossa Equipe</h2>
			<font class="tc">
				Venha fazer parte da nossa equipe repleta de profissionais cuidadosos e dedicados,
				você sera mais que bem-vindo.
				Atuamos no Alto Tietê prestando serviços de controle de acesso
				(portaria) e fazemos monitoramento 24 horas em parceria com a
				empresa STAR, ambas com sede em Suzano. Fazemos toda a
				conservação, zeladoria e manutenção das áreas dos condomínios.
			</font>
		</div>

		<form action="./php/enviar-trabalhe-conosco.php" method="post" onsubmit="return checkForm()" enctype="multipart/form-data" class="container-lg mt-5">

			<div class="cor">
				<div class="container mt-3">
					<div class="mb-3">
						<label for="nome" class="form-label fs-5">* Nome</label>
						<input type="text" class="form-control required" id="nome " name="nome" autocomplete="off"><br>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label fs-5">* Email</label>
						<input type="email mail" class="form-control required" id="email " name="email" autocomplete="off"><br>
					</div>
					<div class="mb-3">
						<label for="telefone" class="form-label fs-5">* Telefone</label>
						<input type="tel" class="form-control required" id="telefone " name="telefone" autocomplete="off"><br>
					</div>
					<div class="mb-3">
						<label for="formFile" class="form-label fs-5">* Envie arquivo .pdf</label>
						<input class="form-control required" type="file" id="formFile" name="curriculo" accept=".pdf">
					</div>

					<button type="submit" class="button-login btn my-3">Enviar</button>

					<div>
						<?php
						if (isset($_SESSION['sendEmail'])) {
							echo ("<p class='form-label fs-5'>Recebemos o seu email, aguarde nosso contato</p>");
						} else if (isset($_SESSION['noSendEmail'])) {
							echo ("<p class='form-label fs-5'>Preecha todos os campos obrigatorios de forma correta</p>");
						}
						session_destroy();
						?>
					</div>
				</div>
		</form>

		<div class="container maps">
			<p id="local" class="fs-5">
				<i class="fa fa-map-marker fa-3x " aria-hidden="true"></i><br>
				R. Gen. Francisco Glicério, 1561 <br>Suzano, São Paulo<br>
				Sala 1, 1°Andar
			</p>

			<p id="local" class="fs-5">
				<i class="fa fa-phone fa-3x" aria-hidden="true"></i></i><br>
				Whatsapp ou Telefone <br>(11) 95454-5454<br>
			</p>
		</div>
	</div><br>

	<script src="./js/formValidation.js"></script>
	<script src="./js/mobile-navbar.js"></script>
</body>

</html>