
<?php
// Affiche le nom d'utilisateur qui fait tourner le processus php/http
// (sur un système ayant "whoami" dans le chemin d'exécutables)
$a = file_get_contents('index.php');
var_dump($a);
//echo exec('whoami');
?>
