<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class tinbdsController extends Controller
{
    public function getalltinbds(){
    	$danhsachtinbds=DB::table('tin_bds')->get();
    	return response()->json($danhsachtinbds);
    }
}