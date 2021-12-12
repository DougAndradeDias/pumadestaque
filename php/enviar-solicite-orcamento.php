<?php
session_start();
date_default_timezone_set("America/Sao_Paulo");

require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');

$userName = 'dgldoge1@gmail.com';
$password = 'newDgl150598';

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

    $emailBody = "

    <html>
    <body style='margin: 0; padding: 0;'>
        <table border='0' cellpadding='0' cellspacing='0' width='100%'>
         <tr>
          <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' width='600' style='border-collapse: collapse;'>
                <tr>
                    <table bgcolor=grey align='center' border='0' cellpadding='0' cellspacing='0' width='600'>
                        <tr>
                            <td align='center' >
                                <img src='./images/cima.jpg' style='width: 100%;'>
                            </td>
                        </tr>
    
                        <tr>
                            <td bgcolor=grey style='padding: 40px 30px 40px 30px; width: 500px;'>
                                
                                <table bgcolor='#b3b3b3' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-radius: 5px;'>
                                 <tr>
                                        <!-- aqui é o conteudo do email-->
    
                                        <tr border='0'  cellpadding='0' cellspacing='0' width='100%' style='margin-top: -15px;'>
    
                                            <td style='font-size: 1.5rem; padding: 10px;'>
                                            Nome: {$nome}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='font-size: 1.5rem; padding: 10px;'>
                                            Email: {$email}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='font-size: 1.5rem; padding: 10px;'>
                                            Telefone: {$telefone}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='font-size: 1.5rem; padding: 10px;'>
                                            Assunto: {$assunto}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='font-size: 1.5rem; padding: 10px;'>
                                            Mensagem: {$mensagem}
                                            </td>
                                        </tr>
    
                                       <!-- aqui é o conteudo do email-->
                                 </tr>
                                </table>
                            </td>
                        </tr>
    
                        <tr>
                            <td align='center'>
                                <img src='./images/baixo.jpg' style='width: 100%;'>
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
    $mail->addAddress('dglboy@gmail.com');
    // $mail->addAddress('luks_2003@outlook.com');

    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = $emailBody;

    if ($mail->send()) {
        $_SESSION["sendEmail"] = true;
        header("Location: ../solicite-orcamento.php");
        exit();
    }
} else {
    $_SESSION["noSendEmail"] = true;
    header("Location: ../solicite-orcamento.php");
    exit();
}
