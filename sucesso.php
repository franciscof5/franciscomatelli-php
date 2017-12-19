<!-- Tipo de documento, muito importante, sendo que são existem 3 tipos, Strict (segua a risca os padrões) Transitional (transição para os padrões) e Frames (se for o index de frame) -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sua mensagem foi enviada com sucesso! - Francisco Matelli</title>

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

<link href="include/franciscomatelli_estilo.css" rel="stylesheet" type="text/css" />
<link href="include/contato.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php
	require_once(dirname(__FILE__)."/header.php");
	?>
	
	<?php
	require_once(dirname(__FILE__)."/menu.php");
	?>
	
	<div class="content">
	<h1> Mensagem Enviada com Sucesso! </h1>
	<p> Obrigado pelo contato <?php echo $_COOKIE['nomeVisitante'] ?>! O mais breve possível seu contato será retornado! </p>
	<br />
	<p> <a href="index.php"> Voltar ao início </a> </p>
	<br />
	<br />
	<!-- Google Code for Entrou em contato Conversion Page -->
	<script language="JavaScript" type="text/javascript">
	<!--
	var google_conversion_id = 1053116530;
	var google_conversion_language = "pt_BR";
	var google_conversion_format = "2";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "JDrUCPK8RRDykJX2Aw";
	//-->
	</script>
	<script language="JavaScript" src="http://www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<img height="1" width="1" border="0" src="http://www.googleadservices.com/pagead/conversion/1053116530/?label=JDrUCPK8RRDykJX2Aw&amp;guid=ON&amp;script=0"/>
	</noscript>
	</div>
	
	<?php
	require_once(dirname(__FILE__)."/footer.php");
	?>
</body>
</html>