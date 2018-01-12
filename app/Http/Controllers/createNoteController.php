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

        return redirect()->back();//redireccionar al formulario de crear nota
        //return "Registro agregado";
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

        $notas = note::find($id);//busca la nota dependiendo el id que recibe
        $notas->delete();//funcion para eliminar
        //return redirect()->route('/createNote'); //marca error
        //return "Registro eliminado"; muestra mensaje despues de eliminar
        //return redirect()->back();//redireccionar al formulario de eliminar nota... marca error
        //return redirect()->route('note.verEliminar', array('notas' => 0)); marca error
        //return redirect()->route('note.verEliminar',[0]); marca error
        return redirect()->action('NoteController@index');//redirecciona a index de notas despues de eliminar
    }
}
