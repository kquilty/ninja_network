<?php
// TELL ME WHAT TO DISPLAY
// WHAT VIEW TO USE
// AND WHICH DATA TO SEND TO THE VIEW

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja;

class NinjaController extends Controller
{
    public function index() {
        $ninjas = Ninja::with('dojo')//<------------ we know we're going to access this a lot: "eager load" it all instead of relying on lazy loading
            ->orderBy('created_at', 'desc')//<------ Show newest first
            ->paginate(10); //<--------------------- Show 10 per page



        return view('ninjas.index', [
            'ninjas' => $ninjas,
            'totalNinjas' => Ninja::count()+1
        ]);
    }

    public function getCreateView() {
        $availableDojos = \App\Models\Dojo::all();
        return view(
            'ninjas.create-new-view',
            ['dojos' => $availableDojos] //--- we need a list of dojos to choose from when creating a new ninja
        );
    }

    public function getProfileView($id) {

        $ninja = Ninja::with('dojo')// eager load the dojo as well (since we know we'll be using it)
            ->findOrFail($id);//show 404 if not found

        return view(
                'ninjas.profile-view', //---- display this view
                ['ninja' => $ninja] //------- with this data
            );
    }

    public function deleteNinja($id) {
        $ninja = Ninja::findOrFail($id);
        $ninja->delete();

        return redirect()
            ->route('ninjas.index')
            ->with('success', 'Ninja deleted successfully!')
            ;
    }

    public function createNewNinja(Request $request) {
        /*
        //validate the data
        try {
            $validated_col_val_map = $request->validate([
                'name' => 'required|max:255',
                'age' => 'required|integer|max:130|min:18',
                'skill' => 'required|integer|max:100|min:0',
                'bio' => 'required|max:1000',
                'dojo_id' => 'required|exists:dojos,id'
            ]);
            
            Ninja::create($validated_col_val_map);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()
                ->back()
                ->withErrors($e->validator)
                ->withInput();
        }
        */

        $validated_col_val_map = $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|integer|max:130|min:18',
            'skill' => 'required|integer|max:100|min:0',
            'bio' => 'required|max:1000',
            'dojo_id' => 'required|exists:dojos,id'
        ]);
        
        Ninja::create($validated_col_val_map);

        return redirect()
            ->route('ninjas.index')
            ->with('success', 'Ninja created successfully!'); //flash message
    }
}
