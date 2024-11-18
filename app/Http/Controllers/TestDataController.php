<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class TestDataController extends Controller
{
    //
    public function index(){
        $dataName = 'TestData';
        $data = Invoice:: all();
        return view('test-data',[ 'Name' => $dataName, 'Data' => $data ]);
    }
}
