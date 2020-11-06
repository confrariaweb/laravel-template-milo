<?php

namespace ConfrariaWeb\TemplateMilo\Controllers;

use App\Http\Controllers\Controller;

class TemplateMiloController extends Controller
{
    protected $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function home(){
        return [

        ];
    }

}
