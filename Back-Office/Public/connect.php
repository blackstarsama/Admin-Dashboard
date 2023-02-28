<?php
try
  {
	  $bdd = new PDO('mysql:host=localhost;dbname=backoffice', 'root', '');
    $db->exec('SET NAMES "UTF8"');
  }
  catch (Exception $e)
  {
    echo 'Erreur : '. $e->getMessage();
	  die();
  }
  
?>