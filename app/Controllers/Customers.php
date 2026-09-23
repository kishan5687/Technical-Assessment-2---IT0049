<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $model = new CustomerModel();
        
        $data['title'] = 'Customer Accounts';
        // Fetch rows dynamically from database table
        $data['customers'] = $model->findAll(); 

        return view('customers/index', $data);
    }
}
