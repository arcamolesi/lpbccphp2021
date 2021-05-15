<?php //frmRemCompetidor.php
   // recuperar valor pelo método GET
    if (isset($_GET['id']))
       $id = $_GET['id']; 
    else $id=0; 

    //recuperar os dados no banco para editar
    include 'conexao.php';
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM competidor WHERE id=?;";
    $query = $pdo->prepare($sql); 
    $query->execute(array($id));
    $competidor = $query->fetch(PDO::FETCH_ASSOC);
    Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Remoção de Competidores</title>
  </head>
  <body> 
     <div class="container grey lighten-4 col s12">
        <div class="brown lighten-4 col s12">
            <h3>Remover Competidor</h3>
        </div>
        <form action="remCompetidor.php" method="POST" id="frmRemCompetidor" class="col s12">

         <div class="row">
            <div class="col s10">
                <h4><blockquote>ID: <?php echo $id;?></blockquote></h4></label>
                <input type="hidden" name="id" value="<?php echo $id;?>">
          
                <label for="lblNome"><h4> Nome: <?php echo $competidor['nome'];?> </h4></label>
                <label for="lblCidade"><h4> Cidade: <?php echo $competidor['cidade'];?> </h4></label>
                <label for="lblEstado"><h4> Estado: <?php echo $competidor['estado'];?> </h4></label>
                <label for="lblIdade"><h4> Idade: <?php echo $competidor['idade'];?> </h4></label>
                <label for="lblNota"><h4> Nota: <?php echo $competidor['somanota'];?> </h4></label>
            </div>

            <div class="input-field col s8">
                <br>
                <button class="btn waves-effect waves-light red" type="submit" name="btnRemover">Remover
                   <i class="material-icons right">remove_circle</i>
                </button>
 
                <button class="btn waves-effect waves-light indigo darken-4" type="button" name="btnVoltar"
                   onclick="JavaScript:location.href='listarCompetidores.php'" >Voltar
                   <i class="material-icons right">arrow_back</i>
                </button>    
           </div>

         </div>
       </form>  
     </div>
  </body>
</html>
 