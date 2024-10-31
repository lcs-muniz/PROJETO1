<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Listagem de Clientes</title>
    <style>
        /* Estilo opcional para a tabela */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Listagem de Clientes</h1>
    <input type="text" id="filtroClientes" placeholder="Filtrar clientes..." onkeyup="filtrarClientes()">

    <table id="tabelaClientes">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->cpf }}</td>
                <td>{{ $cliente->telefone }}</td>
                <td>{{ $cliente->email }}</td>
                <td>
                    <form action="deletarCliente/{{ $cliente->id }}" method="POST" onsubmit="return confirm('TEM CERTEZA?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
                <td>
                    <a href="editarCliente/{{$cliente->id}}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Vinculando o arquivo JavaScript -->
    <script src="{{ asset('js/filtroClientes.js') }}"></script>
</body>
</html>
