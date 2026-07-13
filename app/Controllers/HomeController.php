<?php

namespace App\Controllers;

use App\Models\contact;

class HomeController extends Controller
{
    public function index()
    {
        $contactmodel = new Contact();

        $contactmodel->delete(1);

        return "Eliminado";

        return $this->view('home', [
            'title' => 'Home',
            'description' => 'Esta es la página home'
        ]);
    }
}