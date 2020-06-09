<?php

try {
    // database Configuration
    $servername = 'mysql';
    $port = 3306;
    $db   = getenv('MYSQL_DATABASE');
    $username = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');

    global $conn;
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$db;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print 'Successful database connection!<br/>';

    $sql =  'SELECT * FROM label';


    $labels = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    var_dump($labels);




} catch(PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>
