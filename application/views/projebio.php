<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>teste</title>
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<body>
		<header class="cabecalho">
			<div class="conteudo">
				<div class="blocos">
					<a href="" class="logo">
						<img src="content/Imagens/logo.png" alt="Imagem da empresa">
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
					<section class="contato-cabecalho">
							Entre em contato
							<div class="numero-do-telefone">
								(67) 9 9956-8208
							</div>
					</section>
				</div>
			</div>	
		</header>

		<section> 
			<div class="banner">
				<img src="http://via.placeholder.com/1366x350" alt="">
			</div>
		</section>
		<main class="conteudo">
			<section class="produtos"> 
				<h2 class="titulo">Conheça nossos produtos</h2>
				<p class="descricao-do-bloco">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, ex.</p>
				<div class="blocos lista-de-produtos">
					<div class="lista-de-produtos_item">
						<img src="http://via.placeholder.com/450x280" alt="">
						<h3>Nome do produto</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, adipisci.</p>
					</div>
					<div class="lista-de-produtos_item">
						<img src="http://via.placeholder.com/450x280" alt="">
						<h3>Nome do produto</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, adipisci.</p>
					</div>
				</div>
			</section>
		</main>
		<div class="sobre-a-empresa">
			<main class="conteudo">
				<div class="blocos">
					<img class="imagem-da-empresa" src="http://via.placeholder.com/300x180" alt="">
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
			<div class="blocos">
				<div class="fotos-da-empresa_item">
					<img src="http://via.placeholder.com/200x180" alt="">
					<h3>Lorem Ipsum Dolor</h3>
				</div>
				<div class="fotos-da-empresa_item">
					<img src="http://via.placeholder.com/200x180" alt="">
					<h3>Lorem Ipsum Dolor</h3>
				</div>
				<div class="fotos-da-empresa_item">
					<img src="http://via.placeholder.com/200x180" alt="">
					<h3>Lorem Ipsum Dolor</h3>
				</div>
			</div>
			
		</section>
		<section class="conteudo entre-em-contato">
			<h2 class="titulo">Entre em contato conosco</h2>
			<div class="blocos">
				<form class="formulario-de-contato">
					<div class="formulario-de-contato_item">
						<label for="nome">Qual o seu nome?</label>
						<input type="text" id="nome">
					</div> 
					<div class="formulario-de-contato_item">
						<label for="telefone">Telefone para contato</label>
						<input type="text" id="telefone">
					</div> 
					<div class="formulario-de-contato_item">
						<label for="email">E-mail:</label>
						<input type="text" id="email">
					</div> 
					<div class="formulario-de-contato_item">
						<label for="comentario">Diga nos o que precisa:</label>
						<textarea name="" id="comentario" cols="30" rows="10"></textarea>
					</div> 
					<button type="submit">Enviar</button>
				</form>
				<div class="localizacao">
					<div class="mapa">
						<img src="http://via.placeholder.com/200x180" alt="">
					</div>
					<div class="texto-endereco">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, ipsum unde, reprehenderit, expedita modi iusto est tempore aliquid officiis eveniet maxime velit impedit. Quis praesentium, excepturi illo nobis, aperiam dolores!
					</div>
					<div class="telefone">
						lorem1
					</div>
				</div>
			</div>
		</section>
	</body>
</html>

<style type="text/css">

*{margin:0; padding:0; border:0; list-style:none;}


body{
	font-family: 'Roboto';
}

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

.body{
	
}

.blocos{
	display: flex;
	align-items: center;
}



.lista-de-produtos .lista-de-produtos_item:first-child{
	    margin-right: 10%;
}

.lista-de-produtos .lista-de-produtos_item h3{

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

	.contato-cabecalho{

	}
	.numero-do-telefone{
		display: block;
		font-weight: bold;
		display: block;
	}


	.conteudo{
		width: 1020px;
		max-width: 100%;
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

.imagem-da-empresa{
	margin-right: 20px;
}

.informacoes-sobre-a-empresa{

}

.fotos-da-empresa_item{
	margin: 15px;
}







/*sobre a projebio*/


/*contato*/

.formulario-de-contato{
	width: 40%;
	margin-right: 10%;
}
.formulario-de-contato_item{
	margin: 10px 0;

}

label{
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 8px;
	display: block;
}

input{
	height: 44px;
	box-sizing: border-box;
}

button{
	background-color: green;
	padding: 8px;
	height: 44px;
	box-sizing: border-box;
	border-radius: 3px;
	width: 200px;
	color: white;
	border: none;

}


input, textarea{
	border: 1px solid #cecece;
	border-radius: 3px;
	padding: 12px;

}
</style>