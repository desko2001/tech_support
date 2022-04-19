<?php
require('../model/database_oo.php');
require('../model/incident_db.php');
require('../model/technician_db.php');
session_start();

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'unassigned_incidents';
}

switch($action) {
    case 'unassigned_incidents':
        $incidents = get_incidents_unassigned();
        include('unassigned_incidents.php');
        break;
    case 'assigned_incidents':
        $incidents = get_incidents_assigned();
        include('assigned_incidents.php');
        break;
}
?>