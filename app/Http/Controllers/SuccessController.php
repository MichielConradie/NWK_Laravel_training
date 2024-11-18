<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class SuccessController extends Controller
{
    //
    public function index(){
        $dataName = 'Success';
        $data = Invoice:: all();
        return view('success',[ 'Name' => $dataName, 'Data' => $data ]);
    }
}
