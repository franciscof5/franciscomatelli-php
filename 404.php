<!-- Tipo de documento, muito importante, sendo que são existem 3 tipos, Strict (segua a risca os padrões) Transitional (transição para os padrões) e Frames (se for o index de frame) -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Francisco Matelli - Criações para a internet</title>

<!-- Não utilizar tags meta é praticamento um suícidio para o sistemas de busca, todas devem ser utilizadas e muito bem utilizadas-->
  
<!-- Sempre é bom denifir a linguagem utilizada, ver SEO Liguistíca-->
<meta http-equiv="content-language" content="pt-br" />
  
<!-- Robots ou spiders são os mecanismos utilizados para o sistemas de busca varrerem automaticante o site, aqui esta declarado que ele pode indexar o site a os links que ele contém -->
<meta name="robots" content="index,follow" />

<!-- Conteúdo do website-->
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<!-- Rating é a classificação etária, a faixa etária, pode ser General, 14 years ou mature, esse site não contém material inadequado, portanto é obviamente livre-->
<meta name="rating" content="general" />
  
<!-- O autor do site :) -->
<meta name="author" content="Francisco Matelli Matulovic" />

  
<!-- Programa utilizado para produzir o site-->
<meta name="generator" content="Eclipse" /> 
 
<!-- Define o tipo padrão da linguagem de script do documento -->
<meta http-equiv="content-script-type" content="text/javascript" />
  
<!-- Define o tipo padrão de linguagem para estilização do documento -->
<meta http-equiv="content-style-type" content="text/css" />
 
<!-- Dublin Core é uma associação criada para flexibilizar a utilização de meta tags = de acordo com o site http://www.dublincore.org /about => The Dublin Core Metadata Initiative (DCMI) is an organization dedicated to promoting the widespread adoption of interoperable metadata standards and developing specialized metadata vocabularies for describing resources that enable more intelligent information discovery systems -->
<!-- Utilizá-las futuramente... -->

<!-- Alterar essas tags para melhorar a SEO -->
<!-- Serve para descreve o site, mas para os grandes sistema de busca, a tag description ou é ignorada ou então praticamente irrelevante devido ao SPAMMING e utilização de falsas informações-->
<meta name="description" content="Sucesso ao entrar em contato com Francisco Matelli" /> 

<!-- As palavras chave indexadas pelos sistemas de busca, os melhores sistemas de busca verificam no site se as palavras batem (match)-->
<meta name="keywords" content="sucesso contato feito com sucesso" />

<link href="/include/franciscomatelli_estilo.css" rel="stylesheet" type="text/css" />
<link href="/include/pagina.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/header.php");
	?>
	
	<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/menu.php");
	?>
	
<div class="content">
	<h1> Erro 404 - Essa página não existe </h1>
	<br />
	<p> Mas eu posso te ajudar, você pode está procurando: </p>
	<br />
	<p> <a href="/vtiger.php"> Sistemas de CRM: Qual o melhor sistema de CRM e como instalar? </a></p>
	<br />
	<p> <a href="/pagina.php?pag=Advergames"> Advergames: Quero um jogo em flash para promover minha empresa </a></p>
	<br />
	<p> <a href="/pagina.php?pag=Customização"> Customização de WordPress: criação de temas </a></p>
	<br />
	<p> <a href="/pagina.php?pag=Sites"> Desenvolver ou melhorar meu site </a></p>
</div>
	
	<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/footer.php");
	?>
</body>
</html>