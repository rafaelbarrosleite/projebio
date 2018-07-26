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
		<script src="<?php echo base_url();?>content/js/menu-hamburguer.js"></script>
		<script src="<?php echo base_url();?>content/js/modal.js"></script>
		<script src="<?php echo base_url();?>content/js/notificacao.js"></script>

	</head>
	<body>
		<header class="cabecalho">
			<nav class="navbar" role="navigation" aria-label="main navigation">
				<div class="navbar-brand">
					<a class="navbar-item" href="" class="logo grade__coluna_2">
						<img src="<?php echo base_url();?>content/img/logo.png" alt="Projebio: Óleos e tortas vegetais" width="185" height="63">
					</a> 
					<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
					  <span aria-hidden="true"></span>
					  <span aria-hidden="true"></span>
					  <span aria-hidden="true"></span>
					</a>
				</div>
				<div class="navbar-menu">
					<a class="navbar-item" href="#produtos">Produtos</a>
					<a class="navbar-item" href="#quemSomos">Quem somos</a>
					<a class="navbar-item" href="#industria">Indústria</a>
					<a class="navbar-item" href="#faleConosco">Fale Conosco</a>
			  	</div>
			  	<section class="navbar-menu cotacao">
					<div class="cotacao_item">
						<span class="tipo">Óleo de algodão</span>
						<div class="valor">R$ 3,595/KG</div>
					</div>
					<div class="cotacao_item">
						<span class="tipo">Torta de algodão</span>
						<div class="valor">R$ 3,59/Ton</div>
					</div>
				</section>
				<section class="contato-cabecalho navbar-menu columns">
					<div class="column is-2">
						<img class="icone" src="<?php echo base_url();?>content/img/ic-phone.png">
					</div>	
					<div class="texto column is-8"> 
						Entre em contato
						<div class="numero-do-telefone">
							(67) 9 9920-3974
						</div>
					</div>
				</section>
			</nav>
		</header>
		<section class="banner"> 
			<figure>	
				<span class="setas passador next"></span>
		   		<span class="setas passador prev"></span>		
				<div class="banner_imagens" id="slider">
					<div class="passador imagens">
						<img src="<?php echo base_url();?>content/img/img-1.jpg" alt="Adubos orgânicos para gados">
					</div>
					<div class="passador imagens">
						<img src="<?php echo base_url();?>content/img/img-2.jpg" alt="Plantio de algodão">
					</div>
					<div class="passador imagens">
						<img src="<?php echo base_url();?>content/img/img-3.jpg" alt="Plantio de algodão">
					</div>
				</div>
			</figure>
		   <figcaption></figcaption>
		</section> 
		<main id="produtos" class="conteudo">
			<section class="produtos"> 
				<h3 class="title is-3">Conheça nossos produtos</h3>
				<div class="columns">
					<div class="card column">
					  <div class="card-image">
					    <figure class="image is-4by3">
					      <img src="<?php echo base_url();?>content/img/oleo-de-mamona.jpg" alt="">
					    </figure>
					  </div>
					  <div class="card-content">
					    <div class="media">
					      <div class="media-content">
					        <p class="title is-4">Óleo de algodão bruto</p>
					        <span class="tag is-info">R$ 3,595/KG</span>
					      </div>
					    </div>

					    <div class="content">
							Óleo de algodão bruto é obtido através do processamento mecânico do caroço de algodão, sendo utilizado para: produção de Biodiesel, Pulverização Agrícola e Refino.
					     <button type="button" id="abrir-modal">Ficha técnica</button>
					    </div>
					  </div>
					</div>
					<div class="card column">
					  <div class="card-image">
					    <figure class="image is-4by3">
					      <img src="<?php echo base_url();?>content/img/adubos-organico.jpg" alt="">
					    </figure>
					  </div>
					  <div class="card-content">
					    <div class="media">
					      <div class="media-content">
					        <p class="title is-4">Torta de algodão</p>
					        <span class="tag is-info">R$ 3,59/Ton</span>
					      </div>
					    </div>

					    <div class="content">
											A torta de algodão, é o subproduto da extração do óleo contido no grão do algodão e esmagado, sendo usada na forma obtida ou moída e peletizada para fins de nutrição animal.
					     
					     <button type="button" class="sem-preenchimento" id="abrir-modal">Ficha técnica</button>
					    </div>
					  </div>
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
		<section class="ligue-nos hero">
		  <div class="hero-body">
		    <div class="container columns">
			  <section class="column">
					<div class="columns is-mobile">
						<img class="icone" src="<?php echo base_url();?>content/img/ic-phone-branco.png">
						<div class="texto column is-8"> 
							Ligue agora
							<div class="numero-do-telefone">
								(67) 9 9920-3974
							</div>
						</div>
					</div>
				</section>
				<section class="column">
					<div class="columns is-mobile">
						<img class="icone" src="<?php echo base_url();?>content/img/ic-email.png">
						<div class="texto column is-8"> 
							Atendimento por e-mail
							<div class="numero-do-telefone">
								vendas@projebio.com.br
							</div>
						</div>
					</div>
				</section>
		    </div>
		  </div>
		</section>
		<div id="quemSomos" class="sobre-a-empresa" style="background: url('<?php echo base_url();?>content/img/imagem-empresa.jpg") no-repeat;		>
			<main class="conteudo">
				<h2 class="title is-3">A PROJEBIO</h2>
				<p class="subtitle is-6">
					A PROJEBIO é uma empresa de processamento de caroço de algodão, disponibilizando ao mercado local a TORTA DE ALGODÃO e ÓLEO DE ALGODÃO BRUTO. 
					Produtos estes são ingredientes fundamentais para os ramos do agronegócio, biodiesel e industria alimentícia.
					<br>	
