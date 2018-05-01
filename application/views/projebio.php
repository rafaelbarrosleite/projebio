<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Projebio</title>
		<link rel="shortcut icon" href="favicon.ico" />
		<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
	</head>
	<body>
		<header class="cabecalho">
			<div class="conteudo">
				<a href="" class="logo">
					<img src="" alt="Imagem da empresa">
				</a>
		<!-- 		<a href="" class="logo">
					<img src="http://via.placeholder.com/185x63" alt="Imagem da empresa">
				</a> -->
				<nav class="links"> 
					<a href="">Página inicial</a>
					<a href="">Produtos</a>
					<a href="">Indústria</a>
					<a href="">Quem somos</a>
					<a href="">Informações</a>
					<a href="">Fale Conosco</a>
				</nav>
				<section class="numero-do-telefone">
						Entre em contato
						<strong>(67) 9 9956-8208</strong>
				</section>
			</div>	
		</header>

		<section> 
			<div class="banner">
				<img src="http://via.placeholder.com/1366x350" alt="">
			</div>
		</section>
		<main class="conteudo">
			<section class="produtos"> 
				<h2>Conheça nossos produtos</h2>
				<div class="blocos lista-de-produtos">
					<div class="lista-de-produtos_item">
						<img src="http://via.placeholder.com/450x280" alt="">
					</div>
					<div class="lista-de-produtos_item">
						<img src="http://via.placeholder.com/450x280" alt="">
					</div>
				</div>
			</section>
		</main>
		<div class="sobre-a-empresa">
			<main class="conteudo">
				<div class="blocos">
					<img src="http://via.placeholder.com/300x180" alt="">
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
			<ul class="blocos">	
				<li>
					<img src="http://via.placeholder.com/200x180" alt="">
					<h3>Lorem Ipsum Dolor</h3>
				</li>
				<li>
					<img src="http://via.placeholder.com/200x180" alt="">
					<h3>Lorem Ipsum Dolor</h3>
				</li>
				<li>
					<img src="http://via.placeholder.com/200x180" alt="">
					<h3>Lorem Ipsum Dolor</h3>
				</li>
				<li>
					<img src="http://via.placeholder.com/200x180" alt="">
					<h3>Lorem Ipsum Dolor</h3>
				</li>
				<li>
					<img src="http://via.placeholder.com/200x180" alt="">
					<h3>Lorem Ipsum Dolor</h3>
				</li>
				<li>
					<img src="http://via.placeholder.com/200x180" alt="">
					<h3>Lorem Ipsum Dolor</h3>
				</li>
			</ul>
		</section>
	</body>
</html>

<style type="text/css">
*{
	margin: 0;
	padding: 0;
}

.body{

}

.blocos{
	display: flex;
	align-items: center;
}

.lista-de-produtos .lista-de-produtos_item:first-child{
	    margin-right: 10%;
}

.cabecalho{
	display: flex;
	height: 70px;
	padding: 12px;
	align-items: center;


}
	.logo{
		width: 200px;
	}
	.paginas{

	}
	.numero-do-telefone{
		
	}


	.conteudo{
		width: 1020px;
		margin: 0 auto;
		display: block;
	}




.informacoes-sobre-a-empresa{
	width: 500px;
}


.sobre-a-empresa{
	background: url(http://via.placeholder.com/300x180);
    height: 357px;
    margin-top: 60px;
    padding: 70px 0 0 0;
    background-size: 100%;
    margin-bottom: 45px;
    background-attachment: fixed;
    background-position: center;
}
</style>