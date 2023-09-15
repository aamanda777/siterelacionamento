<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    use RegistersUsers; // Use a classe RegistersUsers

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('register');
    }

    protected function validator(array $data)
    {
        // Adicione suas regras de validação personalizadas aqui
    }

    protected function create(array $data)
    {
        // Lógica para criar um novo usuário
    }
}
