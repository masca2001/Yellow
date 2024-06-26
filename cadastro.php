<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
   <br><br><br><br><br>
    <title>Cadastro</title>
    <div class="container full right" >
    <img src="amarelo.png" width="690" height="682" />
</div>

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
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
form{
    height: 900px;
    width: 800px;
    background-color: rgba(255,255,255,0.07);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 75%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 6px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 15px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #252835;
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
    height: 50px;
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
    margin-top: 50px;
    width: 100%;
    background-color:  #fbdb3a;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
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

        <h3>Cadastre-se</h3>

<form class="form" action="#" method="post">
    
    <div class="form_grupo">
        <label for="nome" class="form_label">Nome completo</label>
        <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome completo" required>
    </div>

    <div class="form_grupo">
        <label for="e-mail" class="form_label">Email</label>
        <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com" required>
    </div>

    <div class="form_grupo">
        <label for="cpfcrm" class="form_label">CPF ou CRM</label>
        <input type="text" name="cpfcrm" class="form_input" id="cpfcrm" placeholder="000000000-00" required>
    </div>
    <br>
    <div class="form_grupo">
        <label for="datanascimento" class="form_label">Data de Nascimento</label>
        <input type="date" name="datanascimento" class="form_input" id="datanascimento" placeholder="Data de nascimento" required>
    </div>        
    <br>
    <div class="form_grupo">
        
        <label for="estadocivil" class="text">Estado civil</label>
        <select name="estadocivil" class="dropdown" required>
            
            <option selected disabled class="form_select_option" value="">Selecione</option>
            <option value="Solteiro" class="form_select_option">Solteiro(a)</option>
            <option value="Casado" class="form_select_option">Casado(a) </option>
            <option value="Divorciado" class="form_select_option">Divorciado(a)</option>                    
            <option value="Viúvo" class="form_select_option">Viúvo(a)</option>      
        </select>
        <br>
    </div>

    <div class="form_grupo">
<br>
<label for="selecaogenero" class="text">Seleção de gênero:</label>
        <select name="selecaogenero" class="dropdown" required>
            
            <option selected disabled class="form_select_option" value="">Não informar</option>
            <option value="Feminino" class="form_select_option">Feminino</option>
            <option value="Masculino" class="form_select_option">Masculino</option>
        </select>
        <br>
    </div>

        <div class="submit">

          <input type="hidden" name="acao" value="enviar">
          <button type="submit" name="Submit" class="submit_btn" >Cadastrar</button>

        
        </div>
</form>

</div><!--container_form-->
<!DOCTYPE html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "pessoa";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $bdname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
		<img  src="thumbnail_image0.png">
		<h1>Yellow</h1>
            <a href="index.php"><i class="fas fa-home"></i>Início</a>
			<a href="create.php"><i class="fas fa-user"></i>Entrar</a>
			
    	</div>
    </nav>


  
