<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function notes(){
        
        return view('list-notes');
    }
    
   public function show(){
       $notes = \DB::table('notes')
           ->select('*')
           
           ->get();
       return view('notes.show', compact('notes'));
   }
    
}
