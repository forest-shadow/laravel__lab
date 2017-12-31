<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show(Service $service)
    {
        return view('service.service')->with([
            'service' => $service
        ]);
    }
}
