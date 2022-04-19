<?php
require_once('database_oo.php');
class Technician {    
    public static function getFullName($technician) {
        $fullName = $technician['firstName'] . " " . $technician['lastName'];
        return $fullName;
    }
}
