<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php 
	//Escolhe o título de acordo com a página, FM 6/fev/08
	if($_GET['projeto'])
	$titulo = $_GET['projeto']." - Portfolio";
	else
	$titulo = "Portfolio";
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
<meta name="description" content="Portfolio de Francisco Matelli, conheça os meus projetos, veja os detalhes e descubra porque meus clientes estao sempre satisfeitos" /> 

<!-- As palavras chave indexadas pelos sistemas de busca, os melhores sistemas de busca verificam no site se as palavras batem (match)-->
<meta name="keywords" content="Projetos, detalhes, descubra, clientes, satisfeitos, projetos" />

<!-- Folha de estilo padrão -->
<link href="include/franciscomatelli_estilo.css" rel="stylesheet" type="text/css" />
<link href="include/portfolio.css" rel="stylesheet" type="text/css" />

<!-- Galeria de Imagem -->
<script type="text/javascript" src="include/ibox/ibox.js"></script>
<script type="text/javascript">iBox.setPath('include/ibox/');</script>
<link rel="stylesheet" href="include/ibox/lightbox.css" type="text/css" media="screen"/>
</head>

<body>

<?php
//Chama o cabeçalho e menu, FM 6/fev/08
require_once(dirname(__FILE__)."/header.php");
require_once(dirname(__FILE__)."/menu.php");

if($_GET['projeto'])
$trilha = "<span class='trilha'><a href='index.php'>Home</a> > <a href='portfolio.php'>Portfolio</a> > </span><span class='trilhaDestaque'>".$_GET['projeto']."</span>";
else
$trilha = "<span class='trilha'><a href='index.php'>Home</a> > <a href='portfolio.php'>Portfolio</a></span>";

//Var, Titulo, Descrição, ano, miniatura, grande, link
//Sites
$novometodo = array("novometodo", "Novometodo", "Esse site era um tópico da Consultoria de Marketing realizada para empresa, que tinha por objetivo melhorar a orientação de vendas","2008", "site_novometodo.jpg","sites/site_novometodo_screenshots800x600.jpg", "[Fora do Ar]");
$paulista = array("paulista", "Paulista Jr", "Site criado quando eu era Consultor de Marketing da empresa.", "2007", "site_paulistajr.jpg","sites/site_paulistajr_screenshots800x600.jpg", "[Fora do Ar]");
$aaamg = array("aaamg", "AAAMG", "Site realizado utilzando as ferramentas Flash e para o 3d anim8or. Com um design totalmente arrojado e muito a frente do seu tempo.","2007", "site_aaamg.jpg","sites/site_aaamg_screenshots800x600.jpg", "www.aaamg.com.br"); 
$dookie = array("dookie", "Banda Dookie", "Site realizado utilizando as ferramentas Flash e para o 3d anim8or. Com um design totalmente arrojado e muito a frente do seu tempo.", "2005", "site_dookie.jpg","sites/site_bandadookie_screenshots800x600.jpg", "[Fora do Ar]");

//Sistema
$email = array("email", "Sis Email", "Um super gerente de email para seu vtigerCRM. Este sistema está a venda no site, visite a página de venda e conheça mais", "2009", "sistema_email.jpg", "sistemas/sistema-email1.jpg", "www.franciscomatelli.com/vtiger/email");
$cashflower = array("cashflower", "Cash Flower", "Cash Flower ainda vai ser o seu gerente financeiro. Inscrito no prêmio Santander de Empreendedorismo não levou o caneco e por isso seu desenvolvilmento está parado, porém ainda tenho grandes planos para esse projeto.", "2008", "sistema_cashflower.jpg", "/sistemas/sistema_cashflower_screenshots800x600.jpg", "www.franciscomatelli.com/cashflower");

