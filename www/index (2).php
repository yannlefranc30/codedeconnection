<?php
define('HOST','localhost' );
define('db_name','dbs10845941');
define('root','dbu1442449');
define('PASS',' ');
// Voici le code de connection qui permet de se connecter à la base de donnée
try {
    $db = new PDO("mysql:host="  .HOST. ";dbname=".db_name, root,PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté > OK !";
} catch (PDOException $e) {
    echo $e;
}
?>