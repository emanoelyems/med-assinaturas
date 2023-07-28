<?php
return [
    'default' => [
        'auto_connect' => env('ADLDAP_AUTO_CONNECT', true),
        'connection' => Adldap\Connections\Ldap::class,
        'settings' => [
            'schema' => Adldap\Schemas\ActiveDirectory::class,
            'account_prefix' => 'MEDBARRA',
            'account_suffix' => '@gatech.edu', // Substitua pelo seu domínio do AD
            'hosts' => ['thanos.medbarra.com.br'], // Adicione os controladores de domínio do AD
            'port' => 389, // A porta padrão do AD é 389, mas pode variar de acordo com a configuração do seu ambiente
            'timeout' => 5,
            'base_dn' => 'dc=thanos.medbarra.com.br', // Substitua pelo DN do seu domínio
            'username' => 'powerbi', // Substitua pelo nome de usuário com privilégios de busca no AD
            'password' => '!Q@W#E4r5t6y', // Substitua pela senha do usuário administrador do AD
            'follow_referrals' => false,
        ],
    ],
];

$config = array(
    'account_suffix' => "@gatech.edu",

    'domain_controllers' => array("whitepages.gatech.edu"),

    'base_dn' => 'dc=whitepages,dc=gatech,dc=edu',

    'admin_username' => '',

    'admin_password' => '',
);

$ad = new Adldap($config);