<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../db.php';

$stmt = $pdo->query("SELECT id, name, email, role, status, created_at FROM users ORDER BY id DESC");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($users);
