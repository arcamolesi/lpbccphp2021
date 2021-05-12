<?php
    include 'conexao.php'; 
    $pdo = Conexao::conectar(); 
    $sql = "Select  * from competidor order by nome"; 
    $listaCompetidores = $pdo->query($sql); 
    Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Listar Competidores</title>
</head>
<body>   
  <div class="container">
  <div class="row">
      <div class="col s10">

    <h4 class="text-amber">Listar Competidores   
       <a class="btn-floating btn-large waves-effect waves-light green"
        onclick="JavaScript:location.href='frmInsCompetidor.php'">
        <i class="material-icons">add</i></a>
    </h4>

    <table class="striped" class="responsive-table">
        <tr class="solid orange green-text text-lighten-3">
            <th>ID</th>
            <th>NOME</th>
            <th>CIDADE</th>
            <th>ESTADO</th>
            <th>IDADE</th>
            <th>SOMA NOTA</th>
        </tr>

        <?php 
            $cont = 0; 
            foreach ($listaCompetidores as $competidor){
            
        ?>
            <tr class="blue-text text-light-blue accent-4"  >
                <td><?php echo $competidor['id']  ?></td>
                <td><?php echo $competidor['nome']  ?></td>
                <td><?php echo $competidor['cidade']  ?></td>
                <td><?php echo $competidor['estado']  ?></td>
                <td><?php echo $competidor['idade']  ?></td>
                <td class="center-align"><?php echo $competidor['somanota']  ?></td>
            </tr>
        <?php
            $cont++;}
        ?>
    
    </table>
    <h6>Quantidade de Registros impressos: <?php echo $cont;?></h6>
    </div>
    </div>
    </div>
</body>
</html>