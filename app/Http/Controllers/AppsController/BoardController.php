<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\data\Project;
use App\data\Team\TeamProjectAccessBoard;
use \App\data\Board\Board;
use \App\data\Color;
use \App\data\Board\BoardModule;
use \App\data\chat\ChatRoom;

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
            'hexaColor'     => 'required|max:7|min:7|exists:color,hexaCode'
        ]);
        
        //Get color
        $color = Color::where('hexaCode', $request->hexaColor)->first();

        $board                      = new Board();
        $board->libelle             = $request->input('BoardName');
        $board->description         = $request->input('description');
        $board->fk_projet           = $request->input('fkProject');
        $board->fk_module_default   = 2;
        $board->fk_color            = $color->id;
        $board->save();

        // ----  Initialise the components of project
        $chat_room = new ChatRoom();
        $chat_room->fk_board = $board->id; 
        $chat_room->save();

        // --- Association des droits sur les projets
        TeamProjectAccessBoard::initialiseByFkBoard($request->input('fkProject'), $board->id);
        BoardModule::initialiseBoardMods($board->id);

        return redirect(url()->previous())->with('confirmMessage', 'Le Tableau à été créé');
    }
}
