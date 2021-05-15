<?php 
    include 'menu.php';
   // recuperar valor pelo método GET
    $id = $_GET['id']; 

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
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar dados do Competidor</title>
</head>
<body>
    <div class="container grey lighten-4 col s12">
        <div class="brown lighten-4 col s12">
            <h3 class="align center">Editar Competidor</h3>
        </div>
        <div class="row">
            <form action="edtCompetidor.php" method="POST" id="frmEdtCompetidor" class="col s12">
                <div class="input-field col s8">
                    <label for="lblID"><B>ID: <?php echo $id?></b></label>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                </div>  
                <br/> <br/> <br/>
                <div class="input-field col s8">
                    <label for="lblNome">Informe o Nome do Competidor</label>
                    <input type="text" class="form-control" id="txtNome" name="txtNome"
                       value="<?php echo $competidor['nome'];?>">
                </div>   
                <div class="input-field col s5">
                    <label for="lblCidade">Informe o Nome da Cidade</label>
                    <input type="text" class="form-control" id="txtCidade" name="txtCidade"
                       value="<?php echo $competidor['cidade'];?>">
                </div>   
                <div class="input-field col s5">
                    <label for="lblEstado">Informe o Nome do Estado</label>
                    <input type="text" class="form-control" id="txtEstado" name="txtEstado"
                    value="<?php echo $competidor['estado'];?>">
                </div>      
                <div class="input-field col s5">
                    <label for="lblIdade">Informe a idade do Competidor</label>
                    <input type="number" class="form-control" id="txtIdade" name="txtIdade"
                      value="<?php echo $competidor['idade'];?>">
                </div>  
                <div class="input-field col s5">
                    <label for="lblSomaNota">Notas do Competidor</label>
                    <input type="number" class="form-control" id="txtNota" name="txtNota"
                    value="<?php echo $competidor['somanota'];?>">
                </div>  
                <div class="input-field col s8">
                    <br>
                    <button class="btn waves-effect waves-light" type="submit" name="btnGravar">Gravar
                       <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light orange" type="reset" name="btnReset">Limpar
                       <i class="material-icons right">brush</i>
                    </button>      
                    <button class="btn waves-effect waves-light indigo darken-4" type="button" name="btnVoltar"
                     onclick="JavaScript:location.href='listarCompetidores.php'" >Voltar
                       <i class="material-icons right">arrow_back</i>
                    </button>    
                </div>

            </form>
        </div>
    </div>
</body>
</html>