<?php

include('conexao.php');

  if(isset($_POST['matricula']) || isset($_POST['senha'])) {

      if(strlen($_POST['matricula']) == 0) {
        echo "Preencha sua matricula";
      } else if(strlen($_POST['senha']) ==0) {
        echo "Preencha sua senha";
      } else {

            $matricula = $mysqli ->real_escape_string($_POST['matricula']);
            $senha = $mysqli ->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM consumo2 where matricula = '$matricula' and senha = '$senha'";
            $sql_query = $mysqli ->query($sql_code) or die("Falha na execução do código SQL: ". $mysqli->error);
      
          $quantidade = $sql_query->num_rows;

          if($quantidade == 1)  {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION))  {
              session_start();
            }

            $_SESSION['matricula'] = $usuario['matricula'];

            header("Location: index-segundaTela.php");

          } else {
              echo "Falha ao logar! Matricula ou senha incorretas";
          }

        }

}
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="index-primeiraTelastyles.css" />
</head>
<body>
  
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form action="" method="post"> 
          <h1>Login</h1> 
          <p> 
            <label for="matricula">Sua Matrícula</label>
            <input id="matricula" name="matricula" required="required" type="text" placeholder="ex. 1"/>
          </p>
           
          <p> 
            <label for="senha">Sua Senha</label>
            <input id="senha" name="senha" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="Entrar" /> 
          </p>
           
          <br>
          <br>
          <p class="link">
            Esqueceu sua senha?
            <a href="resetpassword.php">Recuperar senha</a>
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>