<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de cadastro de pessoas</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Formulario de cadastro de pessoas</h1>
    <form name="register" action="cadastrarP.php" method="POST">
        <div class="form-group">
            <label for="document">CPF/CNPJ</label>
            <input type="text" id="document" name="document" required>
        </div>

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" required>
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

        <div class="form-group">
            <label for="pis">PIS</label>
            <input type="text" id="pis" name="pis">
        </div>

        <div class="form-group">
            <label for="voter_registration">Titulo de eleitor</label>
            <input type="text" id="voter_registration" name="voter_registration">
        </div>

        <div class="form-group">
            <label for="ctps">CTPS</label>
            <input type="text" id="ctps" name="ctps">
        </div>

        <div class="form-group">
            <label for="bank">Banco</label>
            <input type="text" id="bank" name="bank" required>
        </div>

        <div class="button-container">
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</body>

</html>