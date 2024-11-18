<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    public function index(){
        // $dataName = 'Michiel';
        // $dataSurname = 'Conradie';
        $data = Invoice:: all();
        // return view('Invoices',[ 'Name' => $dataName, 'Surname' => $dataSurname, 'Data' => $data ]);
        return view('Invoices-create',[ 'Data' => $data,]);
        // return view('toets',[ 'Name' => $dataName]);
    }

    public function create(){

        // Invoice:: create([
        //     'title' => 'Nommer 4',
        // ]);
        $data = Invoice:: all();
        return view('Invoices-create',[ 'Data' => $data,]);
    }
}
