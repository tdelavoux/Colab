<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\data\Tableau;
use App\data\Project;
use App\data\Modules;
use App\data\wiki\WikiChapter;
use App\data\wiki\WikiNote;
use Illuminate\Support\Facades\Auth;

class BoardWikiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($fkBoard)
    {
        $board      = Tableau::getTableauInfos($fkBoard);
        $modules    = Modules::getAll();
        $project    = Project::find($board['fk_projet']);
        $chapters   = WikiChapter::where('fk_tableau', $fkBoard)->whereNull('dateCloture')->get();
        return view('AppsViews.boards.wikiview.wikiboard')->with('board', $board)->with('project', $project)->with('chapters', $chapters)->with('modules', $modules);
    }

    public function viewChapter($fkBoard, $fkChapter){
        $board          = Tableau::find($fkBoard);
        $project        = Project::find($board['fk_projet']);
        $chapters       = WikiChapter::where('fk_tableau', $fkBoard)->whereNull('dateCloture')->get();
        $chapterInfos   = WikiChapter::find($fkChapter);
        $notes          = WikiNote::getAllNotesByChapter($fkChapter);

        return view('AppsViews.boards.wikiview.wikiboard')
                ->with('board', $board)
                ->with('project', $project)
                ->with('chapters', $chapters)
                ->with('chapterInfos', $chapterInfos)
                ->with('notes', $notes);
    }

    public function addChapter(Request $request){

        $validate = $request->validate([
            'name' => 'required|max:50',
            'fk_tableau' => 'required|integer|exists:tableau,id',
        ]);

        $chapter = new WikiChapter();
        $chapter->libelle = $request->input('name');
        $chapter->fk_tableau = $request->input('fk_tableau');
        $chapter->save();
        
        return redirect()->route('wiki.viewChapter', ['fkBoard' => $request->input('fk_tableau'), 'fkChapter' => $chapter->id])->with('confirmMessage', 'Nouveau Chapitre Ajoutée !');
    }

    public function addNote(Request $request){

        $validate = $request->validate([
            'txt' => 'required',
            'fk_wiki_chapter' => 'required|integer|exists:wiki_chapter,id',
        ]);

        $note = new WikiNote();
        $note->content = $request->input('txt');
        $note->fk_user_writer = Auth::user()->id;
        $note->fk_wiki_chapter = $request->input('fk_wiki_chapter');
        $note->save();
       
        die('OK');
    }

    public function updateNote(Request $request){

        $validate = $request->validate([
            'txt' => 'required',
            'fk_wiki_note' => 'required|integer|exists:wiki_note,id',
        ]);

        $note = WikiNote::find($request->input('fk_wiki_note'));
        $note->content = $request->input('txt');
        $note->fk_user_writer = Auth::user()->id;
        $note->save();
       
        die('OK');
    }

    public function deleteNote($fkNote){

        $note = WikiNote::find($fkNote);
        $note->dateCloture = Carbon::now();
        $note->fk_user_cloture = Auth::user()->id;
        $note->save();

        $chapter = WikiChapter::find($note->fk_wiki_chapter);

        return redirect()->route('wiki.viewChapter', ['fkBoard' => $chapter->fk_tableau, 'fkChapter' => $chapter->id])->with('confirmMessage', 'Note supprimée !');
    }

    public function getNoteContent(Request $request){

        $validate = $request->validate([
            'fk_wiki_note' => 'required|integer|exists:wiki_note,id',
        ]);

        $note = WikiNote::find($request->input('fk_wiki_note'));
       
        die(\json_encode($note->content));
    }
}
