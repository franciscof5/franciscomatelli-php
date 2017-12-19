<!-- Tipo de documento, muito importante, sendo que são existem 3 tipos, Strict (segua a risca os padrões) Transitional (transição para os padrões) e Frames (se for o index de frame) -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Entre em contato - Francisco Matelli</title>

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
<meta name="description" content="Entrar em contato com Francisco Matelli" /> 

<!-- As palavras chave indexadas pelos sistemas de busca, os melhores sistemas de busca verificam no site se as palavras batem (match)-->
<meta name="keywords" content="contato orçamento preço custo serviço" />

<link href="/include/franciscomatelli_estilo.css" rel="stylesheet" type="text/css" />
<link href="/include/contato.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- ClickTale Top part -->
<script type="text/javascript">
var WRInitTime=(new Date()).getTime();
</script>
<!-- ClickTale end of Top part -->

	<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/header.php");
	?>
	
	<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/menu.php");
	?>
	
	<div class="content" id="contatoContent">
		<div class="penduricalho" id="pendu1">
			<h1> Não perca mais tempo! </h1>
			<p> Procurando um profissional qualificado para a execução de seu projeto? Espera um atendimento diferenciado? Um serviço de alta qualidade mas com um preço competitivo? </p>
		</div>
		<div class="penduricalho" id="pendu2">
			<h1> Contate-me agora! </h1>
			<p> Entre em contato para mais informações sobre os serviços oferecidos, solicitar o orçamento, tirar dúvidas sobre os serviços ou qualquer assunto relacionado </p>
			<br />
			<p> Basta preencher o formulário que muito em breve seu contato será retornado </p>
			<br />
			<p> Todos os dias as mensagens enviadas são lidas, com certeza não esperará mais que 24h para receber a resposta</p>
		</div>
		<div class="penduricalho" id="pendu3">
			<form action="enviarEmailFM.php" method="post">
			<table id="tabela">
				<tr>
					<td>
						<h1> Dados para contato </h1>
						<br />
						<p> *Nome: </p>
						<input type="text" name="nome" />
						<p> *Email: </p>
						<input type="text" name="email" />
						<p> Empresa: </p>
						<input type="text" name="empresa" />
						<p> Ramo de atividade: </p>
						<input type="text" name="ramo" />
						<p> Site: </p>
						<input type="text" name="site" />
					</td>
					<td>
						<h1> 
							<?php
							$tit = $_GET['titulo'];
							
							//vai para default se nao tiver setado, FM 6/fev/08
							if(!isset($_GET['titulo']))
							$tit = "Como posso ajudar?";
							
							//Depende da página que o contato vier muda a página toda, FM 6/fev/08
							echo $tit;
							echo "<input type='hidden' name='origem' value='".$_GET['titulo']."' />";
							?>
						</h1>
						<br />
						<p> 
							<?php
							$desc = $_GET['desc'];
							
							//vai para default se nao tiver setado, FM 6/fev/08
							if(!isset($_GET['desc']))
							$desc = "Como deseja realizar o pagamento:";
							
							//Depende da página que o contato vier muda a página toda, FM 6/fev/08
							echo $desc;
							?>
						</p>
							<?php
							$textarea = $_GET['textarea'];
							
							//vai para default se nao tiver setado, FM 6/fev/08
							if(!isset($_GET['textarea'])) {
								$textarea = '<textarea cols="26" rows="8" name="texto"></textarea>';
							} else {
								$textarea = '<textarea cols="26" rows="8" name="texto" disabled=disabled>'.$_GET['textarea'].'</textarea>';
							}
							echo $textarea;
							//Depende da página que o contato vier muda a página toda, FM 6/fev/08
							
							?>
					</td>
				</tr>
				<tr>
					<td>
						<p>.</p>
					</td>
					<td align="right">
							<?php
							$label = $_GET['label'];
							//vai para default se nao tiver setado, FM 6/fev/08
							if(!isset($_GET['label']))
							$label = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enviar!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
							?>
						<input type="submit" value=<?php echo "    ".$label."     "; ?> id="submit"/>&nbsp;&nbsp;
					</td>
				</tr>
			</table>
			</form>
		</div>
	</div>
	
	<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/footer.php");
	?>
<!-- ClickTale Bottom part -->
<div id="ClickTaleDiv" style="display: none;"></div>
<script src="http://s.clicktale.net/WRb.js" type="text/javascript"></script>
<script type="text/javascript">
if(typeof ClickTale=='function') ClickTale(27649,1);
</script>
<!-- ClickTale end of Bottom part -->

</body>
</html>