<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteModel extends Model
{
    use HasFactory;

    protected $table = 'clientes'; // Definindo a tabela associada

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'email',
    ];

    public static function salvar(Request $request)
    {
        $cliente = self::create($request->all()); // Usando o método create do Eloquent
        return $cliente ? true : false; // Retorna true se criado com sucesso
    }

    public static function listar()
    {
        return self::all(); // Retorna todos os registros
    }

    public static function deletar($id)
    {
        return self::where('id', $id)->delete(); // Deleta o cliente com o ID especificado
    }
    
    public static function consultar($id){
        $cliente = DB::table('cliente')->where('id')->first();
        return $cliente;
    }

}
