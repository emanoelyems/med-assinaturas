<?php

use Adldap\Laravel\Facades\Adldap;

use Illuminate\Routing\Controller as BaseController;


class LdapController extends BaseController
{

    protected $ldap;

    public function __construct()
    {
        $this->ldap = Adldap::getFacadeRoot();
    }

    public function testarLdap()
    {
       
        try {
            $usuarios = $this->buscarUsuarios();
            return view('testar-ldap', ['usuarios' => $usuarios]);
        } catch (\Exception $e) {
            Log::error('Erro no teste LDAP: ' . $e->getMessage());
            return view('testar-ldap', ['error' => 'Erro ao testar a conexão LDAP']);
        }
    }

    protected function buscarUsuarios()
    {
        $search = $this->ldap->search();
        $result = $search->whereNotNull('cn')->get(['cn']);

        $usuarios = [];

        foreach ($result as $entry) {
            $usuarios[] = $entry->getAttribute('cn')[0];
        }

        return $usuarios;
    }
}
