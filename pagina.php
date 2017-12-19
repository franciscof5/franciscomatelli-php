<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
	<?php 
	//Escolhe o título de acordo com a página, FM 6/fev/08
	$titulo = $_GET['pag'];
	
	//Depois de escolhido o título basta adicionar o final, FM 6/fev/08
	echo $titulo." - Francisco Matelli";
	?>
</title>

<!-- Não utilizar tags meta é praticamento um suícidio para o sistemas de busca, todas devem ser utilizadas e muito bem utilizadas-->
  
<!-- Sempre é bom denifir a linguagem utilizada, ver SEO Liguistíca-->
<meta http-equiv="content-language" content="pt-br" />
  
<!-- Robots ou spiders são os mecanismos utilizados para o sistemas de busca varrerem automaticante o site, aqui esta declarado que ele pode indexar o site a os links que ele contém -->
<meta name="robots" content="index,follow" />

<!-- Conteúdo do website-->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

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
<meta name="description" content="Francisco Matelli, site do desenvolvedor" /> 

<!-- As palavras chave indexadas pelos sistemas de busca, os melhores sistemas de busca verificam no site se as palavras batem (match)-->
<meta name="keywords" content="Francisco Matelli" />

<!-- Folha de estilo padrão -->
<link href="include/franciscomatelli_estilo.css" rel="stylesheet" type="text/css" />
<link href="include/pagina.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
//Chama o cabeçalho e menu, FM 6/fev/08
require_once(dirname(__FILE__)."/header.php");
require_once(dirname(__FILE__)."/menu.php");

//Cria o rastrod e pão ou trilha de rato
$trilha = "<span class='trilha'><a href='index.php'>Home</a> > <a href='servicos.php'>Serviços</a> ></span><span class='trilhaDestaque'> ".$_GET['pag']."</span>";

//Variável das páginas, FM 6/fev/08
$erro = '
<h1> Erro - Desculpe o transtorno </h1>
<p class="pagina"> Essa página ainda está em construção ou não foi localizada </p>';

$site = '
<h1> Procurando um profissional sério? </h1>
<p class="pagina"> A cada dia cresce a importância de se ter um site, e olha que essa frase já é uma velha conhecida nossa desde o início da internet. Porém existem empresas que ainda não entenderem bem a mensagem, achando que ter um site é colocar qualquer página no ar. O conteúdo do site é muito mais importante do que o fato de se ter ou não site. Um site ruim pode ser mais preducial do que não ter site em alguns casos. </p>
<h1> A concorrência na internet cresce! </h1>
<p id="pagina"> Você já parou pra pensar que a cada dia milhares de site são criados? Com certeza alguns desses site concorrem com sua empresa pelos mesmos segmentos de mercado, como no mundo real na internet os sites competem pelo público. Saiba como tratar bem seu público, utilizando as melhores técnicas, faça um orçamento de website. </p>
<h1> Criar ou melhorar! </h1>
<p id="pagina"> Ainda não tem um site? Comece com o pé direito, faça um orçamento clicando no botão abaixo. </p>
<p id="pagina"> Já tem um site? Descubra como melhorar seu site, adaptando aos padrões w3, melhorando a usabilidade e subindo nos resultados de pesquisa. </p>
<p id="aparagrafo"><a id="aButton" href="contato.php?titulo=Orçamento para site!&desc=Descreva como quer o site:">Quero um orçamento para meu site!</a></p>';

$customizacao = '
<h1> De uma cara nova aos seu sistemas </h1>
<p class="pagina"> A grande desvantagem de se utilizar sistemas de código aberto é a falta de customização, vindo sempre um template padrão para tudo. Se sua empresa é séria com certeza não vai utilizar os modelos de email padrão do vTiger ou o template básico do WordPress </p>

<h1> O segredo do vTigerCRM </h1>
<p class="pagina"> O vTiger é uma poderosa ferramenta de marketing, porém perde grande parte do seu encanto se você mantém ele padronizado. Enviar os modelos de email que vem junto com a instalação não passa credibilidade para seus clientes, conheça as minhas solucões em criação de templates de email. </p>
<p class="pagina"> Customize também as funções do vTiger, conheça meu sistema de envio de emails de cobrança e suspensão. Com o \"Sistema de Envio de Email\" sistema você pode enviar um email para seus clientes com fatura aberta, contendo um link com a fatura e o boleto bancário. Cobrar todos seus clientes ao alcance de um clique. </p>
<p id="aparagrafo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id="aButton" href="contato.php?titulo=O vTiger em suas mãos!&desc=O que deseja implementar:">Customizar meu vTiger!</a></p>

