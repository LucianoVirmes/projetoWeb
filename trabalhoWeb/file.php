<?php

$assunto = $_POST['assunto'];

$corpo = "
	Assunto: "  	.$_POST['assunto']. "
	Nome: "        .$_POST['nome']. "
	Email: "       .$_POST['email']. "
	Telefone: "    .$_POST['telefone']. "
	Informação: "  .$_POST['obs']. "
";

mail('luciano.virmes18@gmail.com', $assunto , $corpo, 'From: $theylormarmitt@hotmail.com');

?>