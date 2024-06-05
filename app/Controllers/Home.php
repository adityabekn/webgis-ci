<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('openlayers');
    }

    public function leaflet(): string
    {
        return view('leaflet');
    }

    public function openLayers() {
        return view('openlayers');
    }
}
