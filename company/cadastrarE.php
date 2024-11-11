<?php


require_once '../conn.php';

$cnpj = $_POST['cnpj'];
$ie = $_POST['ie'];
$corporate_name = $_POST['corporate_name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$clean_cnpj = preg_replace('/[^0-9]/', '', $cnpj);

$stmt = $conn->prepare("INSERT INTO companies (cnpj, ie, corporate_name, address, phone, email) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->execute([$clean_cnpj, $ie, $corporate_name, $address, $phone, $email]);

echo "Empresa cadastrada com sucesso";
$conn = null;

