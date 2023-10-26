<?php
require('config.php');
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['num'];
$adress=$_POST['adress'];
$email=$_POST['email'];
$class=$_POST['class'];
                   
try {
$sql="INSERT INTO `teachers`( `Nom`, `Prenom`, `Tel`, `Adresse`, `Email`, `Class`) VALUES ('$nom','$prenom','$tel','$adress','$email','$class')";
$conn->exec($sql);
} catch(PDOException $e) {
//    echo "<br>" . $e->getMessage();
}
$conn = null;
header('Location: ./Teachers.php')
?>