//Jogos
$arqueiro = array("arqueiro", "Arqueiro Bow", "Um jogo criado em parceria com Samuel Kato [Novometodo]. Um jogo dinâmico, aonde o jogador é um personagem que combate em tempo real e online outro arqueiros. Flash e PHP", "2007", "game_arqueiro.jpg", "jogos/game_arqueirobow_screenshots800x600.jpg", " [Procurando Host] ");
$futebol = array("futebol", "Fute Bolon", "Jogo de Futebol Massive Multiplayer Online. O projeto foi totalmente concebido e desenvolvido por mim, desde layout, engine e php. O projeto precisou de uma reformulação devido a uma mudança estratégica de troca de plataforma, porém não tive tempo para continuar trabalhando nele.", "2006", "game_futebolonline.jpg", "jogos/game_futebolonline_screenshots800x600.jpg", "");
$violenchico = array("violenchico", "Violenchico", "Um super jogo de luta desenvolvido em flash, aonde os personagem eram os meus amigo feito em desenho animado. Milhares de linhas de código desenvolvidas por mim, caricaturas de mais de 8 amigos, porém o projeto foi criado e não foi divulgado, perdendo assim uma grande oportunidade de mostrar meu potencial.", "2004", "game_violenchico.jpg", "jogos/game_violenchico_screenshots800x600.jpg", "");

//Arte
$crs = array("crs", "CRS Prod.", "Melhoramento do logotipo da empresa CRS Produções", "2009", "arte_crs.jpg", "arte/arte_crs.jpg", "");


