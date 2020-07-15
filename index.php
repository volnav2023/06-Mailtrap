<?php

// // require_once("vendor/autoload.php");
// require_once 'vendor/autoload.php';

// // Create the Transport
// $transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 25))
//     ->setUsername('e5b9fdd51104cd')
//     ->setPassword('f15b2a565cf13b');

// // if ($_SERVER['SERVER_NAME'] == 'localhost') {
// //     $transport = (new Swift_SmtpTransport('mailtrap.io', 25))
// //         ->setUsername('e5b9fdd51104cd')
// //         ->setPassword('f15b2a565cf13b');
// // } else {
// //     $transport = (new Swift_MailTransport());
// // }

// // Create the Mailer using your created Transport
// $mailer = new Swift_Mailer($transport);

// // $message = Swift_Message::newInstance('Bienvenue')
// // ->setFrom(['contact@flechet.com' => 'flechet.com'])
// // ->setTo(['demo@flechet.com'])
// // ->setBody('Salut les gens');

// // Create a message
// $message = (new Swift_Message('Wonderful Subject'))
//     ->setFrom(['john@doe.com' => 'John Doe'])
//     ->setTo(['david@flechet.com', 'other@flechet.com' => 'A name'])
//     ->setBody('Here is the message itself');


// // Send the message
// $result = $mailer->send($message);

// // $mailer->send($message);

// var_dump($result);

$mail = mail('demo@flechet.com', 'Subject Test', 'Body je fais un test', 'From: toto@flechet.com');

if ($mail) {
    echo 'Merci';
} else {
    echo 'Erreur';
}
