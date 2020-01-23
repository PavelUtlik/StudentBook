<?php

class IndexModel extends Model {

    public function getAllRecords()
    {
        $students = parent::$db->query('SELECT * from students ORDER BY surname');
        return $students;

    }
}