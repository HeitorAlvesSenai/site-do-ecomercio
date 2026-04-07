<?php

namespace App\Http\Controllers;
class WebsiteController extends Controller
{
    //Listar todos os usuários
    public function home()
    {
        $produtos = [
                [
                    'nome'=>'Tenis Urban',
                    'preco'=>'289.90',
                    'categoria'=>'Moda',
                    'image'=>'product1.jpg'
                ],
            ];
        return view("home", compact("produtos"));
    }
    public function catalogo()
    {
        $produtos = [
                [
                    'nome'=>'Tenis Urban',
                    'preco'=>'289.90',
                    'categoria'=>'Moda',
                    'image'=>'product1.jpg'
                ],
            ];
        return view("catalogo", compact("produtos"));
    }
}
?>