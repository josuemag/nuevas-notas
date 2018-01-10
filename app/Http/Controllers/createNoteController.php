<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\note;

class createNoteController extends Controller
{
    public function index(){
    	return view('createNote');
    }

  public function store(Request $request)
	{
		
		$note = new note;

        $note->title = $request['title'];
        $note->content = $request['content'];


        $note->save();

        //return redirect()=>back();
        return "Registro agregado";
        //return "si";
	}

    public function ver(){

        $notes = note::all();
        
        return view('updateNote', compact('notes'));
    }

    public function verDeleteNote($id){

        $notas = note::find($id);

        return view('deleteOneNote')->with('notas',$notas);
        //return "Registro eliminado";
    }

    public function deleteNote($id){

        $notas = note::find($id);
        $notas->delete();
        //return redirect()->route('note.index');
        return "Registro eliminado";
    }
}
