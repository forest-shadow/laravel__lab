<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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

    public function show(Service $service)
    {
        return view('service.service')->with([
            'service' => $service
        ]);
    }
}
