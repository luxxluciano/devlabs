<!DOCTYPE html>
	<html lang="pt-br">
	<head>
	<meta charset="utf-8"/>
	<title>verifica.php</title>
	</head>
	<body>
	<?php
	
	$nome			=$_POST['nome'];
	$email			=$_POST['email'];
	$senha			=$_POST['senha'];
	$conf_senha		=$_POST['conf_senha'];
	$erro			= 0;
	
	
	//Verifica se o campo não está em branco
	if (empty($nome) OR strstr ($nome, ' ')==FALSE)
	{echo "Favor digitar seu nome corretemente.<br>"; $erro=1;}
	
	//Verifica se o campo email esta preenchido corretamente
	if (strlen($email)<8 || strstr ($email, '@')==FALSE)
	{echo "Favor digitar seu email corretemente.<br>"; $erro=1;}
	
	//Verifica se o campo senha não está em branco
	if (empty($senha) OR strstr ($senha, ' ')==FALSE)
	{echo "Favor digitar uma senha válida.<br>"; $erro=1;}
	
	//Verifica se o campo verifica senha não está em branco
	if (empty($conf_senha) OR strstr ($conf_senha, ' ')==FALSE)
	{echo "Favor digitar novamente a sua senha para confirmação.<br>"; $erro=1;}
	
	//Verifica se o campo de conferencia da senha é válido
	if ($conf_senha !== $senha)==TRUE)
	{echo "A senhas digitadas não são iguais. Digite novamente!"; $erro=1;} 
	
	//Verifica se a senha contém letras e números
	//function senhaValida($senha) {
    //return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[\w$@]{6,}$/', $senha);
	//}
	//{echo "A senha tem que conter letras e números."; $erro=1;}
	
	
	//verifica se não houve erro
	if ($erro==0)
	{echo "Todos os dados foram preenchidos corretamente";}
	include 'insere.php';
	
	?>
	
	</body>
	</html>