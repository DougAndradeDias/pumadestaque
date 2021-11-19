<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="./css/style-menu.css">
	<meta http-equiv="Content-Language" content="pt-br, en, fr, it">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdn.es.gov.br/fonts/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/style-form.css">
	<meta charset="utf-8">

	<title>Trabalhe Conosco</title>

</head>

<body>
	<div class="inicio">
		<h1> TRABALHE CONOSCO</h1>
		<div class="div-tc">
			<h2>Faça Parte da Nossa Equipe</h2>
			<font class="tc">
			  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste
              placeat odit, accusamus ducimus voluptatum alias Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste
              placeat odit, accusamus ducimus voluptatum alias
			  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste
              placeat odit, accusamus ducimus voluptatum alias Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste
              placeat odit, accusamus ducimus voluptatum alias
			</font>
		</div>

		<form action="enviar.php" method="post" onsubmit="return checkForm()">

			<div class="cor">
				<div id="login">
					<div>
						<p> Nome: </p>
						<input id="nome-login" type="text" name="nome" /><br>
					</div>

					<div>
						<p> E-mail:* </p>
						<input class="required" id="nome-login" type="mail" name="email" /><br>
					</div>

					<div>
						<p> Telefone: </p>
						<input id="nome-login" type="tel" name="telefone" /><br>
					</div>
					<div>
                        <p id="cur">Envie arquivo .pdf</p>
                    <input class="file" type="file" name="curriculo" accept=".pdf">
					</div><br>

					<button class="button-login">Enviar</button>
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

		<div id="maps">
			<p id="local">
				<i class="fa fa-map-marker fa-3x " aria-hidden="true"></i><br>
				R. Gen. Francisco Glicério, 1561 <br>Suzano, São Paulo<br>
				Sala 1, 1°Andar

			</p>
            <p id="local">
            <i class="fa fa-phone fa-3x" aria-hidden="true"></i></i><br>
				Whatsapp ou Telefone <br>(11) 95454-5454<br>

			</p>
		</div>
	</div><br>

	<script src="./js/formValidation.js"></script>
</body>

</html>