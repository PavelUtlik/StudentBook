<?php

class Model {
    protected static $db = null;

    public function __construct ()
    {
        self::$db = DB::connToDB ();
    }
}