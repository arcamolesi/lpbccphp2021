<?php  
    include 'conexao.php'; 
  
    $data = trim($_POST['txtData']); 
    $competidor = trim ($_POST['txtCompetidor']); 
    $animal = trim($_POST['txtAnimal']);
    $ntCompetidor = trim($_POST['txtNtComp']); 
    $ntAnimal = trim($_POST['txtNtAnm']);
   // $nota = $ntCompetidor + $ntAnimal; 

    if (!empty($competidor) && !empty($animal) && !empty($nota)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       //lancamento de montaria na tabela montaria
       $sql = "INSERT INTO montaria (data, animal, competidor, notacompetidor, notaanimal) VALUES (?, ?, ?, ?, ?);"; 
       $query = $pdo->prepare($sql); 
       $query->execute(array($data, $animal, $competidor, $ntAnimal, $ntCompetidor)); 

       //atualização da tabela Competidor


       Conexao::desconectar(); 
    }
   header("location: frmLancarMontaria.php"); 
?>