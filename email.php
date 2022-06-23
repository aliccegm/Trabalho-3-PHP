<?php

    if(isset($_POST(['email']) && !empty($_POST(['email'])){}

$nome = addcslashes($_POST(['name']))
$nome = addcslashes($_POST(['idade']))
$nome = addcslashes($_POST(['quantidade']))
$nome = addcslashes($_POST(['email']))
$nome = addcslashes($_POST(['mensage']))

$to = "201908296437@alunos.estacio.br";
$subject = "Contato - Aluna Alice";
$body = "Nome: ".$nome. "\r\n"
        "Idade: ".$idade. "\r\n"
        "Quantidade: ".$quantidade. "\r\n"
        "Email: ".$email. "\r\n"
        "Mensagem: ".$mensage. "\r\n"
$header = "From: 201908296437@alunos.estacio.br". "\r\n"
            ."Reply-To:".$email. "\e\n"
            ."X=Mailer: PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("E-mail enviado com sucesso!");

}else{
    echo("O e-mail não pode ser enviado.")";"
}

?>