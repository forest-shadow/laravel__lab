<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('pages.services')->with('services', $services);
    }
}
