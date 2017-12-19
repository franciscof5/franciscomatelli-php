<!-- Tipo de documento, muito importante, sendo que são existem 3 tipos, Strict (segua a risca os padrões) Transitional (transição para os padrões) e Frames (se for o index de frame) -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Clientes - Francisco Matelli</title>

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
<meta name="description" content="Lista contendo alguns dos clientes de Francisco Matelli e os trabalhos realizados para cada" /> 

<!-- As palavras chave indexadas pelos sistemas de busca, os melhores sistemas de busca verificam no site se as palavras batem (match)-->
<meta name="keywords" content="cliente empresas" />

<link href="include/franciscomatelli_estilo.css" rel="stylesheet" type="text/css" />
<link href="include/clientes.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- ClickTale Top part -->
<script type="text/javascript">
var WRInitTime=(new Date()).getTime();
</script>
<!-- ClickTale end of Top part -->

<?php
//Inclui o cabeçalho
require_once($_SERVER['DOCUMENT_ROOT']."/header.php");
//Inclui o menu
require_once($_SERVER['DOCUMENT_ROOT']."/menu.php");
?>
<div class="content" id="clientesContent">

<div class="caixa" id="caixa1">
<h1>Overplay</h1>
<p> Desenvolver Eduks para compor um jogo em flash </p>
</div>

<div class="caixa" id="caixa2">
<h1>Dynamo Publicidade</h1>
<p> Customização de funções do Vtiger CRM </p>
</div>

<div class="caixa" id="caixa3">
<h1>O2 games</h1>
<p> Criação de um jogo online em flash multiplayer </p>
</div>

<div class="caixa" id="caixa4">
<h1>Soldier Lan House</h1>
<p> Criação de cenário para Counter Strike </p>
</div>

<div class="caixa" id="caixa5">
<h1>Novometodo</h1>
<p> Consultoria na área de administração / qualidade </p>
</div>

<div class="caixa" id="caixa6">
<h1>Paulista Júnior</h1>
<p> Concepção e criação de website </p>
</div>

<div class="caixa" id="caixa7">
<h1>AAAMG</h1>
<p> Criação de um novo design para o site </p>
</div>

<div class="caixa" id="caixa8">
<h1>Casa Digital</h1>
<p> Sistema para controlar apresentação de slides </p>
</div>

</div>
<?php
require_once($_SERVER['DOCUMENT_ROOT'].$caminho."/footer.php");
?>
<!-- ClickTale Bottom part -->
<div id="ClickTaleDiv" style="display: none;"></div>
<script src="http://s.clicktale.net/WRb.js" type="text/javascript"></script>
<script type="text/javascript">
if(typeof ClickTale=='function') ClickTale(27677,1);
</script>
<!-- ClickTale end of Bottom part -->


</body>
</html>