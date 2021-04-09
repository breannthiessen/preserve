<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralController extends Controller
{
    

    public function getUsers(Request $request){
        return DB::table('users')->get();
    }



}
