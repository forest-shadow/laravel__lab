<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::paginate(4);
        $servicesTotalCount = count(Service::all());

        return view('pages.services')->with([
            'services' => $services,
            'servicesTotalCount' => $servicesTotalCount
        ]);
    }
}