<h1> O poder do WordPress </h1>
<p class="pagina"> O WordPress é com certeza a melhor opção para você montar o seu site ou blog, mas chegou a hora de melhorar o template de seu wordpress, o que você escolhe: Economizar dinheiro e tentar fazer o serviço você mesmo ou contratar um profissional qualificado para fazer um template com a cara da sua empresa? A imagem do seu site é muito importante, usuários conhecem sites remendados e tem pavor aos que não funcionam, economizar um pouco de dinheiro agora é jogar fora a oportunidade de ganhar muito mais com um site agradável. </p>
<p id="aparagrafo"><a id="aButton" href="contato.php?titulo=Customize seu Wordpress!&desc=Peça um orçamento:">Dar uma cara nova para meu Wordpress!</a></p>
';

$advergames = '
<h1> Advergames </h1>
<p class="pagina"> Uma nova forma de divulgar sua marca pela internet: com muita diversão! </p>
<p class="pagina"> Advergames são uma revuloção em termos de marketing, pois o jogador assimila a imagem da empresa de um jeito divertido, dentro do jogo ele fica muito mais aberto a receber a mensagem publicitária. E depois essa mensagem se espalha automaticamente de forma viral, ou seja, os próprios jogadores recomendam o jogo para os outros. </p>
<h1> Nem tudo é brincadeira! </h1>
<p class="pagina"> Um advergame mal elaborado é altamente prejudicial, pois o raciocínio funciona da mesma forma, o usuário vai associar a marca com um jogo ruim, e portanto isso é um ponto negativo para a imagem do seu negócio. Advergames são divertidos mas devem ser levados a sério. </p>
<h1> Meus Advergames </h1>
<p class="pagina"> Em breve uma lista de jogos para você vincular sua imagem! </p>
';

$proj = '
<h1> Meus projetos </h1>
<p class="pagina"> A busca pelo sucesso na internet. Grandes idéias nascem todos os dias, apenas algumas se tornam grandiosas outras vão para o céu das grandes idéias perdidas. </p>
<p class="pagina"> Idéias todos nós temos, mas dedicação para transformá-las em realidade é que torna essa idéia em revolução! </p>
<h1> Cash Flower </h1>
<p class="pagina"> Projeto que visa criar um administrador financeiro online gratuito. Em outras palavras, é um sistema que vai ajudar os usuários a terem controle sobre suas finanças, com uma interface <b>realmente simples</b>. </p>
<p class="pagina"> Atualmente o projeto se encontra em fase de restruturação e busca de investimento. </p>
<p id="aparagrafo"><a id="aButton" href="http://www.franciscomatelli.com/cashflower" target="_blank">Me leve à página do Cash Flower!</a></p>
';

//Escolhde acordo com o tipo, FM 6/fev/08
echo '
<div class="content" id="divaoContent">
	<div id="paginaContent">'.
		$trilha;
		
		if($_GET['pag']=="Sites")
		echo $site;
		else if($_GET['pag']=="Customização")
		echo $customizacao;
		else if($_GET['pag']=="Advergames")
		echo $advergames;
		else if($_GET['pag']=="Projetos Pessoais")
		echo $proj;
		else
		echo $erro;
		
echo '</div>';

?>
	<div id="sidebarContent">
		<div id="divSidebar">
			<h1> Navegação Facilitada </h1>
			<p><a href="pagina.php?pag=Sites"><div><span class="h7">Sites:</span> Descubra como criar ou melhorar seu site</div></a></p>
			<p><a href="pagina.php?pag=Customização"><div><span class="h7">Customização:</span> Adaptar WordPress ou vTiverCRM</div></a></p>
			<p><a href="pagina.php?pag=Advergames"><div><span class="h7">Advergames:</span> Divulgar sua marca com jogos em flash</div></a></p>
			<p><a href="pagina.php?pag=Projetos Pessoais"><div><span class="h7">Projetos Pessoais:</span> O que estou desenvolvendo</div></a></p>
			<p><a href="portfolio.php"><div><span class="h7">Portfólio:</span> Conheceça alguns dos meus trabalhos</div></a></p>
		</div>
		<div id="sidebarFundo">
			&nbsp;
		</div>
	</div>
</div>

<?php
//ESTA COM PROBLEMA, SEM FOOTER NESSA PÁGINA, FM 6/fev/08
require_once(dirname(__FILE__)."/footer.php");
?>

</body>
</html>
