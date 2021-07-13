<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peopleGest;

class peopleGestController extends Controller
{
    public function home(){
        return view('home');
    }

    public function show(){

        $people = peopleGest::all();
        return view('empleados.show', compact('people'));
    }

    /*
    public function findG(){

        //echo "nulo";
        $people = peopleGest::all();

        return view('empleados.find', compact('people'));
        
    }
    */

    public function find(Request $request){
        //dd($task);
        //dd($request);

        if ($request->task==null){
            //dd($request->task);
            $people = peopleGest::all();
        } else {
            //dd($request->task);
            
            //$people = peopleGest::select("select * from people where active like '?%'", [$task]);
            $people = peopleGest::where('task', 'like', '%' . $request->task . '%')->get();
        }
        $task= $request->task;

        return view('empleados.find', compact('people', 'task'));
    }


    public function showid($id){
        //return 'id: '.$id;
        //$people = peopleGest::all();
        $people = peopleGest::where('id', $id)->first();
        return view('empleados.showid', compact('people'));
    }

    public function create(Request $request){
        return view('empleados.create');
    }

    public function createStore(Request $request){
        //return $request->all(); //ok pasa los datos bien.

        $request->validate([
            "name" => 'required | min:2 | max:255',
            "surname" => 'required | min:2 | max:255',
            "date_of_bird" => 'required | date',
            "phone_number" => 'required | size:9',
            "task" => 'required | min:2 | max:50',
            "department" => 'required | min:2 | max:50',
            "aditional_info" => 'max:100'
        ]);
        //dd($request);
        //dd($people);

        $var = peopleGest::create($request->all());

        return redirect()->route('show');
    }
    
    public function edit($id){
        $people = peopleGest::where('id', $id)->first();
        return view('empleados.edit', compact('people'));
    }

    public function editStore(Request $request, $id){

        $request->validate([
            "name" => 'required | min:2 | max:255',
            "surname" => 'required | min:2 | max:255',
            "date_of_bird" => 'required | date',
            "phone_number" => 'required | size:9',
            "task" => 'required | min:2 | max:50',
            "department" => 'required | min:2 | max:50',
            "aditional_info" => 'max:100'
        ]);

        $people = peopleGest::find($id); //añadido para que vincule el modelo y el id con $people, ya que no actualizaba bien los datos.
        $people->update($request->all());

        return redirect()->route('show');
        //return view('show');
    }    

    public function destroy($id){
        $people = peopleGest::find($id);
        $people->delete();

        return view('empleados.destroy', compact('id'));
    }
}
