<?php

namespace Acme\Controllers;

use Acme\Storage\Storage;
use Illuminate\Http\Request;

class StoreController
{
    private $request;

    public function __construct()
    {
        $this->request =  Request::capture();
        $this->storage = new Storage();
    }

    public function get()
    {
        if ($this->request->has('group')) {
                $group = $this->request->get('group');
                $data = $this->storage->get('group-'.$group);
                echo $data;
                return;
        } else {
            var_dump('não existe ?group={x} no url');
            return;
        }
    }

    public function save()
    {
        if ($this->request->method() == 'POST') {
            if ($this->request->has('group')) {
                $group = $this->request->get('group');
            } else {
                var_dump('não existe ?group={x} no url');
                return;
            }
            var_dump('post');
            var_dump($this->request->all());
            $this->storage->save('group-'.$group, json_encode($this->request->only(['temperature', 'humidity'])));
            var_dump('guardade');
            die();
            return;
        }
        
        return header('Location: /');
    }
}
