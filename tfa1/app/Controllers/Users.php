<?php

namespace App\Controllers;

// Controller for the User Accounts page
class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'User Accounts',

            // this holds an array for the sample records
            'users' => [
                [
                    'username' => 'allisongrace',
                    'name' => 'Allison See',
                    'role' => 'Administrator'
                ],
                [
                    'username' => 'aprilmika',
                    'name' => 'April Naza',
                    'role' => 'Cashier'
                ],
                [
                    'username' => 'kateangel',
                    'name' => 'Kate Dandasan',
                    'role' => 'Cashier'
                ],
                [
                    'username' => 'erinjames',
                    'name' => 'Erin Ramo',
                    'role' => 'Staff'
                ],
                [
                    'username' => 'ivanjoaquin',
                    'name' => 'Ivan Pernia',
                    'role' => 'Staff'
                ]
            ]
        ];

        // this part sends $data, including user records, to users.php
        return view('partials/header', $data)
            . view('users', $data)
            . view('partials/footer');
    }
}