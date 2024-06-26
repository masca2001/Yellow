<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reiniciar a Senha</title>
    <style>
        .forgot-password { display: none; }
        #post-forgot-password-form { display: none; }
        .visible { display: block; }
    </style>
</head>
<body>
    <div>
        <div id="pre-forgot-password-form" class="forgot-password visible">
            <h1>Reiniciar a minha senha</h1>
            <p>Informe o endereço de e-mail associado à sua conta. Vamos enviar um link para que você possa reiniciar a sua senha!</p>
            <input autocomplete="off" type="email" name="forgot-password-email" placeholder="Meu e-mail">
            <p class="error"></p>
            <button onclick="sendEmail()">Enviar</button>
            <a href="create.php">Voltar</a>
        </div>
        <div id="post-forgot-password-form" class="forgot-password">
            <h1>Reiniciar a minha senha</h1>
            <div id="reset-icon"><div class="check draw"></div></div>
            <p>E-mail enviado com sucesso! Verifique a sua caixa de entrada para gerar uma nova senha e continuar.</p>
            <p>Você será automaticamente redirecionado(a) para outra página.</p>
        </div>
    </div>

    <script>
        function sendEmail() {
            // Aqui você pode adicionar a lógica para enviar o e-mail
            // Por exemplo, fazer uma requisição AJAX para um servidor

            // Simulação de envio de e-mail
            setTimeout(function() {
                document.getElementById('pre-forgot-password-form').classList.remove('visible');
                document.getElementById('post-forgot-password-form').classList.add('visible');

                // Redirecionamento automático após alguns segundos
                setTimeout(function() {
                    window.location.href = 'confirmacaosenha.html'; // Altere para a URL desejada
                }, 5000); // Redireciona após 5 segundos
            }, 1000); // Simula um atraso de 1 segundo para o envio do e-mail
        }
    </script>
</body>
</html>
