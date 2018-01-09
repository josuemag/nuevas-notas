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
		
		$this->validate($request, [
        'title' => 'required|min:5',
        'content' => 'required|min:8'
    ]);

    note::create($request->all());
    return redirect('/createNote');
	}
}
