<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Facebook-Acesse, Cadastre-se ou saiba mais.</title>
	<meta charset="utf-8">
	<meta name="description"content="descrição do site">
	<meta name="keywords"content="palavras-chaves,separadas,por,vírgulas">
	<meta name="author"content="Orfila Jose">
	<meta name="viewport"content="width=device-width,initial-scale=1,maximum-scale=1.0">
	<link href="css/telaFacebook.css" type="text/css" rel="stylesheet">
</head>
<body>
  <header>
  	 <div class="center">
	  	 	<div class="logo">
	  	 		<img src="Imagens/facebook-icon.png">
	  	 	</div>
	  	 	<div class="login">
	  	 		<div class="camposLogin">
	  	 			<label for="femail">E-mail</label>
	  	 			<input type="text" name="email" id="femail">
	  	 		</div>
	  	 		<div class="camposLogin">
	  	 			<label for="fsenha">Senha</label>
	  	 			<input type="text" name="email" id="fsenha">
	  	 		</div>
	  	 		<input type="submit" name="acao"value="Enviar">
	  	 	</div><!--login-->
	  	 	<div class="clear"></div>
  	 </div><!--center-->
  </header>
  <main>
  	<div class="center">
  		<div class="texto-e-img">
  			 <h2>O facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h2>
  			 <img src="Imagens/img1.png">
  		</div><!--texto-e-img-->
  		<div class="criar-conta">
  			<h1>Abra a sua conta</h1>
  			<h3>é gratuita e sempre será!</h3>
  			<form>
  				<div class="w50">
  					<input type="text" name="nome" placeholder="Nome">
  				</div>
  				<div class="w50">
  					<input type="text" name="nome" placeholder="Sobrenome">
  				</div>
  				<div class="w100">
  					<input type="email"name="email" placeholder="Celular ou E-mail">
  				</div>
  				<div class="w100">
  					<input type="password"name="senha" placeholder="Nova Senha">
  				</div>
  				<div class="w100">
  					<h2>Data de Nascimento</h2>
  					<select name="nascimento-dia" class="nascimento">
  						<?php
  							for($i = 1; $i <=31; $i++){
  						?> 						
  						<option value="<?php echo $i; ?>"><?php echo $i;?></option>
  						<?php }?>
  					</select>
  					<select name="nascimento-mes" class="nascimento">
  						<option value="0">Janeiro</option>
  						<option value="0">Fevereiro</option>
  						<option value="0">Março</option>
  						<option value="0">Abril</option>
  						<option value="0">Maio</option>
  						<option value="0">Junho</option>
  						<option value="0">Julho</option>
  						<option value="0">Agosto</option>
  						<option value="0">Setembro</option>
  						<option value="0">Outubro</option>
  						<option value="0">Novembro</option>
  						<option value="0">Dezembro</option>
  					</select>
  					<select name="nascimento-ano" class="nascimento">
  						<?php
  							for($a = 1900; $a <=2022; $a++){
  						?>
  						<option value="<?php echo $a; ?>"><?php echo $a;?></option>
  						<?php }?>
  					</select>
  					<h4 class="pergunta">Porque preciso informar minha data de nascimento?</h4>
  					<div class="clear"></div>
  				</div><!--w100-->
  				<div class="w100">
  			     <div class="sexo">  			     	 
  			     	 <input type="radio"name="sexo"value="masculino">
  			     	 <h4>Masculino</h4>
  			     </div><!---->
  			     <div class="sexo"> 			     	 
  			     	 <input type="radio"name="sexo"value="feminino">
  			     	 <h4>Feminino</h4>
  			     </div><!--sexo-->
  			     <div class="clear"></div>
  				</div><!--w100-->
  				<div class="aviso">
  					<h4>Ao clicar em inscreverse, você concorda com nossos Termos, Políticas de Dados e Política de Cookies. Você pode receber notificações por SMS e pode cancelar isso quando quiser.</h4>
  				</div><!--aviso-->
  				<div class="clear"></div>
  				<div class="w100">
  					 <input type="submit" name="acao"value="Inscreva-se">
  				</div>
  			</form>
  		</div><!--criar-conta-->
  		<div class="clear"></div>
  	</div><!--center-->
  </main>
  <footer>
  	<div class="center">
  		<div class="idiomas">
  			<a href="">Portugues(BR)</a>
  			<a href="">Portugues(BR)</a>
  			<a href="">Portugues(BR)</a>
  			<a href="">Portugues(BR)</a>
  			<a href="">Portugues(BR)</a>
  			<a href="">Portugues(BR)</a>
  			<a href="">Portugues(BR)</a>
  			<a href="">Portugues(BR)</a>
  		</div>
  		<div class="servicos">
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  			<a href="">Lorem Ipsum</a>
  		</div>
  	</div><!--center-->
  </footer>
</body>
</html>