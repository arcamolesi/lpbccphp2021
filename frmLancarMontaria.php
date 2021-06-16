<?php
    include 'conexao.php'; 
    $pdo = Conexao::conectar(); 
  
    $sql = "Select * from competidor order by nome "; 
    $listaCompetidores = $pdo->query($sql); 

    $sql = "Select * from animal order by nome "; 
    $listaAnimais = $pdo->query($sql); 

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
   
    <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      
      </script> 
    

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
                    <input type="date" class="form-control" id="txtData" name="txtData">
					<label for="lblData">Informe a Data da Montaria</label>
                         
                </div>   
                        
            <!--       
                <div class="input-field col s8">
                    <label for="lblCompetidor">Informe o Competidor</label>
                    <input type="text" class="form-control" id="txtCompetidor" name="txtCompetidor">
                </div>   
            
                <div class="input-field col s8">
                    <label for="lblAnimal">Informe o Animal</label>
                    <input type="text" class="form-control" id="txtAnimal" name="txtAnimal">
                </div>  
            -->

                <div class="input-field col s12">
                <select id="txtCompetidor" name="txtCompetidor" class="<form-control">
                  <?php  // carregar lista no select option
					$i=0;
                    foreach ($listaCompetidores as $competidor){
                       if ($i==0) {?>
                        <option value="" disabled selected>Escolha um Competidor</option>
					     
					   <?php } else { ?>
                          <option value="<?php echo $competidor['id']; ?>"><?php echo $competidor['nome']; ?></option>
				    <?php
					   }
				     $i++;
                  }
                  ?>
                </select>
                </div>

                <div class="input-field col s12">
                <select id="txtAnimal" name="txtAnimal" class="<form-control">
                  <?php  // carregar lista no select option
					$i=0;
                    foreach ($listaAnimais as $animal){
                       if ($i==0) {?>
                        <option value="" disabled selected>Escolha um Animal</option>
					     
					   <?php } else { ?>
                          <option value="<?php echo $animal['id']; ?>"><?php echo $animal['nome']; ?></option>
				    <?php
					   }
				     $i++;
                  }
                  ?>
                </select>
                </div>

                <div class="input-field col s5">
                    <label for="lblNtComp">Informe a Nota do Competidor</label>
                    <input type="number" class="form-control" id="txtNtComp" name="txtNtComp"  onblur="calcular()">
                </div>  

                <div class="input-field col s5">
                    <label for="lblNtAnm">Informe a Nota do Animal</label>
                    <input type="number" class="form-control" id="txtNtAnm" name="txtNtAnm" onblur="calcular()">
                </div>  

                <div class="input-field col s12">
                        <label for="lblNotaFinal"><b>Nota Final: </b>  <label id="total"></label> </label>
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



<script>
function calcular(){

    var valor1 = parseInt(document.getElementById('txtNtComp').value, 10);
    var valor2 = parseInt(document.getElementById('txtNtAnm').value, 10);
    var nota = valor1+valor2; 
    if (isNaN(nota)) 
        nota = 0;
  
    document.getElementById("total").innerHTML = nota.toFixed(2); 

    //document.getElementById('result').value = result;
}
</script>

<script>
         $(document).ready(function() {
            $('select').material_select();
         });
 </script>