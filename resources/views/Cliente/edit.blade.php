<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Cor de fundo clara */
        }
        .container {
            margin-top: 50px; /* Margem superior */
        }
        .form-title {
            margin-bottom: 30px; /* Margem inferior para o título */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="form-title text-center">Editar Cliente</h1>
        <form action="{{ url('editarCliente/' . $cliente->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $cliente->cpf }}" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $cliente->telefone }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $cliente->email }}" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Atualizar</button>
        </form>
    </div>
</body>
</html>
