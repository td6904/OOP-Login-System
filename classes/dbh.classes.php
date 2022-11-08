<?php

//Started with controller!!!

class Dbh {

   protected function connect() {
    try {
        $username = 'td6904';
        $password = 'Vincentisnotthebest!964';
        $dbh = new \PDO('mysql:host=localhost;dbname=signuplogin2', $username, $password);

        return $dbh;
        
    }
   catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br>";
die();
   }
}

}