<?php

namespace blue\Http\Controllers\Easy;

use blue\Http\Controllers\Controller;
use Illuminate\Http\Request;

class XssController extends Controller
{
    /**
     * This controller receive the request from /easy/first
     */
    public function index(){
        return view('easy/xss');
    }
}
