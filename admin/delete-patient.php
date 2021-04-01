<?php
include("includes/DbConn.php");
include("includes/Pacienti.php");
global $patient, $db;

//if($patient->delete_patient()){
//    $sql = "ALTER TABLE product AUTO_INCREMENT =1;";
//    $db->query($sql);
//}
$patient->delete_patient();
?>



