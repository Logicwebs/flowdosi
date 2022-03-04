<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;






class MPESAResponseController extends Controller
{
    public function validation(Request $request){
        log::info('Validation endpoint hit:');
        log::info($request->all());
    }

    public function confirmation(Request $request){
        log::info('Confirmation endpoint hit:');
        log::info($request->all());
    }
    

}
