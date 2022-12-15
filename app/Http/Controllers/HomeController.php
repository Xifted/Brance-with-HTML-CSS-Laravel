<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Services;
use App\Models\Testimoni;
use App\Models\CC;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Page::find(1);
        $services = Services::find(1);
        $services2 = Services::find(2);
        $tst = Testimoni::all();
        $cc = CC::find(1);
        return view('index', [
            'objek' => $banner,
            'service' => $services,
            'service2' => $services2,
            'tst' => $tst,
            'cc' => $cc
        ]);
    }
}
