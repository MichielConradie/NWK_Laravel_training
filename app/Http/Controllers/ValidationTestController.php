<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class ValidationTestController extends Controller
{
    //
    public function index(){
        $dataName = 'ValidationTest';
        $data = Invoice:: all();
        return view('validation-test',[ 'Name' => $dataName, 'Data' => $data ]);
    }
}
