<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Adldap\Laravel\Facades\Adldap;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

class UserController extends Controller
{
    public function getUsersFromAD()
    {
        // Realiza a busca de todos os usuários no AD
        $users = Adldap::orderBy('name', 'ASC')->get();

        // Faça algo com a lista de usuários, por exemplo, retornar uma view
        // return view('user', compact('users'));
        dd($users);
    }
}

// class UserController extends Controller
// {
//     public function getUserByLogin($login)
//     {
//         // Realiza a busca do usuário no AD pelo login
//         $user = Adldap::get()->users()->where('samaccountname', '=', $login)->first();

//         if ($user) {
//             // O usuário foi encontrado, faça algo com as informações dele
//             return view('user.index', compact('user'));
//         } else {
//             // O usuário não foi encontrado, retorne uma mensagem de erro ou redirecione para uma página adequada
//             return redirect()->route('user.index')->with('error', 'Usuário não encontrado no AD.');
//         }
//         dd($login);
//     }
// }