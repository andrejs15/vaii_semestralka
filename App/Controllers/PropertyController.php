<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;
use App\Models\Property;

class PropertyController extends BaseController
{
    public function index(Request $request): Response{
        return $this->redirect('?c=home&a=index');
    }

    public function create(Request $request): Response{
        return $this->html();
    }

    public function show (Request $request): Response{
        $id = $request->value('id');
        $property = Property::getOne($id);
        if ($property === null) {
            return $this->redirect($this->url('home.index'));
        }
        return $this->html(['property' => $property]);
    }

    public function store (Request $request): Response {
        if (!$request->isPost()) {
            return $this->redirect($this->url('property.create'));
        }

        $property = new Property();
        $property->setFromRequest($request);
        $property->save();
        return $this->redirect($this->url('home.index'));
    }

    public function edit (Request $request): Response {
        $id = $request->value('id');
        $property = Property::getOne($id);
        if ($property === null) {
            return $this->redirect($this->url('home.index'));
        }
        return $this->html(['property' => $property]);
    }

    public function update (Request $request): Response {
        if (!$request->isPost()) {
            return $this->redirect($this->url('home.index'));
        }
        $id = $request->value('id');
        $property = Property::getOne($id);
        if ($property === null) {
            return $this->redirect($this->url('home.index'));
        }

        $property->setFromRequest($request);
        $property->save();
        return $this->redirect($this->url('home.index'));
    }

    public function delete (Request $request): Response {
        if (!$request->isPost()) {
            return $this->redirect($this->url('home.index'));
        }

        $id = $request->value('id');
        $property = Property::getOne($id);
        if ($property === null) {
            return $this->redirect($this->url('home.index'));
        }

        $property->delete();
        return $this->redirect($this->url('home.index'));

    }
}