<?php


require_once '../conn.php';

$document = $_POST['document'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pis = $_POST['pis'];
$voter_registration = $_POST['voter_registration'];
$ctps = $_POST['ctps'];
$bank = $_POST['bank'];

$clean_document = preg_replace('/[^0-9]/', '', $document);

$stmt = $conn->prepare("INSERT INTO persons (document, name, address, phone, email, pis, voter_registration, ctps, bank) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([$clean_document, $name, $address, $phone, $email, $pis, $voter_registration, $ctps, $bank]);

echo "Funcionário cadastrado com sucesso";
$conn = null;
