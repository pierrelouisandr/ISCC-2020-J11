<?php 
      function connect_to_database(){
     $servername = 'localhost';
     $username = 'root';
     $password= '';
     $madatabase = 'basetest01';


try { 
    $pdo = new PDO("mysql:host=$servername;dbname=$madatabase",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully"; 
return $pdo;
}

catch (PDOException $e){
    echo "connection failled : ".$e->getMessage();
}
}
$pdo = connect_to_database();

$users = $pdo->query ("INSERT INTO `produit` VALUES ('8', 'T-shirt noir', 'T-shirt coton de couleur noire','15.50','10');");
?>
