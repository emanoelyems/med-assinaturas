<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LdapRecord\Container;
use LdapRecord\Connection;
use Illuminate\Routing\Controller;
use LdapRecord\Models\ActiveDirectory\OrganizationalUnit;
use LdapRecord\Models\Entry;



class LdapController extends Controller
{

    private $connection;
    // public function FunctionName()
    // {
        
    //             // Realiza a busca das OUs
    //             $ous = OrganizationalUnit::query()->get();
    
    //             $resultado = [];
    //             foreach ($ous as $ou) {
    //                 $resultado[] = $ou->getName();
    //             }
    
    //             dd($resultado);
        
    // }

    public function __construct()
    {
        $connection = new Connection([
            'hosts' => [env('LDAP_HOST',false)],
            'port' => env('LDAP_PORT',false),
            'base_dn' => env('LDAP_BASE_DN',false),
            'username' => env('LDAP_USERNAME',false),
            'password' => env('LDAP_PASSWORD',false),
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

        if (isset($request->login)) {
            $results = $connection->query()->where('samaccountname', 'starts_with', $name)->first();
        }


        //O dado é exibido mesmo sendo Null
        $mail       = '';
        $fullname   = isset($results['displayname'][0]) ? $results['displayname'][0] : '';
        $setor      = '';
        $company    = '';
        $local      = '';

        //Trata o dado retirando o que estiver antes de '@' e depois '.' deixando apenas o nome da Empresa
        if (isset($results['mail'][0])) {
            $mail = $results['mail'][0];
            $parts = explode('@', $mail);
            if (count($parts) === 2) {
                $domain = $parts[1];
                $domainParts = explode('.', $domain);

                if (count($domainParts) > 1) {
                    $company = $domainParts[0];
                }
            }
        };

        //Trata o dado retirando o que estiver antes de ']' deixando apenas o nome da Filial
        if (isset($results['physicaldeliveryofficename'][0])) {
            $filial = $results['physicaldeliveryofficename'][0];
            $parts = explode(']', $filial);
            if (count($parts) > 1) {
                $local = trim($parts[1]);
            }
        };
        //Trata o dado retirando o que estiver antes de ']' deixando apenas o nome do Setor
        if (isset($results['department'][0])) {
            $department = $results['department'][0];
            $parts = explode(']', $department);
            if (count($parts) > 1) {
                $setor = trim($parts[1]);
            }
        };

        $userAd =
            [
                'mail'         => $mail,
                'fullname'     => $fullname,
                'filial'       => $local,
                'department'   => $setor,
                'company'      => $company,
            ];

        return view('form', ['userAd' => $userAd]);

        // dd($userAd);


    }

}
