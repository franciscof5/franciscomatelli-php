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
<meta name="description" content="Francisco Matelli é um consultor especialista em web e padrões, desenvolvendo sites há anos. Especialista em customização do vtiger e sistemas. Também possuo trabalhos na área de advergames." /> 

<!-- As palavras chave indexadas pelos sistemas de busca, os melhores sistemas de busca verificam no site se as palavras batem (match)-->
<meta name="keywords" content="Francisco Matelli, vtiger, vtigerCRM, wordpress, wp, customização, customizacao, advergames, sites, padrões web, blog, notícias, projetos, jogos, adverjogos, criação" />

<!-- Meta tag do Goole Webmaster, para verificar se o site é meu (nos meus 2 usuários)
<meta name="verify-v1" content="gsQ3J0aTxACrBFU0ra7tecbJtrQKEfJRBrnvGB3JIBg=" /> -->
<meta name="verify-v1" content="e0XIJdy0xNVV5D3coDd3W1l5WDflU8qZs3mpEtfvw2Q=" />

<!-- Folha de estilo padrão -->
<link href="include/franciscomatelli_estilo.css" rel="stylesheet" type="text/css" />
<link href="include/index.css" rel="stylesheet" type="text/css" />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>

<!-- ClickTale Top part -->
<script type="text/javascript">
var WRInitTime=(new Date()).getTime();
</script>
<!-- ClickTale end of Top part -->


	<?php
	require_once(dirname(__FILE__)."/header.php");
	?>
	
	<?php
	require_once(dirname(__FILE__)."/menu.php");
	?>
	<div id="indexTopo">
		<p>
			<object width="860" height="200">
				<param name="movie" value="include/flash/topo_header.swf" />
				<param name="wmode" value="transparent" />
				 <param name="wmode" value="transparent">  
				<embed wmode="transparent" src="include/flash/topo_header.swf" type="application/x-shockwave-flash" width="860" height="200" />
				</object>
		</p>
	</div>
	<div class="content" id="indexContent">
		
	</div>
	<!--
	<div class="content" id="indexContent">
		<a href='pagina.php?pag=Sites'>
			<div id="caixaCima1" class="caixa">
			<h1>Sites</h1>
			<p> Tenha seu espaço na internet </p>
			</div>
		</a>
		
		<a href='pagina.php?pag=Customização'>
			<div id="caixaCima2" class="caixa">
			<h1> Customização </h1>
			<p> WordPress: Templates. </p>
			<p> vTigerCRM: Sistemas, módulos e modelos de email. </p>
			</div>
		</a>
		
		<a href='pagina.php?pag=Advergames'>
			<div id="caixaCima3" class="caixa">
			<h1> Advergames </h1>
			<p> Jogos em flash para promover sua empresa </p>
			</div>
		</a>
		
		<a href='pagina.php?pag=Consultoria'>
			<div id="caixaCima4" class="caixa">
			<h1> Consultoria </h1>
			<p> Melhore seu site, aumente suas vendas </p>
			</div>
		</a>
		
		<a href='pagina.php?pag=Projetos Pessoais'>
			<div id="caixaCima5" class="caixa">
			<h1>Projetos pessoais</h1>
			<p> Alguns projetos que eu desenvolvo por conta própria </p>
			</div>
		</a>
		
		<a href='portfolio.php'>
			<div id="caixaCima6" class="caixa">
			<h1>Portfolio</h1>
			<p> Conheça meus trabalhos </p>
			</div>
		</a>
		
		<div id="caixaBaixo1" class="caixa2">
		<h1>PHP</h1>
		<p> A linguagem de código aberto para o servidor </p>
		</div>
		
		<div id="caixaBaixo2" class="caixa2">
		<h1>(X)HTML</h1>
		<p> Organizando a informação na web. Trabalhando dentros dos padrões w3. </p>
		</div>
		
		<div id="caixaBaixo3" class="caixa2">
		<h1>CSS</h1>
		<p> O design feito por linhas de códigos </p>
		</div>
		
		<div id="caixaBaixo4" class="caixa2">
		<h1>MySQL</h1>
		<p> Banco de dados gratuito e de código aberto </p>
		</div>
		
		<div id="caixaBaixo5" class="caixa2">
		<h1>AJAX</h1>
		<p> O script dos browser </p>
		</div>
		
		<div id="caixaBaixo6" class="caixa2">
		<h1>Flash</h1>
		<p> Poderosa ferramenta de animação </p>
		</div>
		
		<div id="caixaBaixo7" class="caixa2">
		<h1>Photoshop</h1>
		<p> Tratamento de imagens </p>
		</div>
		
	</div>
	
	<div id="caixaMeio">
		<p class="paragrafoMeio"> O que você vê </p>
		<hr class="halfLine" >
		<p class="paragrafoMeio"> O que eu vejo </p>
	</div>
	-->
	<?php
	require_once(dirname(__FILE__)."/footer.php");
	?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1055959-8");
pageTracker._trackPageview();
</script>

<!-- ClickTale Bottom part -->
<div id="ClickTaleDiv" style="display: none;"></div>
<script src="http://s.clicktale.net/WRb.js" type="text/javascript"></script>
<script type="text/javascript">
if(typeof ClickTale=='function') ClickTale(19562,1);
</script>
<!-- ClickTale end of Bottom part -->

</body>
</html>