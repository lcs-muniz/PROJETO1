<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\ClienteModel;

class ClienteController extends Controller
{
    public function create(){
        return view('Cliente.create');
    }

    public function store(Request $request){
        $status = ClienteModel::salvar($request);
        
        if($status){
            return redirect()->back()->with('mensagem','Cliente cadastrado com sucesso!');
        }
        else{
            return redirect()->back()->with('mensagem','Erro ao cadastrar o cliente. Tente novamente!');
        }
    }

    public function index(){
        $clientes = ClienteModel::listar();
        return view('Cliente.index', compact('clientes'));
    }

    public function destroy($id){
        $status = ClienteModel::deletar($id);
        if($status){
            return redirect('listarCliente')->with('mensagem', 'Cliente deletado com sucesso!');
        }
        else{
            return redirect('listarCliente')->with('mensagem', 'Cliente não encontrado.');
        }    
    }
}
