
<?php

// Importa as classes necessárias do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclui os arquivos necessários do PHPMailer
require ('../assets/PHPMailer/src/SMTP.php');      // Arquivo para configuração do SMTP
require('../assets/PHPMailer/src/Exception.php');  // Arquivo para tratamento de exceções
require('../assets/PHPMailer/src/PHPMailer.php');  // Arquivo principal do PHPMailer

// Função para enviar e-mails
function enviarEmail($destinatarioEmail, $destinatarioNome, $assunto, $mensagem) {
    try {
        // Configurações do servidor SMTP
        $mail = new PHPMailer(true); // Cria uma nova instância do PHPMailer com tratamento de exceções ativado
        $mail->isSMTP();             // Define que o PHPMailer usará SMTP para enviar o e-mail
        $mail->Host       = 'smtp.gmail.com'; // Define o servidor SMTP do Gmail
        $mail->SMTPAuth   = true;             // Habilita autenticação SMTP
        $mail->Username   = 'example@gmail.com'; // E-mail do remetente (Gmail)
        $mail->Password   = 'xxxx xxxx xxxx xxxx'; // Senha do e-mail ou senha de aplicativo
        $mail->SMTPSecure = 'ssl';             // Habilita criptografia SSL
        $mail->Port       = 465;               // Porta SMTP do Gmail para SSL

        // Configurações do e-mail
        $mail->setFrom('example@gmail.com', 'xxxxxxxx'); // Define o remetente (e-mail e nome)
        $mail->addAddress($destinatarioEmail, $destinatarioNome); // Adiciona o destinatário (e-mail e nome)
        $mail->isHTML(true); // Define que o corpo do e-mail será em formato HTML
        $mail->Subject = $assunto; // Define o assunto do e-mail
        $mail->Body    = $mensagem; // Define o corpo do e-mail (pode ser HTML)

        // Envia o e-mail
        $mail->send(); // Tenta enviar o e-mail
        return true; // Retorna true se o e-mail for enviado com sucesso
    } catch (Exception $e) {
        // Captura exceções e retorna uma mensagem de erro
        return "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
}

?>
