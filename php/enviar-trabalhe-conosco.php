<?php
session_start();
date_default_timezone_set("America/Sao_Paulo");

require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');

$userName = '';
$password = '';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não Informado';
$telefone = !empty($_POST['telefone']) ? $_POST['telefone'] : 'Não Informado';
$email = trim($_POST['email']);
$anexo = $_FILES['curriculo'];
$data = date('d/m/Y H:i:s');

if ($nome && $telefone && $email && $anexo) {

    // Html que será enviado para o email //
    $emailBody = "
  <html>
      <body style='margin: 0; padding: 0;'>
      <table border='0' cellpadding='0' cellspacing='0' width='100%'>
       <tr>
        <td>
          <table align='center' border='0' cellpadding='0' cellspacing='0' width='600' style='border-collapse: collapse;'>
              <tr>
                  <table align='center' border='0' cellpadding='0' cellspacing='0' width='600'>
                      <tr>
                          <td align='center' bgcolor=black style='padding: 40px 0 30px 0;'>
                          </td>
                      </tr>
  
                      <tr>
                          <td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px;'>
                              <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                               <tr>
                                      <!-- aqui é o conteudo do email-->
  
                                      <tr border='0' cellpadding='0' cellspacing='0' width='100%'>
  
                                          <td>
                                           <strong>Nome:</strong> {$nome}
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                          <strong>Email:</strong> {$email}
                                          </td> 
                                      </tr>
                                      <tr>
                                          <td>
                                          <strong>Telefone:</strong> {$telefone}
                                          </td>
                                      </tr>                                  
                                      <tr>
                                          <td>
                                          <strong>Data:</strong> {$data}
                                          </td>
                                      </tr>
  
                                     <!-- aqui é o conteudo do email-->
                               </tr>
                              </table>
                             </td>
                      </tr>
  
                      <tr>
                          <td align='center' bgcolor=black style='padding: 40px 0 30px 0;'>
                             </td>
                      </tr>
                  </table>
              </tr>
             </table>
        </td>
       </tr>
      </table>
     </body>
  </html>
  ";
    // ---------------------------------- //

    $mail = new PHPMailer();

    $mail->isSMTP(true);
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $userName;
    $mail->Password = $password;
    $mail->Port = 587;

    $mail->setFrom($userName);
    // $mail->addAddress('dglboy@gmail.com');
    // $mail->addAddress('luks_2003@outlook.com');

    $mail->isHTML(true);
    $mail->Subject = 'Envio de Curriculo';
    $mail->Body = $emailBody;
    $mail->addAttachment($anexo['tmp_name'], $anexo['name']);

    if ($mail->send()) {
        $_SESSION["sendEmail"] = true;
        header("Location: ../trabalhe-conosco.php");
        exit();
    }
} else {
    $_SESSION["noSendEmail"] = true;
    header("Location: ../trabalhe-conosco.php");
    exit();
}
