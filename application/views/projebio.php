<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Projebio</title>
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>content/estilos/estilos.css" /> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	</head>
	<body>
		<header class="cabecalho">
			<div class="conteudo">
				<div class="grade">
					<a href="" class="logo grade__coluna_2">
						<img src="<?php echo base_url();?>content/img/logo.png" alt="Logo da empresa">
					</a> 
					<nav class="menu grade__coluna_6"> 
						<a class="menu_link" href="#produtos">Produtos</a>
						<a class="menu_link" href="#quemSomos">Quem somos</a>
						<a class="menu_link" href="#industria">Indústria</a>
						<a class="menu_link" href="#faleConosco">Fale Conosco</a>
					</nav>
					<section class="grade grade__coluna_3 cotacao">
						<div class="cotacao_item">
							<span class="tipo">Óleo de algodão</span>
							<div class="valor">R$ 3,595/Ton</div>
						</div>
						<div class="cotacao_item">
							<span class="tipo">Torta de algodão</span>
							<div class="valor">R$ 3,595/Ton</div>
						</div>
					</section>
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
		<main id="produtos" class="conteudo">
			<section class="produtos"> 
				<h2 class="titulo">Conheça nossos produtos</h2>
				<p class="descricao-do-bloco">Trabalhamos com processamento da mamona onde são obtidos dois produtos: o óleo de mamona e a torta de mamona.</p>
				<div class="grade lista-de-produtos">
					<div class="grade__coluna_5 lista-de-produtos_item">
						<img src="<?php echo base_url();?>content/img/oleo-de-mamona.jpg" alt="">
						<h3>Óleo de algodão bruto</h3>
						<div class="descricao">
							<p>O Óleo de Algodão é extraído da semente de algodão que também é conhecida como caroço do algodão. É um produto utilizado para: produção de Biodiesel, Pulverização Agrícola e Refino.</p>
						
						</div>
						<p class="cotacao-do-dia">
							Cotação 05/06:
							<strong>R$ 490,00 / Tonelada</strong>
						</p>
						<button type="button" class="sem-preenchimento" id="abrir-modal">Saiba mais</button>
					</div>
					<div class="grade__coluna_5 lista-de-produtos_item">
						<img src="<?php echo base_url();?>content/img/adubos-organico.jpg" alt="">
						<h3>Torta de algodão</h3>
						<div class="descricao">
							<p>
								A torta de algodão, é o subproduto da extração do óleo contido no grão do algodão e esmagado, sendo usada na forma obtida ou moída e peletizada para fins de nutrição animal.
							</p>

							<!-- <p>
								Pode-se produzir dois tipos de torta: a torta gorda (5% de óleo residual) mais energética, proveniente da prensagem mecânica, e com um menor teor de proteína, e a chamada torta magra (menos de 2% de óleo residual), menos energética, oriunda da extração através de solventes, apresentando maior teor de proteínas. A torta de algodão é um produto utilizado com finalidades proteicas, sendo substituta do caroço de algodão e farelo de algodão, principalmente o 28% PB, na elaboração de dietas para ruminantes. Frequentemente ela é disponível, fora da safra do caroço de algodão, tornando-se então uma boa opção.
							</p> -->
						</div>
						<p class="cotacao-do-dia">
							Cotação 05/06:
							<strong>R$ 490,00 / Tonelada</strong>
						</p>
						<button type="button" class="sem-preenchimento" id="abrir-modal">Saiba mais</button>
					</div>
				</div>
			</section>
		</main>
		<div class="modal" id="modal" role="dialog">
		    <div class="modal-dialog">
		    	<div class="modal-content">
			        <div class="modal-header">
						<div type="button" class="fechar-modal sem-preenchimento">&times;
						</div>
						<h2>Óleo de algodão bruto</h2>
			        </div>
			        <div class="modal-body">
			        	<p>
							O óleo e muito utilizado no setor de comestíveis, como óleo para saladas, como óleo de cozinha é usado em frituras, tanto em cozinhas comerciais como nas caseiras.
						</p>
						<p>
							Para as indústrias de biodiesel, o óleo de algodão tem a vantagem de ser mais barato que o de soja. É por isso que esse óleo acabou conquistando espaço e se tornando uma das matérias-primas mais usadas para produção de biodiesel no Brasil.
						</p>	
						<p>
							O óleo também vem sendo utilizado no combate às pragas das lavouras, principalmente nas plantações de coco. Por ser um produto natural, não agride o meio ambiente, não compromete a saúde do agricultor e é de fácil manuseio.
						</p>	
			        </div>
		        </div>
		    </div>
		</div>


		<div id="quemSomos" class="sobre-a-empresa" style="background: url('<?php echo base_url();?>content/img/imagem2.jpg");		">
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
		<section id="industria" class="conteudo fotos-da-empresa">
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
		<section id="faleConosco" class="entre-em-contato">
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
					<button class="botao acao-primaria" type="submit">Enviar</button>
				</form>
			</div>
		</section>
	</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
	    $("#abrir-modal").click(function(){
	        $("#modal").toggle();
	    });

	     $(".fechar-modal").click(function(){
	        $("#modal").toggle();
	    });
	});

	$('.menu_link').click(function(){
		$('html, body').animate({
		scrollTop: $( $(this).attr('href') ).offset().top
		}, 2500);
		return false;
	});
</script>


