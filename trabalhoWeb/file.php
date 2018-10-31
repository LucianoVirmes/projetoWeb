<?php

$destinatario = "theylor.marmitt@unoesc.edu.br";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$obs = $_POST['obs'];


$body = "===================================" . "\n";
$body = $body . "Contato - BestCarAlugueis" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Assunto: " . $assunto . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Telefone: " . $telefone . "\n\n";

$body = $body . "obs: " . $obs . "\n\n";

$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

header("location:obrigado.htm");


?>