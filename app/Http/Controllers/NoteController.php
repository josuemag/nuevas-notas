<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\note;


class NoteController extends Controller
{
    public function index(){
        
        $notes = Note::all();
        
        return view('notes.index', compact('notes'));
        
    }
    
   public function show($id){
       
       
   }
    
    public function create(){
        
    }
    
    public function store(){
        
    }
    
    public function edit($id){
        
        $notes = Note::find($id);
       return view('notes.show', compact('notes'));
    }
    
    public function update($id){
        
        $notes = Note::find($id);
        $notes->title = Input::get('title');
        $notes->content = Input::get('content');
        $notes->save();
        return 'Se actualizo correctamente!';
    }
    
    public function destroy($id){
        
    }
    
}
