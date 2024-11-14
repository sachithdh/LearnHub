<?php


include __DIR__ . '/src/Framework/Database.php';
include __DIR__ . '/src/App/Config/AppConstants.php';

use App\Config\AppConstants;
use Framework\Database;


$db = new Database(AppConstants::DB_DRIVER, [
    'host' => AppConstants::DB_HOST,
    'port' => AppConstants::DB_PORT,
    'dbname' => AppConstants::DB_NAME,
], AppConstants::DB_USER, AppConstants::DB_PASS);

$sql_file = file_get_contents("./learnhub-database.sql");

$db->connection->query($sql_file);
