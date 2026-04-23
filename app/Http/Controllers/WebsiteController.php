<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Suport\Facades\Hash

class WebsiteController extends Controller
{
    //Listar todos os usuários
    public function home()
    {
        $produtos = Produto::get();
        return view("home",compact("produtos"));
    }

    public function produto()
    {
        return view("produto");
    }

    public function catalogo()
    {
        $produtos = Produto::get();
        return view("catalogo",compact("produtos"));
    }
    public function carrinho()
    {
        return view("carrinho");
    }
    public function cadastro()
    {
        return view("cadastro");
    }
    public function checkout()
    {
        return view("checkout");
    }
    public function contato()
    {
        return view("contato");
    }
    public function index()
    {
        return view("index");
    }
    public function termos()
    {
        return view("termos");
    }

    public function cadastroCliente(Request $request)
    {
        if ($request->input('senha') != $request->input('confirmar_senha')){
            return view("cadastro")['error'->'Erro: As senhas não coincidem.'];
        }
        $cl = new Cliente();
        $cl->nome = $request->input('nome');
        $cl->email = $request->input('email');
        $cl->senha = Hash::make($request->input('senha'));
        $cl->save();
        return view("cadastro");
    }
    public function logarCliente(Request $request)
    {
        if 
    }
}
?>