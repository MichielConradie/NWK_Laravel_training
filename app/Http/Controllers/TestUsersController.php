<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class TestUsersController extends Controller
{
    //
    public function index(){
        $dataName = 'TestUsers';
        $data = Invoice:: all();
        return view('test-users',[ 'Name' => $dataName, 'Data' => $data ]);
    }
}
