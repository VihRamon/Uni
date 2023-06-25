<?php

include('conexao.php');


?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Recuperar Senha</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="index-primeiraTelastyles.css" />
</head>
<body>
  
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--Recuperação de senha-->
      <div id="Recuperação de senha">
        <form action="" method="post"> 
        <br>
        <br>
        <br>
        <br>
        <h1>Recuperação de senha</h1> 
          <p> 
            <label for="matricula">Sua Matrícula</label>
            <input id="matricula" name="matricula" required="required" type="text" placeholder="ex. 1"/>
          </p>
           
          <p> 
            <label for="bairro">Seu Bairro</label>
            <input id="bairro" name="bairro" required="required" type="text" placeholder="ex. centro" /> 
          </p>
           <br>

           <br>
          <p> 
            <label for="newpassword1">Nova Senha</label>
            <input id="newpassword1" name="newpassword1" required="required" type="password" placeholder="ex. centro" /> 
          </p>

          <p> 
            <label for="newpassword2">Confirmar Nova Senha</label>
            <input id="newpassword2" name="newpassword2" required="required" type="password" placeholder="ex. centro" /> 
          </p>


          <p> 
            <input type="submit" value="Salvar" /> 
          </p>
           
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>