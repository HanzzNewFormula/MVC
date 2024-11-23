<?php
require_once 'config/Database.php';
require_once 'controllers/BookController.php';

$database = new Database();
$db = $database->getConnection();

$controller = new BookController($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch($action) {
    case 'create':
        $controller->create();
        break;
    default:
        $controller->index();
        break;
}