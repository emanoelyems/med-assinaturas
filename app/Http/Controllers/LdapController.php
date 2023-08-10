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



        //Ignora o Request para que o dado seja exibido mesmo sendo Null
        // $email  = $request->except(['mail']);

        // if ($request->filled(['mail'])){
            //Trata o dado retirando o que estiver antes de '@' e depois '.' deixando apenas o nome da Empresa
            $email = $results['mail'][0];
            $parts = explode('@', $email);
            if (count($parts) === 2) {
                $domain = $parts[1];
                $domainParts = explode('.', $domain);

                if (count($domainParts) > 1) {
                    $company = $domainParts[0];
                }
            }
        // }

        //Ignora o Request para que o dado seja exibido mesmo sendo Null
        // $local  = $request->except(['physicaldeliveryofficename']);

        // if ($request->filled(['physicaldeliveryofficename'])){
            //Trata o dado retirando o que estiver antes de ']' deixando apenas o nome da Filial
            $filial = $results['physicaldeliveryofficename'][0];

            $parts = explode(']', $filial);
            if (count($parts) > 1) {
                $local = trim($parts[1]);
            }
        // }
        


        //Ignora o Request para que o dado seja exibido mesmo sendo Null
        // $setor  = $request->except(['department']);

            // if ($request->filled(['department'])){
            //Trata o dado retirando o que estiver antes de ']' deixando apenas o nome do Setor
            $department = $results['department'][0];

            $parts = explode(']', $department);
            if (count($parts) > 1) {
                $setor = trim($parts[1]);
            }
        // }
       

        $userAd =
        ['mail'         => $results['mail'][0],
         'fullname'     => $results['displayname'][0],
         'filial'       => $local,
         'department'   => $setor,
         'company'      => $company,
    ];
    



        return view('form',['userAd'=>$userAd]);

        // dd($results);

        
    }

        // function showForm(){

        //     return view('/form');
        // }
    
        // function sendForm(Request $request){
    
        //     $formUser = $resquest->all();
        
        //     // return redirect()->route('/form', ['formUser '=>$formUser]);
        //     dd($formUser);
        //     }

        // function showOption( Request $request){

        //     $option1 = $request->input('flexRadioDefault2');
        //     $option2 = $request->input('flexRadioDefault1');

        //     $showDiv = false;

        //     if ($option2){
        //         $showDiv = true;
        //     }
        //     return view('/form', ['showDiv'=>$showDiv]);
        //     // dd($showDiv);
        // }
}
