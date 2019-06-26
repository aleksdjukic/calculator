<?php
include "includes/config.php";

$sql = new Calculator();
if(isset($_POST['param1'])){

   $prvi = $_POST['param1'];
   $drugi = $_POST['param2'];
   $operacija = $_POST['param3'];

   $rezultat = $prvi*$drugi;

   $rez = $sql->query("INSERT INTO rezultati(id, factor1, factor2, operation, result) VALUES(null, :prvi, :drugi, :operacija, :rezultat)");

    $sql->bind(':prvi', $prvi, PDO::PARAM_INT);
    $sql->bind(':drugi', $drugi, PDO::PARAM_INT);
    $sql->bind(':operacija', $operacija, PDO::PARAM_STR);
    $sql->bind(':rezultat', $rezultat, PDO::PARAM_INT);

    $rez = $sql->execute();

    echo $rezultat;
}
?>