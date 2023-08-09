<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LdapRecord\Container;
use LdapRecord\Connection;
use Illuminate\Routing\Controller;
use LdapRecord\Models\Entry;



class LdapController extends Controller
{

    private $connection;

    public function __construct()
    {
        $connection = new Connection([
            'hosts' => ['10.47.103.7'],
            'port' => 389,
            'base_dn' => 'OU=Medgrupo,DC=medbarra,DC=com,DC=br',
            'username' => 'assinaturas@medbarra.com.br',
            'password' => '!Q@W#E4r5t6y',
        ]);

        // Add the connection into the container:
        Container::addConnection($connection);

        $this->connection = $connection;
    }

    function userSearch(Request $request)
    {
    
        $name = $request->login;
        $connection = $this->connection;

        // Get all objects:
        // $objects = Entry::get();

        $results = $connection->query()->where('samaccountname', 'starts_with', $name)->first();

      

        $email = $results['mail'][0];
        $parts = explode('@', $email);
        if (count($parts) === 2) {
            $domain = $parts[1];
            $domainParts = explode('.', $domain);

            if (count($domainParts) > 1) {
                $company = $domainParts[0];
            }
        }

        $department = $results['department'][0];

        $parts = explode(']', $department);
        if (count($parts) > 1) {
            $setor = trim($parts[1]);
        }

       
        // $setor = '[TI]INFRA E SUPORTE';
        // function extrairConteudo($texto) {
        //     $posicaoAbertura = strpos($texto, '[');
        //     $posicaoFechamento = strpos($texto, ']', $posicaoAbertura);
        
        //     if ($posicaoAbertura !== false && $posicaoFechamento !== false) {
        //         return substr($texto, $posicaoFechamento + 1);
        //     } else {
        //         dd($texto);
        //     }
        // }
       
        // $saida = extrairConteudo($setor);
        

        $userAd =
        ['mail'         => $results['mail'][0],
         'fullname'     => $results['displayname'][0],
         'department'   => $setor,
         'company'      => $company,
    ];

        return view('/form',['userAd'=>$userAd]);
        
        // echo $saida; // Saída: "SUPORTE"

        // dd($results);

        // function showForm(){

        //     return view('form');
        // }
    
        // function sendForm(Request $request){
    
        //     $formUser = $resquest->get();
        
        //     // return redirect()->route('/form', ['formUser '=>$formUser]);
        //     dd($formUser);
        //     }

        
    }
}