$sites = array($novometodo, $paulista, $aaamg, $dookie);
$sistema = array($email, $cashflower);
$jogos = array($arqueiro, $futebol, $violenchico);
$arte = array($crs);
?>
<div class="content" id="divaoContent">
	<?php echo $trilha;?>
	<div id="portfolioMenu">
		<h1>Alguns Trabalhos e Projetos</h1>
		<table cellspacing="0" id="tabelaMiniaturas">
			<thead>
				<tr>
					<td id="col1">Sites</td>
					<td id="col2">Sistemas</td>
					<td id="col3">Jogos</td>
					<td id="col4">Arte</td>
				</tr>
			</thead>
			<tbody>
				<?php
				//Var, Titulo, Descrição, ano, miniatura, grande, link
				$itemVazio = "<td>&nbsp;</td>";
				
				$arr_size=count($sites);
				for($i=0;$i<$arr_size;$i++) {
					//Inicia linha
					echo "<tr>";
					
					for($u=1;$u<=4;$u++) {
						if($u==1)
						$var = "sites";
						else if($u==2)
						$var = "sistema";
						else if($u==3)
						$var = "jogos";
						else if($u==4)
						$var = "arte";
						
						//As linhas são iguais, só mudam o array, então para ficar hiper dinamico fiz um super FOR loop For
						if(${$var}[$i])
						echo 
						"<td id=\"col$u\">
							<a href='/portfolio.php?projeto=".${$var}[$i][0]."'>
							<p>".${$var}[$i][1]."</p>
							<img src=\"imagens/portfolio/miniaturas/".${$var}[$i][4]."\" alt=\"".${$var}[$i][1]."\" />
							</a>
						</td>";
						else echo $itemVazio;
						
					}
					//Fecha a linha obrigatoriamente
					echo"</tr>";
					
					//Joga os item de cada tipo
					/*if($sites[$i])
					echo"<td id='col1'>
							<a href='/portfolio.php?projeto=".$sites[$i][0]."'>
							<p>".$sites[$i][1]."</p>
							<img src=\"imagens/portfolio/miniaturas/".$sites[$i][4]."\" alt=\"".$sites[$i][1]."\" />
							</a>
						</td>";
					else echo $itemVazio;
					
					if($sistema[$i])
					echo "<td id='col2'>
							<a href='/portfolio.php?projeto=".$sistema[$i][0]."'>
							<p>".$sistema[$i][1]."</p>
							<img src=\"imagens/portfolio/miniaturas/".$sistema[$i][4]."\" alt=\"".$sistema[$i][1]."\" />
							</a>
						</td>";
					else echo $itemVazio;
					
					if($jogos[$i])
					echo "<td id='col3'>
							<a href='/portfolio.php?projeto=".$jogos[$i][0]."'>
							<p>".$jogos[$i][1]."</p>
							<img src=\"imagens/portfolio/miniaturas/".$jogos[$i][4]."\" alt=\"".$jogos[$i][1]."\" />
							</a>
						</td>";
					else echo $itemVazio;
					
					if($arte[$i])
					echo "<td id='col4'>
							<a href='/portfolio.php?projeto=".$arte[$i][0]."'>
							<p>".$arte[$i][1]."</p>
							<img src=\"imagens/portfolio/miniaturas/".$arte[$i][4]."\" alt=\"".$arte[$i][1]."\" />
							</a>
						</td>";
					else echo $itemVazio;
					
					//Fecha a linha obrigatoriamente
					echo"</tr>";*/
				}
				?>
				<!--
				<tr>
					<td id="col1">
						<a href="/portfolio.php?projeto=Banda Dookie">
						<p>Banda Dookie</p>
						<img src="imagens/portfolio/miniaturas/site_dookie.jpg" alt="Site Banda Dookie" />
						</a>
					</td>
					<td id="col2">
						<p>Vtiger Email</p>
						<img src="imagens/portfolio/miniaturas/game_arqueiro.jpg" alt="Jogo Arqueiro Bow" />
					</td>
					<td id="col3">
						<p>Arqueiro Bow</p>
						<img src="imagens/portfolio/miniaturas/game_arqueiro.jpg" alt="Jogo Arqueiro Bow" />
					</td>
					<td id="col4">
						<p>CRS Logo</p>
						<img src="imagens/portfolio/miniaturas/game_arqueiro.jpg" alt="Jogo Arqueiro Bow" />
					</td>
				</tr>
				<tr>
					<td id="col1">
						<p>Banda Dookie</p>
						<img src="imagens/portfolio/miniaturas/site_dookie.jpg" alt="Site Banda Dookie" />
					</td>
					<td id="col2">
						<p>Vtiger Email</p>
						<img src="imagens/portfolio/miniaturas/game_arqueiro.jpg" alt="Jogo Arqueiro Bow" />
					</td>
					<td id="col3">
						<p>Arqueiro Bow</p>
						<img src="imagens/portfolio/miniaturas/game_arqueiro.jpg" alt="Jogo Arqueiro Bow" />
					</td>
					<td id="col4">
						<p>CRS Logo</p>
						<img src="imagens/portfolio/miniaturas/game_arqueiro.jpg" alt="Jogo Arqueiro Bow" />
					</td>
				</tr>-->
			</tbody>
		</table>
	</div>
	<div id="portfolioVisualizador">
		<?php
		//Var, Titulo, Descrição, ano, miniatura, grande, link
		if($_GET['projeto']) {
			echo '
			<h1>'.${$_GET['projeto']}[1].'</h1>
			<br />
			<p><span class="pDestaque">Descrição:</span> '.${$_GET['projeto']}[2].'</p>
			<p><span class="pDestaque">Ano:</span> '.${$_GET['projeto']}[3].' </p>';
			//Se não houver link precisa ter uma mensagem diferenciada, e viva a usabilidade
			
			if(!${$_GET['projeto']}[6]=="")
			echo '<p><span class="pDestaque">Link:</span> <a href=\''.${$_GET['projeto']}[6].'\'>'.${$_GET['projeto']}[6].'</a></p>';
			
			echo '
			<br />
			<a href=\'imagens/portfolio/grandes/'.${$_GET['projeto']}[5].'\' rel="ibox"><img src="imagens/portfolio/grandes/'.${$_GET['projeto']}[5].'" alt="Screenshot de '.${$_GET['projeto']}[1].'" /></a>
			';
		} else {
			echo 
			"<h1>Escolha o projeto ao lado!</h1>
			<br />
			<br />
			<p>Descubra os detalhes de cada projeto e veja as fotos!</p>
			<br />
			<br />
			<p>São 4 categorias de projetos, em cada área de atuação profissional!</p>
			<br />
			<br />
			<p>Os projetos de cima são os mais recentes!</p>
			<br />
			<br />
			";
		}
		?>
		<!--
		<h1>Site Banda Dookie</h1>
		<p><span class="pDestaque">Descrição:</span> Site realizado utilzando as ferramentas Flash e anim8or. Com um design totalmente arrojado e muito a frente do seu tempo.</p>
		<p><span class="pDestaque">Trabalho:</span> Criação de site e introdução em flash </p>
		<p><span class="pDestaque">Ano:</span> 2005 </p>
		<p><span class="pDestaque">Link:</span> [fora do ar] </p>
		<br />
		<a href="imagens/portfolio/800x600/site_bandadookie_screenshots800x600.jpg" rel="ibox"><img src="imagens/portfolio/800x600/site_bandadookie_screenshots800x600.jpg" alt="Screenshot do Site Banda Dookie" /></a>
		-->
	</div>
</div>
<?php

//ESTA COM PROBLEMA, SEM FOOTER NESSA PÁGINA, FM 6/fev/08
//require_once(dirname(__FILE__)."/footer.php");
?>

</body>
</html>
