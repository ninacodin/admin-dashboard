<?php
require 'users/db.php';

$data = json_decode(file_get_contents("php://input"), true);
$name = $data['name'];
$email = $data['email'];
$password = password_hash($data['password'], PASSWORD_DEFAULT);
$role = $data['role'];

$stmt = $pdo->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
$stmt->execute([$name, $email, $password, $role]);

echo json_encode(['status' => 'success']);
