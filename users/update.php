<?php
require 'users/db.php';

$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id'];
$name = $data['name'];
$email = $data['email'];
$role = $data['role'];
$status = $data['status'];

$stmt = $pdo->prepare("UPDATE users SET name=?, email=?, role=?, status=? WHERE id=?");
$stmt->execute([$name, $email, $role, $status, $id]);

echo json_encode(['status' => 'updated']);
