<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Customer Accounts',

            'customers' => [
                [
                    'name' => 'Allison See',
                    'email' => 'allisongrace@gmail.com',
                    'phone' => '09171234567'
                ],
                [
                    'name' => 'April Naza',
                    'email' => 'aprilnaza@gmail.com',
                    'phone' => '09181234567'
                ],
                [
                    'name' => 'Kate Dandasan',
                    'email' => 'katedandasan@gmail.com',
                    'phone' => '09191234567'
                ],
                [
                    'name' => 'Erin Ramo',
                    'email' => 'erinramo@gmail.com',
                    'phone' => '09201234567'
                ],
                [
                    'name' => 'Ivan Pernia',
                    'email' => 'ivanpernia@gmail.com',
                    'phone' => '09211234567'
                ]
            ]
        ];

        return view('partials/header', $data)
            . view('customers', $data)
            . view('partials/footer');
    }
}