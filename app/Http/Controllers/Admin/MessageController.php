<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use File;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin/message');
    }
}
