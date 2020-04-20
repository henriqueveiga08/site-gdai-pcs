<?php

    if(isset(addcslashes($_POST['nome']) && !empty(addcslashes($_POST['nome'])){
        $nome = addcslashes($_POST['nome']);
        $email = addcslashes($_POST['email']);
        $mensagem = addcslashes($_POST['mensagem']);
    }

    $to = "gdai.pocos@ifsuldeminas.edu.br";
    $assunto = "Contato site G-DAI";
    $corpoemail = "Nome: ".$nome."\r\n Email: ".$email."\r\n Mensagem: ".$mensagem;

    $cabecarioemail = "From:rodrigo.ortolan@ifsuldeminas.edu.br"."\r\n"."Replay-to:".$email.
                    "\r\n"."X=Mailer:PHP/".phpversion();

    




?>