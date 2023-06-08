<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;


class GoogleSheetController extends Controller
{
    public function index()
    {
        $spreadsheet = Sheets::spreadsheet('16n6n97ZwMF51XsPVnM7mFfWBsw80TRxLK51wRdYOtOw');
        $sheet1 = $spreadsheet->sheet('Hoja 1')->all();
    
        dd($sheet1);
    
    }
}
