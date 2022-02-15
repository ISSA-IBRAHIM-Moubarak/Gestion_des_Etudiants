<?php
    function getConnexion()
    {
        // On se connecte à Mysql
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'tr2';
        // On se connecte à la base de donnees
        $connexion=null;
        $connexion= mysqli_connect($host, $user, $password, $dbname);
    
        return $connexion;
    }

    function executeSQL($sql)
    {
        // On  execute les requetes SQL
        $exec = mysqli_query(getConnexion(), $sql);
        
        return $exec;
    }
?>