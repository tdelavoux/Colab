<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Project;
use \App\Tableau;
use \App\Color;

class BoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function createBoard(Request $request)
    {
        $validate = $request->validate([
            'BoardName'     => 'required|max:100',
            'description'   => 'max:500',
            'fkProject'     => 'required',
            'hexaColor'     => 'required|max:10'
        ]);
        
        //Get color
        $color = Color::where('hexaCode', $request->hexaColor)->first();

        $board                = new Tableau();
        $board->libelle       = $request->input('BoardName');
        $board->description   = $request->input('description');
        $board->fk_projet     = $request->input('fkProject');
        $board->fk_color      = $color->id;
        $board->save();

        return redirect(url()->previous())->with('confirmMessage', 'Le Tableau à été créé');
    }
}
