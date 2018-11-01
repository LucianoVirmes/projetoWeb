<?php

$assunto = $_POST['assunto'];

$corpo = "
	Assunto: "  	.$_POST['assunto']. "
	Nome: "        .$_POST['nome']. "
	Email: "       .$_POST['email']. "
	Telefone: "    .$_POST['telefone']. "
	Informação: "  .$_POST['obs']. "
";

mail('theylor.marmitt@unoesc.edu.br', $assunto , $corpo, 'From: $theylor.marmitt@unoesc.edu.br');

?>