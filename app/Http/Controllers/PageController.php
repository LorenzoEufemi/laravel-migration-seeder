<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('data_partenza', '>=', now()->toDateString())
             ->orderBy('data_partenza')
             ->orderBy('orario_partenza')
             ->get();
        return view('index', compact('trains'));
    }
}
