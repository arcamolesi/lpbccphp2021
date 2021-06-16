<?php  
    include 'conexao.php'; 
  
    $data = trim($_POST['txtData']); 
    $competidorID = trim ($_POST['txtCompetidor']); 
    $animalID = trim($_POST['txtAnimal']);
    $ntCompetidor = trim($_POST['txtNtComp']); 
    $ntAnimal = trim($_POST['txtNtAnm']);
    $nota = floatval($ntCompetidor) + floatval($ntAnimal); 

    if (!empty($competidorID) && !empty($animalID) && !empty($nota)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       //lancamento de montaria na tabela montaria
       $sql = "INSERT INTO montaria (data, animal, competidor, notacompetidor, notaanimal) VALUES (?, ?, ?, ?, ?);"; 
       $query = $pdo->prepare($sql); 
       $query->execute(array($data, $animalID, $competidorID, $ntAnimal, $ntCompetidor)); 

       //atualização da tabela Competidor
       $sql = "SELECT * FROM competidor WHERE id=?;";
       $query = $pdo->prepare($sql); 
       $query->execute(array($competidorID));
       $competidor = $query->fetch(PDO::FETCH_ASSOC);

      
       $novaNota = $competidor['somanota'] + $nota; 

       $sql = "UPDATE competidor SET somanota=? WHERE id=?"; 
       $query = $pdo->prepare($sql); 
       $query->execute (array($novaNota, $competidorID)); 

       /* simulando uma atualização de estoque do tipo venda
       if ($nota <= $competidor['somanota']){

         $novaNota = $competidor['somanota'] - $nota; 

         $sql = "UPDATE competidor SET somanota=? WHERE id=?"; 
         $query = $pdo->prepare($sql); 
         $query->execute (array($novaNota, $competidorID)); 
  
       } */ 

       Conexao::desconectar(); 
    }
   header("location: frmLancarMontaria.php"); 
?>