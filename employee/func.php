<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro de funcionários</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Formulario de cadastro de funcionários</h1>
    <form name="register" action="cadastrarF.php" method="POST">
        <div class="form-group">
            <label for="person_cpf">CPF</label>
            <input type="text" id="person_cpf" name="person_cpf" required>
        </div>

        <div class="form-group">
            <label for="department">Departamento</label>
            <input type="text" id="department" name="department" required>
        </div>

        <div class="form-group">
            <label for="role">Função</label>
            <input type="text" id="role" name="role" required>
        </div>

        <div class="form-group">
            <label for="salary">Salario</label>
            <input type="number" id="salary" name="salary" required>
        </div>

        <div class="form-group">
            <label for="assignment">Lotação</label>
            <input type="text" id="assignment" name="assignment">
        </div>

        <div class="form-group">
            <label for="contract_type">Tipo de contratação</label>
            <input type="text" id="contract_type" name="contract_type" required>
        </div>

        <div class="form-group">
            <label for="hire_date">Data de contratação</label>
            <input type="date" id="hire_date" name="hire_date" required>
        </div>

        <div class="form-group">
            <label for="termination_date">Data de encerramento</label>
            <input type="date" id="termination_date" name="termination_date">
        </div>

        <div class="form-group">
            <label for="company_cnpj">CNPJ da empresa</label>
            <input type="text" id="company_cnpj" name="company_cnpj">
        </div>

        <div class="button-container">
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</body>

</html>