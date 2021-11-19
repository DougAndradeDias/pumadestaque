<?php
session_start();
date_default_timezone_set("America/Sao_Paulo");

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não Informado';
$telefone = !empty($_POST['telefone']) ? $_POST['telefone'] : 'Não Informado';
$email = trim($_POST['email']);
$assunto = utf8_decode(trim($_POST['assunto']));
$mensagem = trim($_POST['mensagem']);
$data = date('d/m/Y H:i:s');

if ($email && $assunto && $mensagem) {

  // Html que será enviado para o email //
  $arquivo = "
    <p>Nome: <strong>{$nome}</strong></p>
    <p>Telefone: <strong>{$telefone}</strong></p>
    <p>Email: <strong>{$email}</strong></p>
    <p>Mensagem: <strong>{$mensagem}</strong></p>
    <p>Data: {$data}</p>";
  // $arquivo = "
  // <style type='text/css'>
  // body {
  // margin:0px;
  // font-family:Verdane;
  // font-size:12px;
  // color: #666666;
  // }
  // a{
  // color: #666666;
  // text-decoration: none;
  // }
  // a:hover {
  // color: #FF0000;
  // text-decoration: none;
  // }
  // </style>
  //   <html>
  //       <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
  //           <tr>
  //             <td>
  // <tr>
  //                <td width='500'>Nome:$nome</td>
  //               </tr>
  //               <tr>
  //                 <td width='320'>E-mail:<b>$email</b></td>
  //    </tr>
  //     <tr>
  //                 <td width='320'>Telefone:<b>$telefone</b></td>
  //               </tr>
  //    <tr>
  //                 <td width='320'>Opções:$escolhas</td>
  //               </tr>
  //               <tr>
  //                 <td width='320'>Mensagem:$nome</td>
  //               </tr>
  //           </td>
  //         </tr>
  //         <tr>
  //           <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
  //         </tr>
  //       </table>
  //   </html>
  // ";
  // ---------------------------------- //

  $mail = new PHPMailer();

  $mail->isSMTP(true);
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'dgldoge1@gmail.com';
  $mail->Password = 'dgl150598';
  $mail->Port = 587;

  $mail->setFrom('dgldoge1@gmail.com');
  //$mail->addAddress('dglboy@gmail.com');
  $mail->addAddress('luks_2003@outlook.com');

  $mail->isHTML(true);
  $mail->Subject = $assunto;
  $mail->Body = $arquivo;

  if ($mail->send()) {
    $_SESSION["sendEmail"] = true;
    header("Location: solicite-orcamento.php");
    exit();
  }
} else {
  $_SESSION["noSendEmail"] = true;
  header("Location: solicite-orcamento.php");
  exit();
}
