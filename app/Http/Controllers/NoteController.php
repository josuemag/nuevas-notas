<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\note;


class NoteController extends Controller
{
    public function index(){
        
        $notes = Note::all();
        
        return view('notes.index', compact('notes'));
        
    }
    
   public function show($id){
       
       $notes = Note::find($id);
       return view('notes.show', compact('notes'));
   }
    
    public function create(){
        
    }
    
    public function store(){
        
    }
    
    public function edit($id){
        
    }
    
    public function update(Request $request){
        return "jashgd";        
        
    }
    
    public function destroy($id){
        
    }
    
}
