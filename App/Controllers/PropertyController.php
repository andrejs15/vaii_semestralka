<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class PropertyController extends BaseController
{
    public function index(Request $request): Response{
        return $this->redirect('?c=home&a=index');
    }

    public function create(Request $request): Response{
        return $this->html();
    }
}