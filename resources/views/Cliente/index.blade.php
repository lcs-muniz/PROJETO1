<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Listagem de Clientes</title>
    <style>
        body {
            background-color: #f8f9fa; 
            font-family: 'Roboto', sans-serif; 
        }
        tbody tr:nth-child(odd) {
            background-color: #e9ecef; 
        }
        tbody tr:nth-child(even) {
            background-color: #ffffff; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Listagem de Clientes</h1>
        <input type="text" id="filtroClientes" class="form-control mb-3" placeholder="Filtrar clientes..." onkeyup="filtrarClientes()">

        <table class="table table-striped table-bordered">
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
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                        </form>
                    </td>
                    <td>
                        <a href="editarCliente/{{$cliente->id}}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/filtroClientes.js') }}"></script>
</body>
</html>
