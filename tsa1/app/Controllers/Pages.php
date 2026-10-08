<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function about()
    {
        $data = [
            'title' => 'About'
        ];

        return view('partials/header', $data)
            . view('about')
            . view('partials/footer');
    }
}