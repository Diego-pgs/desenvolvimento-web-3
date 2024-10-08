<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5 ">
        <h2 class="text-center"> Cadastro de Cliente </h2>
        <form action="cadastroCliente.php" method="POST">
            <div class="mt-5 mb-3 row justify-content-center">
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome * </label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email * </label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <div class="col-md-3">
                    <label for="cpf" class="form-label">CPF * </label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                </div>
                <div class="col-md-3">
                    <label for="telefone" class="form-label">Telefone * </label>
                    <input type="text" class="form-control" id="telefone" name="telefone" required>
                </div>
            </div>
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>