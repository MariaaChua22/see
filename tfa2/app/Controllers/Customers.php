<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $customers = new CustomerModel();

        $data = [
            'title' => 'Customer Accounts',
            'customers' => $customers
                        -> findAll() // retrieves all records from the customers table
        ];

        return view('partials/header', $data)
            . view('customers', $data)
            . view('partials/footer');
    }
}