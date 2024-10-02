<?php

require 'Banco.php';
require 'Cliente.php';

$Banco = new Banco();
$conexao = $Banco->getConexao();


$cliente = new Cliente($conexao);
$stmt = $cliente->read($conexao);
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Lista de Clientes </title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Lista de Clientes</h2>
        <table class="mt-5 table" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <?php foreach ($clientes as $cliente) { ?>
                <tbody></tbody>
                <tr>
                    <th scope="row">
                        <?php echo $cliente['id']; ?>
                    </th>
                    <td>
                        <?php echo $cliente['nome']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['telefone']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['email']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['cpf']; ?>
                    </td>
                    <td>
                        <a href="form_atualizaCliente.php?id=<?php echo $cliente['id']; ?>">Editar</a>
                        <a href="deletaCliente.php?id=<?php echo $cliente['id']; ?>">Deletar</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <div class="text-center mt-5">
            <a class="btn btn-primary" href="form_cadastroCliente.php">Cadastrar Novo Cliente</a>
        </div>
    </div>
</body>

</html>