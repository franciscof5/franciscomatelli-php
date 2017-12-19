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

 <script language="JavaScript1.2">
function rejeitaTecla(){    
    //by Micox - elmicox.blogspot.com - www.ievolutionweb.com

    var oEvent=arguments[0];

    //filtrando o evento
    var oEvent = oEvent ? oEvent : window.event;
    var tecla = (oEvent.keyCode) ? oEvent.keyCode : oEvent.which;
    
    if(oEvent.type=="keydown" && navigator.appName.indexOf('Internet Explorer')<0 ){
        //se for keydown e não for o IE, vazarei pois o keypress já foi executado
        return false;
    }
    
    for(var i=1; cod_tecla=arguments[i]; i++){
        if (tecla == cod_tecla){
            if (typeof(oEvent.preventDefault)=='function'){
                oEvent.preventDefault();
            } else {
                oEvent.returnValue = false;
                oEvent.keyCode = 0;
            }
        }
    return false;}
}
function rejeitaTeclas(){
    var tecla = 0;
    var args_eval = "e, ";
    for(var i=0; tecla=arguments[i]; i++)
        {args_eval += tecla + ", ";}
    args_eval += "0";
    eval("document.onkeypress=function(e){rejeitaTecla("+args_eval+");}\n"+
        "document.onkeydown=function(e){rejeitaTecla("+args_eval+");}");
}

rejeitaTeclas(116, 48, 50, 13,8); //Chama assim com as teclas que deseja rejeitar
    </script>
</head>
<body>

	<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/header.php");
	?>
	
	<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/menu.php");
	?>
	
<div class="content" id="divaoContent">

<form method="post">
<input type="text" />
</form>

<!-- BEGIN Help Center Live Code, Copyright (c) 2005 Help Center Live. All Rights Reserved -->
<div id="div_initiate" style="position:absolute; z-index:1; top: 40%; left:40%; visibility: hidden;"><a href="javascript:Live.initiate_accept();"><img src="http://localhost/hcl/templates/Bliss/images/initiate.gif" border="0"></a><br><a href="javascript:Live.initiate_decline();"><img src="http://localhost/hcl/templates/Bliss/images/initiate_close.gif" border="0"></a></div>
<script type="text/javascript" language="javascript" src="http://localhost/hcl/class/js/include.php?live"></script>
<!-- END Help Center Live Code, Copyright (c) 2005 Help Center Live. All Rights Reserved -->


</div>

	
	<?php
	//require_once($_SERVER['DOCUMENT_ROOT']."/footer.php");
	?>
</body>
</html>