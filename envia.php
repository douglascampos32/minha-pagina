<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$cel = addslashes($_POST['celular']);
$msg = addslashes($_POST['msg']);

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