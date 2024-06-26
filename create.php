<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
  
  <div class="container full right" >
    <img src="amarelo.png" width="690" height="682" />
</div>
    <title>Entrar</title> 
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #FFF389;
}
.background{
    width: 470px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}

form{
    height: 520px;
    width: 400px;
    background-color: #a5a7a9;
    position: absolute;
    transform: translate(-50%,-50%);
    background-color: rgba(255,255,255,0.07);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 30px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color:#252835;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 35px;
    width: 100%;
    background-color: rgba(255,255,255,0.20);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #b5b5b5;
}
button{
    margin-top: 14px;
    width: 100%;
    background-color: #fbdb3a;
    color: #080710;
    padding: 13px 0;
    font-size: 16px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: yellow;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}

    </style>
</head>
<body>
    
    </div>
    <form>
        <h3>Entrar</h3> <p class="link">
      

<a href="/phpcrud/cadastro.php">Criar uma conta</a>
<form class="form" action="#" method="post">

        <label for="usuario">Usuário:</label>
        <input type="text" placeholder="Email ou CPF" id="usuario" required>

        <label for="password">Senha:</label>
                <div class="password-input-outer">
                    <input type="password" id="password" name="password"required>
                    <div class="password-helper"></div>
        
        <br>
        <div class="g-recaptcha" data-callback="recaptchaVerified" data-sitekey="6Lc2WboaAAAAAEaRkS9IuVYxBpZ-mD9XYbu0WeGV"></div>
            <input id='g-recaptcha-input' type="hidden" value="0" name="g-recaptcha">
                </div>
        <div id="forgot-password-form" class="forgot-password">
        <a href="/phpcrud/redefinirSenha.php">Esqueceu a senha?</a></div>
        
        <button>Entrar</button>
</div>

<script src="https://www.google.com/recaptcha/api.js?hl=pt_BR" async defer></script>
<script>
    function recaptchaVerified() {
        $('#g-recaptcha-input').val(1).trigger('change');

       
<div id="login-inputs">

<label for="email">E-mail:</label>
<div>
<div>
<input type="email" id="email" name="email">
<p class="form-error" id="email-error"></p>
<label for="password">Senha:</label>
<div class="password-input-outer">
    <input type="password" id="password" name="password">
    <div class="password-helper"></div>
</div>

<button id="login-btn" class="home-btn disabled">Enviar</button>
<p class="form-error" id="password-error"></p>
</div>

        
        </div>
    </form>
</body>
</html>



