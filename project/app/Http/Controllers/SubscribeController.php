<?php

namespace App\Http\Controllers;

use App\Models\subscribe;
use Illuminate\Http\Request;


class SubscribeController extends Controller
{

    public function addData(Request $req){

    	$member = new subscribe;
    	$member->name = $req->name1;
    	$member->email = $req->email1;
    	$member->save();
    	return back();

    }
}