A empresa investe, continuamente, em tecnologia e inovação, possuindo um rigoroso controle de qualidade de seus produtos, buscando é a excelência em qualidade industrial e operacional.
					<br>
					Nossas instalações estão localizadas em Jaraguari-MS a 45km da capital.
				</p>
			</main>
		</div>
		<div class="columns">	
			<div class="card column">
			  <div class="card-image">
			    <figure class="image is-4by3">
			      <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
			    </figure>
			  </div>
			</div>
			<div class="card column">
			  <div class="card-image">
			    <figure class="image is-4by3">
			      <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
			    </figure>
			  </div>
			</div>
			<div class="card column">
			  <div class="card-image">
			    <figure class="image is-4by3">
			      <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
			    </figure>
			  </div>
			</div>
		</div>
		<section id="faleConosco" class="entre-em-contato">
			<div class="conteudo">
				<h2 class="title is-4">Entre em contato conosco</h2>
				<p class="subtitle is-6">Fale diretamente com a Projebio. Basta enviar as informações abaixo que entraremos em contato.</p>
				<form class="formulario-de-contato" role="form" method="post" action="<?php echo base_url()?>base/salvarContato">
					<div class="columns">
						<div class="formulario-de-contato_item column is-5">
							<label for="nome">Qual o seu nome?</label>
							<input type="text" class="form-control" id="nome" name="nome" required>
						</div> 
						<div class="formulario-de-contato_item column is-3">
							<label for="telefone">Telefone:</label>
							<input type="text" class="form-control" id="telefone" name="telefone" required>
						</div> 
						<div class="formulario-de-contato_item  column is-4">
							<label for="email">E-mail:</label>
							<input type="text" class="form-control" id="email" name="email" required>
						</div>
					</div>
					<div class="columns">
						<div class="formulario-de-contato_item column is-12">
							<label for="comentario">Diga nos o que precisa:</label>
							<textarea class="form-control" id="comentario" cols="30" rows="10" name="comentario" required></textarea>
						</div> 
					</div>
					<div class="columns">
						<div class="column">	
							<button id="enviarMensagem" class="botao acao-primaria" type="submit">Enviar</button>
						</div>
					</div>
				</form>
			</div>
			<div class="conteudo">
				<h2 class="title is-4">ou se preferir, Venha nos conhecer</h2>
				<p></p>
			</div>
			<div class="localizacao columns">
				<div class="localizacao_item column is-6">
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3737.9834709004294!2d-54.61935268555817!3d-20.465872060479814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9486e618848ea35d%3A0x865d3df35f71a980!2sR.+Quinze+de+Novembro%2C+310+-+Centro%2C+Campo+Grande+-+MS%2C+79002-140!5e0!3m2!1spt-BR!2sbr!4v1525314798460" width="500" height="282" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="texto-endereco">
						<strong>Escritório:</strong> Rua XV de Novembro, 310, Sala 901 - Campo Grande/MS - Cep: 79.002-040 
					</div>
				</div>
				<div class="localizacao_item column is-6">
					<div class="mapa">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d142542.43137818173!2d-54.459035340562366!3d-20.145231166058277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fa68e43b9afbfd%3A0x609247e722644dd7!2sBR-163%2C+Mato+Grosso+do+Sul!5e0!3m2!1spt-BR!2sbr!4v1525314764992" width="500" height="282" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="texto-endereco">
						<strong>Fábrica:</strong> 
						Rod BR 163 S/N KM 461 - Jaraguari/MS - Cep: 794.40-000
					</div>
				</div>
			</div>
		</section>
		<footer class="footer">
		  <div class="content has-text-centered">
		    <p>
		      2015 © Projebio - Óleos e tortas vegetais. Todos dos direitos reservados.
		    </p>
		  </div>
		</footer>

		<div class="notification is-success">
		  <button class="delete"></button>
		  Sua mensagem foi enviada com sucesso!
		  Obrigado.
		</div>
	</body>
</html>
<script type="text/javascript">
	function setaImagem(){
    var settings = {
        primeiraImg: function(){
            elemento = document.querySelector("#slider .imagens:first-child");
            elemento.classList.add("ativo");
            this.legenda(elemento);
        },

        slide: function(){
            elemento = document.querySelector(".ativo");

            if(elemento.nextElementSibling){
                elemento.nextElementSibling.classList.add("ativo");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");
                settings.primeiraImg();
            }

        },

        proximo: function(){
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo");

            if(elemento.nextElementSibling){
                elemento.nextElementSibling.classList.add("ativo");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");
                settings.primeiraImg();
            }
            intervalo = setInterval(settings.slide,4000);
        },

        anterior: function(){
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo");

            if(elemento.previousElementSibling){
                elemento.previousElementSibling.classList.add("ativo");
                settings.legenda(elemento.previousElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");                     
                elemento = document.querySelector(".imagens:last-child");
                elemento.classList.add("ativo");
                this.legenda(elemento);
            }
            intervalo = setInterval(settings.slide,4000);
        },

        legenda: function(obj){
            var legenda = obj.querySelector("img").getAttribute("alt");
            document.querySelector("figcaption").innerHTML = legenda;
        }

    }

    //chama o slide
    settings.primeiraImg();

    //chama a legenda
    settings.legenda(elemento);

    //chama o slide à um determinado tempo
    var intervalo = setInterval(settings.slide,4000);
    document.querySelector(".next").addEventListener("click",settings.proximo,false);
    document.querySelector(".prev").addEventListener("click",settings.anterior,false);
	}

	window.addEventListener("load",setaImagem,false);
</script>
