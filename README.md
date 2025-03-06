# Função para Enviar E-mails via SMTP com PHP e PHPMailer

Este repositório contém uma função PHP que utiliza a biblioteca PHPMailer para enviar e-mails via SMTP. Abaixo, você encontrará um guia passo a passo para configurar e usar a função, além de instruções para criar um e-mail SMTP no Gmail.

## Pré-requisitos

1. **PHP**: Certifique-se de que o PHP está instalado e configurado no seu ambiente.
2. **PHPMailer**: A biblioteca PHPMailer deve estar incluída no seu projeto. Você pode baixá-la [aqui](https://github.com/PHPMailer/PHPMailer).
3. Caso tenha dificuldade, no repositório está disponivel os arquivos da bibliotece PHPMailer.

## Passo a Passo para Usar a Função `enviarEmail`

### 1. Inclua a Função no Seu Projeto

Certifique-se de que a função `enviarEmail` está incluída no seu projeto PHP. Você pode copiar e colar o código fornecido no repositório.

### 2. Configure o PHPMailer

A função já está configurada para usar o Gmail como servidor SMTP. No entanto, você precisará fornecer suas credenciais de e-mail e senha.

- **Host**: `smtp.gmail.com`
- **Porta**: `465`
- **Segurança**: `ssl`
- **Usuário**: Seu e-mail do Gmail (ex: `seuemail@gmail.com`)
- **Senha**: A senha do seu e-mail ou uma senha de aplicativo, se você estiver usando a verificação em duas etapas.

## Como Criar um E-mail SMTP no Gmail

Se você não tem um e-mail SMTP configurado no Gmail, siga os passos abaixo:

### 1. Crie uma Conta no Gmail

Se você ainda não tem uma conta no Gmail, crie uma em [https://mail.google.com](https://mail.google.com).

### 2. Ative a Verificação em Duas Etapas

Para usar o Gmail como servidor SMTP, é recomendável ativar a verificação em duas etapas para aumentar a segurança.

1. Acesse [https://myaccount.google.com/security](https://myaccount.google.com/security).
2. Navegue até a seção "Verificação em duas etapas" e siga as instruções para ativá-la.

### 3. Crie uma Senha de Aplicativo

Após ativar a verificação em duas etapas, você precisará criar uma senha de aplicativo para usar no PHPMailer.

1. Acesse [https://myaccount.google.com/apppasswords](https://myaccount.google.com/apppasswords).
2. Selecione o aplicativo como "Mail" e o dispositivo como "Outro (Nomeie o dispositivo)".
3. Clique em "Gerar".
4. Uma senha de 16 caracteres será gerada. Use essa senha no lugar da senha do seu e-mail no código PHP.

### 4. Configure o PHPMailer com as Credenciais do Gmail

No código PHP, substitua as credenciais do Gmail pelas suas:

    ```php
    $mail->Username   = 'seuemail@gmail.com';      // SMTP username
    $mail->Password   = 'sua_senha_de_aplicativo'; // SMTP password

### 3. Chame a Função `enviarEmail`

A função `enviarEmail` recebe quatro parâmetros:

- `$destinatarioEmail`: O endereço de e-mail do destinatário.
- `$destinatarioNome`: O nome do destinatário.
- `$assunto`: O assunto do e-mail.
- `$mensagem`: O corpo do e-mail (pode ser HTML).

Exemplo de uso:

    ```php
    $destinatarioEmail = 'destinatario@example.com';
    $destinatarioNome = 'Nome do Destinatário';
    $assunto = 'Assunto do E-mail';
    $mensagem = '<h1>Olá!</h1><p>Este é um e-mail de teste.</p>';
    
    $resultado = enviarEmail($destinatarioEmail, $destinatarioNome, $assunto, $mensagem);
    
    if ($resultado === true) {
        echo 'E-mail enviado com sucesso!';
    } else {
        echo 'Erro ao enviar o e-mail: ' . $resultado;
    }

## 4. Execute o Script

Execute o script PHP no seu servidor ou ambiente de desenvolvimento. Se tudo estiver configurado corretamente, o e-mail será enviado para o destinatário.

## Autor

Este projeto foi desenvolvido por [Aryelson Gonçalves Messias](https://github.com/aryelson1), com o objetivo de facilitar o envio de e-mails via SMTP utilizando PHP e a biblioteca PHPMailer.

- **GitHub**: [aryelson1](https://github.com/aryelson1)
- **LinkedIn**: [Aryelson Gonçalves](https://www.linkedin.com/in/aryelson-goncalves-messias-995002203) 
- **Site Pessoal**: [Portfolio](https://aryelson1.github.io/Portfolio/) 

Se você tiver alguma dúvida, sugestão ou quiser contribuir, sinta-se à vontade para entrar em contato ou abrir uma issue no repositório do projeto.

**Licença**: Este projeto está licenciado sob a [MIT License](https://opensource.org/licenses/MIT). Consulte o arquivo `LICENSE` para mais detalhes.
