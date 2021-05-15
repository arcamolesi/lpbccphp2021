<?php
    include 'menu.php';

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
     <div class="container grey lighten-4 col s12">
     
      <div class="brown lighten-4 col s12">
            <h3 class="align center">Listar Competidores   
                 <a class="btn-floating btn-large waves-effect waves-light green"
                onclick="JavaScript:location.href='frmInsCompetidor.php'">
                <i class="material-icons">add</i></a>
            </h3>
     </div>

    <table class="striped" class="responsive-table">
        <tr class="solid orange black-text text-dark-4 align center">
            <th>ID</th>
            <th>NOME</th>
            <th>CIDADE</th>
            <th class="align center">ESTADO</th>
            <th class="align center">IDADE</th>
            <th class="align center">SOMA NOTA</th>
            <th colspan="2" class="align center">FUNÇÃO</th>
        </tr>

        <?php 
            $cont = 0; 
            foreach ($listaCompetidores as $competidor){
            
        ?>
            <tr class="blue-text text-light-blue accent-4"  >
                <td><?php echo $competidor['id']  ?></td>
                <td><?php echo $competidor['nome']  ?></td>
                <td><?php echo $competidor['cidade']  ?></td>
                <td class="align center"><?php echo $competidor['estado']  ?></td>
                <td class="align center"><?php echo $competidor['idade']  ?></td>
                <td class="align center"><?php echo $competidor['somanota']  ?></td>
                <td><a class="btn-floating btn-small waves-effect waves-light amber"
                        onclick="JavaScript:location.href ='frmEdtCompetidor.php?id=' +
                        <?php echo $competidor['id'];?>">
                        <i class="material-icons">edit</i>
                </td>
                <td><a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript:location.href ='frmRemCompetidor.php?id=' +
                        <?php echo $competidor['id'];?>">
                        <i class="material-icons">delete</i>
               </td>

            </tr>
        <?php
            $cont++;}
        ?>
    
    </table>
    <h6>Quantidade de Registros impressos: <?php echo $cont;?></h6>
    </div>
</body>
</html> 