<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class LdapController extends BaseController
{
    function data()
    {
        $data = array(
            'nome'      =>  'emanoely',
            'email'     =>  'emanoely.santos@rmcursosmedicos.com.br',
            'setor'     =>  'suporte',
            'Empresa'   =>  'rmed',
        );
        return response()->json(json_encode($data));
    }
}
