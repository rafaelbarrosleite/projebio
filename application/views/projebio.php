<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Projebio</title>
		<link rel="shortcut icon" href="favicon.ico" />

		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>content/estilos/estilos.css" /> 
	</head>
	<body>
		<header class="cabecalho">
			<div class="conteudo">
				<div class="grade">
					<a href="" class="logo grade__coluna_2">
						<img src="<?php echo base_url();?>content/img/logo.png" alt="Logo da empresa">
					</a> 
					<nav class="menu grade__coluna_7"> 
						<a class="menu_link" href="">Página inicial</a>
						<a class="menu_link" href="">Produtos</a>
						<a class="menu_link" href="">Indústria</a>
						<a class="menu_link" href="">Quem somos</a>
						<a class="menu_link" href="">Fale Conosco</a>
					</nav>
					<section class="contato-cabecalho grade__coluna_3 grade">
						<img class="icone" src="<?php echo base_url();?>content/img/ic-phone.png">
						<div class="texto"> 
							Entre em contato
							<div class="numero-do-telefone">
								(67) 9 9956-8208
							</div>
						</div>
					</section>
				</div>
			</div>	
		</header>

		<section> 
			<div class="banner">
				<img src="<?php echo base_url();?>content/img/imagem-banner.jpg" alt="">
			</div>
		</section>
		<main class="conteudo">
			<section class="produtos"> 
				<h2 class="titulo">Conheça nossos produtos</h2>
				<p class="descricao-do-bloco">Trabalhamos com processamento da mamona onde são obtidos dois produtos: o óleo de mamona e a torta de mamona.</p>
				<div class="grade lista-de-produtos">
					<div class="grade__coluna_6 lista-de-produtos_item">
						<img src="<?php echo base_url();?>content/img/oleo-de-mamona.jpg" alt="">
						<h3>Óleo de mamona</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, adipisci.</p>
					</div>
					<div class="grade__coluna_6 lista-de-produtos_item">
						<img src="<?php echo base_url();?>content/img/adubos-organico.jpg" alt="">
						<h3>Torta de mamona</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, adipisci.</p>
					</div>
				</div>
			</section>
		</main>
		<div class="sobre-a-empresa" style="background: url('<?php echo base_url();?>content/img/imagem2.jpg");		">
			<main class="conteudo">
				<div class="grade">
					<img class="imagem-da-empresa" src="<?php echo base_url();?>content/img/edificio.jpg" alt="">
					<div class="informacoes-sobre-a-empresa"> 
						<h2>A PROJEBIO</h2>
						<p>
							A PROJEBIO é uma empresa de processamento de mamona, que fornece para o mercado brasileiro óleo de mamona tipo 1 e adubos orgânicos à base de torta de mamona, que são excelentes fertilizantes pelo alto teor de nitrogênio.

							A empresa investe, continuamente, em tecnologia e inovação e, possui um rigoroso controle de qualidade de seus produtos.

							A nossa missão é a excelência em qualidade industrial e operacional, atrelada a sustentabilidade ambiental e compromisso social.

							Nossas instalações estão localizadas em Jaraguari-MS a 45km da capital.
						</p>
					</div>
				 </div>	
			</main>
		</div>
		<section class="conteudo fotos-da-empresa">
			<div class="grade">
				<div class="fotos-da-empresa_item grade__coluna_3">
					<img class="imagem-da-empresa" src="<?php echo base_url();?>content/img/edificio.jpg" alt="">
					<h3>Lorem Ipsum Dolor</h3>
				</div>
				<div class="fotos-da-empresa_item grade__coluna_3">
					<img class="imagem-da-empresa" src="<?php echo base_url();?>content/img/edificio.jpg" alt="">
					<h3>Lorem Ipsum Dolor</h3>
				</div>
				<div class="fotos-da-empresa_item grade__coluna_3">
					<img class="imagem-da-empresa" src="<?php echo base_url();?>content/img/edificio.jpg" alt="">
					<h3>Lorem Ipsum Dolor</h3>
				</div>
			</div>
			
		</section>
		<section class="entre-em-contato">
			<div class="conteudo">
				<h2 class="titulo">Venha nos conhecer</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor, iste facere!</p>
			</div>
			<div class="localizacao grade">
				<div class="localizacao_item grade__coluna_5">
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3737.9834709004294!2d-54.61935268555817!3d-20.465872060479814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9486e618848ea35d%3A0x865d3df35f71a980!2sR.+Quinze+de+Novembro%2C+310+-+Centro%2C+Campo+Grande+-+MS%2C+79002-140!5e0!3m2!1spt-BR!2sbr!4v1525314798460" width="500" height="282" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="texto-endereco">
						<strong>Escritório:</strong> Rua XV de Novembro, 310, Sala 901 - Campo Grande/MS - Cep: 79.002-040 
					</div>
					<div class="telefone">
						lorem1
					</div>
				</div>
				<div class="localizacao_item grade__coluna_5">
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d142542.43137818173!2d-54.459035340562366!3d-20.145231166058277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fa68e43b9afbfd%3A0x609247e722644dd7!2sBR-163%2C+Mato+Grosso+do+Sul!5e0!3m2!1spt-BR!2sbr!4v1525314764992" width="500" height="282" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="texto-endereco">
						<strong>Fábrica:</strong> 
						Rod BR 163 S/N KM 461 - Jaraguari/MS - Cep: 794.40-000
					</div>
					<div class="telefone">
						lorem1
					</div>
				</div>
			</div>
			<div class="conteudo">
				<h2 class="titulo">ou se preferir, entre em contato conosco</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor, iste facere!</p>
				<form class="formulario-de-contato">
					<div class="grade">
						<div class="formulario-de-contato_item grade__coluna_5">
							<label for="nome">Qual o seu nome?</label>
							<input type="text" id="nome">
						</div> 
						<div class="formulario-de-contato_item  grade__coluna_2">
							<label for="telefone">Telefone:</label>
							<input type="text" id="telefone">
						</div> 
						<div class="formulario-de-contato_item  grade__coluna_4">
							<label for="email">E-mail:</label>
							<input type="text" id="email">
						</div>
					</div>
					<div class="grade">
						<div class="formulario-de-contato_item  grade__coluna_12">
							<label for="comentario">Diga nos o que precisa:</label>
							<textarea name="" id="comentario" cols="30" rows="10"></textarea>
						</div> 
					</div>
					<button type="submit">Enviar</button>
				</form>
			</div>

		</section>
	</body>
</html>

<style type="text/css">




h2{
	font-size: 24px;
}

.titulo{
	margin: 30px 0 5px;
}

.descricao-do-bloco{
	margin-bottom: 30px;
	line-height: 22px;
}



.blocos{
	display: flex;
	align-items: center;
}












</style>