<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

	<meta http-equiv="Content-Language" content="pt-br, en, fr, it">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdn.es.gov.br/fonts/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style-menu.css">
	<link rel="stylesheet" type="text/css" href="./css/style-form.css">
	<meta charset="utf-8">

	<title>Solicite seu Orçamento</title>

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
			<h1> Solicite seu orçamento </h1>
		</div>

		<div class="div-tc">
			<h2>NÃO PERCA TEMPO!</h2>
			<font class="tc">
				Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste
				placeat odit, accusamus ducimus voluptatum alias Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste
				placeat odit, accusamus ducimus voluptatum alias
				Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste
				placeat odit, accusamus ducimus voluptatum alias Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste
				placeat odit, accusamus ducimus voluptatum alias
			</font>
		</div>

		<form action="./php/enviar-solicite-orcamento.php" method="post" onsubmit="return checkForm()" class="container-lg">

			<div class="cor">
				<div class="container mt-3">
					<div class="mb-3">
						<label for="nome" class="form-label">Nome</label>
						<input type="text" class="form-control" id="nome " name="nome" autocomplete="off"><br>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">* Email</label>
						<input type="email mail" class="form-control required" id="email " name="email" autocomplete="off"><br>
					</div>
					<div class="mb-3">
						<label for="telefone" class="form-label">Telefone</label>
						<input type="tel" class="form-control" id="telefone " name="telefone" autocomplete="off"><br>
					</div>
					<div class="mb-3">
						<label for="assunto" class="form-label">* Assunto</label>
						<input type="subject" class="form-control required" id="assunto " name="assunto" autocomplete="off"><br>
					</div>
					<div class="form-floating">
						<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="mensagem"></textarea>
						<label for="floatingTextarea">* Mensagem</label>
					</div>
					<button type="submit" class="button-login btn mb-3">Enviar</button>

					<div>
						<?php
						if (isset($_SESSION['sendEmail'])) {
							echo ("<p>Recebemos o seu email, aguarde nosso contato</p>");
						} else if (isset($_SESSION['noSendEmail'])) {
							echo ("<p>Preecha todos os campos obrigatorios de forma correta</p>");
						}
						session_destroy();
						?>
					</div>
				</div>
		</form>

		<div class="container maps">
			<p id="local">
				<i class="fa fa-map-marker fa-3x " aria-hidden="true"></i><br>
				R. Gen. Francisco Glicério, 1561 <br>Suzano, São Paulo<br>
				Sala 1, 1°Andar
			</p>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1087.401946930603!2d-46.3140325567176!3d-23.54797791726808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7a77735f1d7b%3A0x851e985b604518c!2sR.%20Gen.%20Francisco%20Glic%C3%A9rio%2C%201561%20-%20Centro%2C%20Suzano%20-%20SP%2C%2008674-003!5e0!3m2!1spt-BR!2sbr!4v1635427763161!5m2!1spt-BR!2sbr" width="300px" height="400px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
	</div><br><br>

	<script src="./js/formValidation.js"></script>
	<script src="./js/mobile-navbar.js"></script>
</body>

</html>