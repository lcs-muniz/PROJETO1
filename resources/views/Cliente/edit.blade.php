<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <form action= "{{ url('editarCliente/' . $cliente->id }}" method="POST">
        @csrf
        @method('PUT')
        Nome:
            <input type ="text" name="nome" value ="{{ $cliente->nome }}">
        CPF:
            <input type ="text" name="cpf" value ="{{ $cliente->cpf }}">
        Telefone:
            <input type ="text" name="telefone" value ="{{ $cliente->telefone }}">
        Email:
            <input type ="text" name="email" value ="{{ $cliente->email }}">
        
        <button type="submit">Atualizar</button>

    </form>
</body>
</html>