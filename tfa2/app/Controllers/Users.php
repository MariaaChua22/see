<?php

namespace App\Controllers;

use App\Models\UserModel;

// Controller for the User Accounts page
class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $data = [
            'title' => 'User Accounts',
            // this holds an array for the sample records
            'users' => $userModel
                    ->findAll() // retrieves all records from the users table
        ];

        // this part sends $data, including user records, to users.php
        return view('partials/header', $data)
            . view('users', $data)
            . view('partials/footer');
    }
}