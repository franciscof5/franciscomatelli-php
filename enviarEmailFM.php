<?php
$msg = 
"<h1>Um novo contato pelo site</h1>".
"Nome: ".$_POST['nome']."<br>".
"email: ".$_POST['email']."<br>".
"empresa: ".$_POST['empresa']."<br>".
"ramo: ".$_POST['ramo']."<br>".
"site: ".$_POST['site']."<br>".
"<h1>".$_POST['origem']."</h1><br>".
"texto: ".$_POST['texto'];

$expire=time()+60*60*24*30;
if(isset($_POST['nome']))
$nome=$_POST['nome'];
else
$nome="Visitante";
setcookie("nomeVisitante", $_POST['nome'], $expire);

$cabecalho = "From:Contato pelo Site <".$_POST['email'].">\r\n";
$cabecalho.= "Content-Type: text/html;\r\n charset=\"utf-8\"\r\n";

if(mail("fmatelli@gmail.com", "Contato no Site!", $msg, $cabecalho))
echo "<script>window.location = \"sucesso.php\";</script>";
else
echo "<script>window.location = \"erro.php\";</script>";
//echo $msg;
?>