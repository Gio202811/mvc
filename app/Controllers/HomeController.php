<?php

namespace App\Controllers;

use App\Models\contact;

class HomeController extends Controller
{
    public function index()
    {

        $contactmodel = new Contact();

        return $contactmodel->all();

        return $this->view('home', [
            'title' => 'Home',
            'description' => 'Esta es la página home'
        ]);
    }
}