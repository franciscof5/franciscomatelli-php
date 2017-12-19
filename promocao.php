<!-- Tipo de documento, muito importante, sendo que são existem 3 tipos, Strict (segua a risca os padrões) Transitional (transição para os padrões) e Frames (se for o index de frame) -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Promoção - Francisco Matelli</title>

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
<meta name="description" content="Aproveite as Promoções - Página com todas as promoções que você não pode perder, sorteios e brindes" /> 

<!-- As palavras chave indexadas pelos sistemas de busca, os melhores sistemas de busca verificam no site se as palavras batem (match)-->
<meta name="keywords" content="Promoção de graça sorteio brinde grátis vtiger vtigerCRM instalação install" />

<link href="/include/franciscomatelli_estilo.css" rel="stylesheet" type="text/css" />
<link href="/include/promocao.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/header.php");
	?>
	
	<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/menu.php");
	?>
	
	<div class="content" id="promocaoContent">
		<h1>Promoção Ganhe 5 instalaçãos do vTigerCRM grátis</h1>
		<p> Essa promoção tem por objetivo aumentar o número de usuários do vTigerCRM no Brasil e difundir a prática do CRM. Você conhece o vTigerCRM? Veja o todo o potencial desse sistema em uma nova janela </p>
		<table>
			<tr>
				<td>
					<img src="imagens/vtiger/vtiger-box.jpg" alt="Ilustração da caixa do vtiger" id="vtigerBox" />
				</td>
				<td>
					<h1>Como faço para participar?</h1>
					<p>Para participar é fácil, basta responder o formulário abaixo e você já estará participando! o sorteio dos 5 ganhadores irá ocorrer dia 7 de março de 2009.</p>
					<p>Você irá concorrer a uma instalação do vTigerCRM em português do Brasil, não tendo que pagar nada por isso. Para mais informações consulte o regulamento</p>
				</td>
			</tr>
		</table>
		<form>
		<h1>Dados Pessoais</h1>
		<p>Nome:</p>
		<p>Email:</p>
		<p>Empresa:</p>
		<p>Ramo:</p>
		<h1>Informações importantes</h1>
		<h1>Termo de Participação</h1>
		<textarea disabled="disabled" cols="60" rows="6">
CONDIÇÕES E TERMOS DE PARTICIPAÇÃO
1. O sorteio irá ocorrer dia 7 (sete) de março de 2009 (dois mil e nove) de forma eletrônica. Todos os participantes no ato do cadastro recebem um identificador único, esse identificador é um número, que virá a concorrer no sorteio.
2. A divulgação do resultado será dada no site em até uma semana após o sorteio
3. Usuários que forem identificados com 2 cadastros serão automaticamente desclassificados.

DA PRIVACIDADE
4. As informações do cadastro jamais serão divulgadas ou vendidas. Serão armazenadas em banco de dados para analises e estatísticas pelo período de 2 (dois) anos e depois apagadas.

DO VENCEDOR
5. O usuário que vier ganhar a promoção exibirá o selo "Vencedor da Promoção vTigerCRM - Francisco Matelli.com" em seu site, por no mínimo 24h, apenas como forma de divulgação.
6. O usuário que ganhar deverá responder a um questinário após um mês de uso do vTigerCRM, a ser publicado no site www.franciscomatelli.com, para identificar como está sendo o rendimento do sistema.
7. O usuário que ganhar deverá fornecer acesso ao diretório que deseja que o sistema seja instalado, essa informações também serão protegidas pelo artigo 4.
		</textarea>
		<p><input type="checkbox" /> Li e concordo com o "Termo de Participação"</p>
		<h1>Mais oportunidades</h1>
		<p><input type="checkbox" checked="checked" /> Ser avisado sobre o resultado</p>
		<p><input type="checkbox" checked="checked" /> Receber aviso sobre outras promoções grátis</p>
		<p><input type="checkbox" checked="checked" /> Novidades e oportunidades do site FranciscoMatelli.com</p>
		</form>
	</div>
	
	<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/footer.php");
	?>
</body>
</html>