<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'POS System Home'
        ];

        return view('partials/header', $data)
            . view('index')
            . view('partials/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About the POS System'
        ];

        return view('partials/header', $data)
            . view('about')
            . view('partials/footer');
    }
}