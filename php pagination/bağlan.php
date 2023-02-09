<?php
try {
$db = new PDO('mysql:host=localhost;dbname=sayfalama', 'root', '');
} catch (PDOException $e){
    echo $e->getMessage();
}

?>