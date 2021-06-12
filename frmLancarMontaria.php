

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
    <title>Lançar montaria</title>
</head>
<body>
    <div class="container grey lighten-4 col s12">
        <div class="brown lighten-4 col s12">
            <h3>Lançar Montaria</h3>
        </div>
        <div class="row">
            <form action="lancarMontaria.php" method="post"  id="frmLancarMontaria" class="col s12">
                <div class="input-field col s8">
					<label for="lblData">Informe a Data da Montaria</label>
                    <input type="date" class="form-control" id="txtData" name="txtData">
                   
                </div>   
                        
                <div class="input-field col s8">
                    <label for="lblCompetidor">Informe o Competidor</label>
                    <input type="text" class="form-control" id="txtCompetidor" name="txtCompetidor">
                </div>   

                <div class="input-field col s8">
                    <label for="lblAnimal">Informe o Animal</label>
                    <input type="text" class="form-control" id="txtAnimal" name="txtAnimal">
                </div>   
                 
                <div class="input-field col s5">
                    <label for="lblNtComp">Informe a Nota do Competidor</label>
                    <input type="number" class="form-control" id="txtNtComp" name="txtNtComp">
                </div>  

                <div class="input-field col s5">
                    <label for="lblNtAnm">Informe a Nota do Animal</label>
                    <input type="number" class="form-control" id="txtNtAnm" name="txtNtAnm">
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