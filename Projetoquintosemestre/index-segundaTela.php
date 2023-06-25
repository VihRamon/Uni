<?php

    include('protect.php');
    include('conexao.php');
    include('index-primeiraTela.php');

   
        $sql =   "SELECT janeiro, fevereiro, marco, abril, maio, junho, julho, agosto, setembro, outubro, novembro, dezembro  FROM consumo2 
        where matricula= 1";  
         
        $dados = $mysqli->query($sql);


        $sql2 = "SELECT valor_gasto_ano FROM consumo2
        WHERE matricula=1";

        $ano = $mysqli->query($sql2);
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu consumo</title>
    <link rel="stylesheet" href="index-segundaTelastyles.css">
    <link rel="stylesheet" href="script.js">
</head>
<body>
    <div id="cadastro">
        <form method="post" action=""> 
          
        <br>
        <h3>Bem vindo a plataforma de consumo, Sua matricula é <?php echo $_SESSION ['matricula']; ?>
   
       <button>
            <a href="logout.php">Sair</a>
       </button>
       </h3> 
          <br>
          <br>

          <h1>Consumo Mensal</h1> 

         
          <table border="1" cellspacing="0" rules="1" width= "900px">
            <tr>
                <th scope="col">janeiro</th>
                <th scope="col">fevereiro</th>
                <th scope="col">março</th>
                <th scope="col">abril</th>
                <th scope="col">maio</th>
                <th scope="col">junho</th>
                <th scope="col">julho</th>
                <th scope="col">agosto</th>
                <th scope="col">setembro</th>
                <th scope="col">outubro</th>
                <th scope="col">novembro</th>
                <th scope="col">dezembro</th>
            </tr>

            <tbody>
               <?php
                  while($user_data = mysqli_fetch_assoc($dados))

                   {
                    echo "<tr>";
                    echo "<td>".$user_data['janeiro']."</td>";
                    echo "<td>".$user_data['fevereiro']."</td>";
                    echo "<td>".$user_data['marco']."</td>";
                    echo "<td>".$user_data['abril']."</td>";
                    echo "<td>".$user_data['maio']."</td>";
                    echo "<td>".$user_data['junho']."</td>";
                    echo "<td>".$user_data['julho']."</td>";
                    echo "<td>".$user_data['agosto']."</td>";
                    echo "<td>".$user_data['setembro']."</td>";
                    echo "<td>".$user_data['outubro']."</td>";
                    echo "<td>".$user_data['novembro']."</td>";
                    echo "<td>".$user_data['dezembro']."</td>";
                    echo "</tr>";
                    }
              ?>

            </tbody>
                 
          </table>
          <br>

          <div id="ano">
            <form method="post" action=""> 
              <h1>Consumo Anual</h1> 
              <table border="1" cellspacing="0" rules="1" width= "900px">

               <tbody>
                  <?php
                    while($year = mysqli_fetch_assoc($ano))

                      {
                        echo "<tr>";
                        echo "<td>".$year['valor_gasto_ano']."</td>";
                        echo "</tr>";
                       }
                  ?>

               </tbody>

              </table>

              </table>
          <br>

          <div id="desconto">
            <form method="post" action=""> 
              <h1>Qual desconto deseja aplicar?</h1> 
              <table border="1" cellspacing="0" rules="1" width= "900px">

              <p> 
            <label for="matricula">Sua Matrícula</label>
            <input id="matricula" name="matricula" required="required" type="text" placeholder="ex. 1"/>
          </p>

              </table>
</form>
</html>