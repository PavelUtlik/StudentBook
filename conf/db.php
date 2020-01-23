<?php

//DB configurations

class DB{

    const USER = "root";
    const PASS = "";
    const HOST = "studentbook.by";
    const DB = "school";

    public static function connToDB() :PDO {

        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;

        try {
            $connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        }

        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        return $connection;

    }


}