<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ministery;

class MinisteryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ministery::get();
    }
}
