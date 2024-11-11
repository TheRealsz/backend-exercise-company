<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro de empresas</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Formulario de cadastro de empresas</h1>
    <form name="register" action="cadastrarE.php" method="POST">
        <div class="form-group">
            <label for="cnpj">CNPJ</label>
            <input type="text" id="cnpj" name="cnpj" required>
        </div>

        <div class="form-group">
            <label for="ie">IE</label>
            <input type="text" id="ie" name="ie" required>
        </div>

        <div class="form-group">
            <label for="corporate_name">Razão social</label>
            <input type="text" id="corporate_name" name="corporate_name" required>
        </div>

        <div class="form-group">
            <label for="address">Endereco</label>
            <input type="text" id="address" name="address" required>
        </div>

        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="button-container">
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</body>

</html>