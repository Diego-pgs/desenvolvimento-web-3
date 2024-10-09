<?php

    require 'Banco.php';
    require 'Cliente.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();
    $cliente = new Cliente($conexao);

    $cliente->setId($_GET['id']);
    $stmt = $cliente->consultar();
    $clienteSelecionado = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Atualizar Cliente</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center"> Atualizar Cliente </h2>

        <form method="POST" action="atualizaCliente.php">
            <input type="hidden" name="id" value="<?php echo $clienteSelecionado['id']; ?>">

            <div class="mt-5 mb-3 row justify-content-center">
                <div class="col-md-6">
                    <label for="nome" class="form-label"> Nome </label>
                    <input type="text" class="form-control" name="nome" value="<?php echo $clienteSelecionado['nome']; ?>">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <div class="col-md-6">
                    <label for="email" class="form-label"> Email </label>
                    <input type="email" class="form-control" name="email" value="<?php echo $clienteSelecionado['email']; ?>">
                </div>
            </div>
            <div class="mb-3 row justify-content-center">
                <div class="col-md-3">
                    <label for="telefone" class="form-label"> Telefone </label>
                    <input type="text" class="form-control" name="telefone" value="<?php echo $clienteSelecionado['telefone']; ?> ">
                </div>
                <div class="col-md-3">
                    <label for="cpf" class="form-label"> CPF </label>
                    <input type="text" class="form-control" name="cpf" value="<?php echo $clienteSelecionado['cpf']; ?>">
                </div>
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary"> Atualizar </button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>