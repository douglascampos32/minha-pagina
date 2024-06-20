<?php

$nome = addslashes($post['nome']);
$email = addslashes($post['email']);
$cel = addslashes($post['celular']);
$msg = addslashes($post['msg']);

$para = "douglas21campos@gmail.com";
$assunto = "E-mail do site - portfolio";
$corpo = "Nome: ".$nome."\n"."E-mail: "
.$email."\n"."Telefone: ".$cel "\n".msg;

$cabeca = "From: douglas21campos@gmail.com"."\n"."reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso");

}else{
    echo("Houve um erro ao enviar o email !");
}

?>