
<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/c367150456.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Potifório, Matheus Felipe Freitas, Matheus Felipe">
	<meta name="description" content="Meu portfolio de programador front end">
	<meta name="author" content="Matheus Felipe">
	<title>Meu Portfolio</title>
</head>
<body>
	<section class="banner-principal">
		<div class="center">
			<h2>Olá, me chamo Matheus Felipe <span>e sou programador Front End.</span></h2>
			<div class="button">
				<div class="button-flex">
					<div class="button1">
						<button><a href="#contato"> <span>Trabalhe comigo</span> <i class="fa-solid fa-arrow-right"></i></a></button>
					</div><!--button1-->
					<div class="button2" onclick="teste()">
						<p>Projetos</p>
					</div><!--button2-->
					
				</div>
			</div><!--button-->

			<div class="projetos-menu">
				<ul>
					<li><a target="_blank" href="https://codewebagency.com.br/">Code Web Agency</a></li>
					<li><a target="_blank" href="https://codewebstore.com.br/">Code Web Store</a></li>
					<li><a target="_blank" href="https://escola.matheusfelipefreitas.com"> Trabalhos escolares</a></li>
				</ul>
				
			</div><!--projetos-menu-->
		</div><!--center-->
	</section><!--banner-principal-->

	<section class="sobre-min">
		<div class="center">
			<div class="apresentacao">
				<h2>Sobre mim</h2>
				<p>Bem vindo ao meu portifório, me chamo Matheus Felipe e tenho 18 anos, atualmente morando em Jataí - GO me considero uma pessoa dedicada, afinal tem que ter coragem para entrar nessa área onde somente o estudo constante e estresse diário gera resultados. Meu foco está sendo o estudo e trabalho com criação e manutenção de sites. Já tenho alguns projetos já feitos como parte do meu trabalho.</p>
				<img src="imagens/mtfoto2.jpeg">
			</div><!--apresentacao-->
		</div><!--center-->
	</section><!--sobre-min-->

	<section class="especializacoes">
		<h2>Especializações</h2>
		<div class="center">
			<div class="especialidade">
				<div class="flex-container-sobre-min">
					<i class="fa-brands fa-html5"></i>
					<h2>HTML5</h2>
				</div><!--flex-container-sobre-min-->
				<p>Desenvolvemos os seus sites da maneira mais limpa e organizada</p>
			</div><!--especialidade-->

			<div class="especialidade">
				<div class="flex-container-sobre-min">
					<i class="fa-brands fa-css3-alt"></i>
					<h2>CSS3</h2>
				</div><!--flex-container-sobre-min-->
				<p>Com as mais diversas estilizações e modelos</p>
			</div><!--especialidade-->

			<div class="especialidade">
				<div class="flex-container-sobre-min">
					<i class="fa-brands fa-js"></i>
					<h2>JS</h2>
				</div><!--flex-container-sobre-min-->
				<p>E sempre se lembrando dos mínimos detalhes</p>
			</div><!--especialidade-->
		</div><!--center-->
	</section><!--especializacoes-->

	<section class="contato" id="contato">
		<h2>ENTRE EM CONTATO</h2>
		<div class="center">
			<div class="container-mensagem">
				<h2>NÃO SEJA TÍMIDO</h2>
				<p>Fique a vontade para entrar em contato comigo. Estou sempre aberto para discutir novos projetos, ideias criativas ou oportunidades de fazer parte de suas visões.</p>

				<div class="container-contato">
					<div class="flexbox-contato">
						<i class="fa-brands fa-whatsapp"></i>
						<p>Me envie uma mensagem !</p>
					</div><!--flexbox-contato-->
					<p>(64) 993254746</p>
				</div><!--container-contato-->

				<div class="container-contato">
					<h3>Ou siga nas minhas redes sociais</h3>
					<a target="_blank" href="https://www.facebook.com/matheusfelipebj"><i class="fa-brands fa-facebook"></i></a>
					<a target="_blank" href="https://www.instagram.com/matheusfelipebj/"><i class="fa-brands fa-instagram"></i></a>
				</div><!--container-contato-->
			</div><!--container-mensagem-->

			<div class="contato-form" id="contato-form">
				<h2>Me mande uma mensagem !</h2>
				<form method="POST" id="form1">
					<div class="form">
						<input type="text" name="name" placeholder="Nome / Ex: Matheus Felipe" required>
						<input type="email" name="email" placeholder="E-mail / Ex: matheusfelipebom@gmail.com" required>
						<textarea name="mensagem" placeholder="Mensagem / Assunto"required></textarea>
						<div class="contato-submit">
							<input type="submit" name="acao" value="ENVIAR">
						</div><!--contato-submit-->
					</div><!--form-->
				</form>
			</div><!--contato-form-->
		</div><!--center-->
	</section><!--contato-->

	<script src="js/jquery.js"></script>
	<script src="js/functions.js"></script>
	<script>
		var projetosMenu = document.querySelector('.projetos-menu');
		var index = 0;

		function teste() {
			if (index == 0) {
				projetosMenu.style.maxHeight = projetosMenu.scrollHeight + "px";
				index++;
			} else {
				projetosMenu.style.maxHeight = 0;
				index = 0;
			}
		}

	</script>

</body>
</html>



