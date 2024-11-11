<?php

require_once '../conn.php';

$person_cpf = $_POST['person_cpf'];
$department = $_POST['department'];
$role = $_POST['role'];
$salary = $_POST['salary'];
$assignment = $_POST['assignment'];
$contract_type = $_POST['contract_type'];
$hire_date = $_POST['hire_date'];
$termination_date = $_POST['termination_date'];
$company_cnpj = $_POST['company_cnpj'];

$clean_cpf = preg_replace('/[^0-9]/', '', $person_cpf);
$clean_cnpj = preg_replace('/[^0-9]/', '', $company_cnpj);

$stmt = $conn->prepare("INSERT INTO employees (person_cpf, department, role, salary, assignment, contract_type, hire_date, termination_date, company_cnpj) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([$clean_cpf, $department, $role, $salary, $assignment, $contract_type, $hire_date, $termination_date, $clean_cnpj]);

echo "Funcionário cadastrado com sucesso";
$conn = null;
