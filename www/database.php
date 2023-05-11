

//le code est fonctionnelle. voir mon profil linkedin
<?php
define('HOST','localhost' );
define('db_name','clients');
define('root','root');
define('PASS','');
// Voici le code de connection qui permet de se connecter à la base de donnée
try {
    $db = new PDO("mysql:host="  .HOST. ";dbname=".db_name, root,PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté > OK !";
} catch (PDOException $e) {
    echo $e;
}
?>