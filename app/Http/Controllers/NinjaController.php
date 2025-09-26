<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja;

class NinjaController extends Controller
{
    public function index() {
        $ninjas = Ninja::with('dojo')//<------------ we know we're going to access this a lot: "eager load" it all instead of relying on lazy loading
            ->orderBy('created_at', 'desc')//<------ Show newest first
            ->paginate(10); //<--------------------- Show 10 per page
        $totalNinjas = Ninja::count();
        return view('ninjas.index', ['ninjas' => $ninjas, 'totalNinjas' => $totalNinjas]);
    }

    public function create() {
        return view('ninjas.create');
    }

    public function show($id) {

        $ninja = Ninja::with('dojo')// eager load the dojo as well (since we know we'll be using it)
            ->findOrFail($id);//show 404 if not found

        return view('ninjas.show', ['ninja' => $ninja]);
    }
}
