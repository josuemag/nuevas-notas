<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function notes(){
        
        return view('list-notes');
    }
    
    public function showNotes(){
        
    }
}
