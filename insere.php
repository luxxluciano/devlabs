<?php
	
	/**
	* Cria o hash da senha, usando MD5 e SHA-1
	*/
	function make_hash($str){
    return sha1(md5($str));
	}
	
	include 'conecta.php';
	
	$nome		=$_POST['nome'];
	$email		=$_POST['email'];
	$senha		=$_POST['senha'];
	
	// cria o hash da senha
	$passwordHash = make_hash($senha);
	
	$sql = "INSERT INTO tabela1 VALUES";
	$sql .= "('$nome','$email','$passwordHash')";
	
	if ($conexao->query($sql) ===TRUE) {
		echo "Usuário incluído com sucesso!"
	} else {
		echo "Erro: " .$sql . "<br>" . $conexao->error;
	}

	$conexao->close();
	
	?>