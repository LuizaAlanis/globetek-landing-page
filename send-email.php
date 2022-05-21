<?php

require __DIR__.'/vendor/autoload.php';

use \App\Communication\Email;

$senderName = $_POST['name'];
$senderEmail = $_POST['email'];
$address = 'globetek.contato@gmail.com';
$subject = 'Globetek Contact Form';
$body = $_POST['message'];

$obEmail = new Email;
$success = $obEmail -> sendEmail($senderName, $senderEmail, $address, $subject, $body);

// TODO: Entendi o que você fez aqui mas confesso que eu não gostei.
//       Primeiro porque você poderia redirecionar direto do backend.
//       Segundo porque você mostra uma página apenas com um script pra mostrar um alert e redirecionar com Javascript.
//       Aí te pergunto, se o navegador do usuário estiver com o JS desabilitado?
//       Por isso que acho que usando AJAX é melhor, porque não precisa sair da página pra
//       dizer pro usuário se a requisição foi bem sucedida. E aí não precisa de nada disso.
$positiveFeedback = "<script LANGUAGE='JavaScript'>
    window.alert('Message sent successfully');
    window.location.href='index.php';
    </script>";

$negativeFeedback = "<script LANGUAGE='JavaScript'>
    window.alert('Something went wrong');
    window.location.href='index.php';
    </script>";

echo $success ? ($positiveFeedback) : ($negativeFeedback);

# $obEmail -> getError()