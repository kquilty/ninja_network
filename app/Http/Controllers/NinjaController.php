<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja;

class NinjaController extends Controller
{
    public function index() {
        $ninjas = Ninja::orderBy('created_at', 'desc')->paginate(5);
        return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    public function create() {
        return view('ninjas.create');
    }

    public function show($id) {

        $ninja = Ninja::findOrFail($id);//show 404 if not found

        return view('ninjas.show', ['ninja' => $ninja]);
    }
}
