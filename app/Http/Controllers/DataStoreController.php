<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class DataStoreController extends Controller
{
    //
    public function index(){
        $dataName = 'DataStore';
        $data = Invoice:: all();
        return view('data-store',[ 'Name' => $dataName, 'Data' => $data ]);
    }
}
