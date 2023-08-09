<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LdapRecord\Container;
use LdapRecord\Connection;
use Illuminate\Routing\Controller;
use LdapRecord\Models\Entry;



class teste2Controller extends Controller
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

    function teste99(Request $request)
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

        $userAd =
        ['mail'         => $results['mail'][0],
         'fullname'     => $results['displayname'][0],
         'department'   => $results['department'][0],
         'company'      => $company,
    ];

        return view('/form',['userAd'=>$userAd]);


        // dd($objects, $results);
        // Get a single object:

    }
}
