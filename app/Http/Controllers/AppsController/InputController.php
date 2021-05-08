<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Data\Input\ScrumInput;
use \App\Data\Input\ScrumBoardInput;
use \App\Data\Input\ScrumInputPredefinedValues;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\data\Color;


class InputController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function addScrumField(Request $request)
    {
        $validate = $request->validate([
            'libelleChamp'  => 'required|max:50',
            'fkTypeChamp'   => 'required|integer|exists:type_input,id',
            'fk_board'      => 'required|integer|exists:board,id',
        ]);

        //create Scrum
        $scrumInput = new ScrumInput();
        $scrumInput->libelle = $request->input('libelleChamp');
        $scrumInput->fk_type_input = $request->input('fkTypeChamp');
        $scrumInput->origine = 'appli';
        $scrumInput->created_at = Carbon::now();
        $scrumInput->updated_at = Carbon::now();
        $scrumInput->save();

        //create link to board
        $scrumBoardInput = new ScrumBoardInput();
        $scrumBoardInput->fk_board = $request->input('fk_board');
        $scrumBoardInput->fk_scrum_input = $scrumInput->id;
        $scrumBoardInput->ordre = ScrumBoardInput::where('fk_board',  $request->input('fk_board'))->max('ordre') + 1;
        $scrumBoardInput->created_at = Carbon::now();
        $scrumBoardInput->updated_at = Carbon::now();
        $scrumBoardInput->save();

        return redirect(url()->previous())->with('confirmMessage', 'Input créé avec succes');   
    }

    public function addPredefinedValue(Request $request){
        $validate = $request->validate([
            'libelle'       => 'required|max:50',
            'fkScrumInput'  => 'required|integer|exists:scrum_input,id',
            'hexaColor'     => 'required|min:7|max:7|exists:color,hexaCode',
        ]); 

        $color = Color::where('hexaCode', $request->hexaColor)->first();

        $value = new ScrumInputPredefinedValues();
        $value->fk_scrum_input = $request->input('fkScrumInput');
        $value->fk_color = $color->id;
        $value->clothing_step = 0;
        $value->value = $request->input('libelle');
        $value->created_at = Carbon::now();
        $value->updated_at = Carbon::now();
        $value->save();

        return redirect(url()->previous())->with('confirmMessage', 'Champs ajouté avec succès');

    }

    public function updateColor(Request $request){
        $validate = $request->validate([
            'fkPredefinedValue'  => 'required|integer|exists:scrum_input_predefined_values,id',
            'hexaColor'          => 'required|min:7|max:7|exists:color,hexaCode',
        ]); 

        $color = Color::where('hexaCode', $request->hexaColor)->first();

        ScrumInputPredefinedValues::where('id', $request->input('fkPredefinedValue'))->update(['fk_color' => $color->id]);
        die('OK');
    }

    public function updateClothingStep(Request $request){
        $validate = $request->validate([
            'fkPredefinedValue'  => 'required|integer|exists:scrum_input_predefined_values,id',
            'clothing_step'          => 'required|integer',
        ]); 

        ScrumInputPredefinedValues::where('id', $request->input('fkPredefinedValue'))->update(['clothing_step' => $request->input('clothing_step')]);
        die('OK');
    }

    public function closeInput($fkBoardInput, $fkBoard){

        $scrumBoardInput = ScrumBoardInput::where('fk_scrum_input', $fkBoardInput)->where('fk_board', $fkBoard)->first();
        if(ScrumInput::find($scrumBoardInput->fk_scrum_input)->origine !== 'admin' ){
            ScrumInput::where('id', $scrumBoardInput->fk_scrum_input)
                ->update(['fk_user_cloture'=> Auth::user()->id, 'dateCloture' => Carbon::now()]);
        }
        ScrumBoardInput::where('fk_scrum_input', $fkBoardInput)->where('fk_board', $fkBoard)
            ->update(['fk_user_cloture' => Auth::user()->id, 'dateCloture' => Carbon::now()]);
        
        return redirect(url()->previous())->with('confirmMessage', 'Input supprimé avec succes');   
    }

    public function closePredefinedValue(Request $request){
        $validate = $request->validate([
            'fkPredefinedValue'  => 'required|integer|exists:scrum_input_predefined_values,id',
        ]); 

        ScrumInputPredefinedValues::where('id', $request->input('fkPredefinedValue'))
            ->update(['fk_user_cloture' => Auth::user()->id, 'dateCloture' => Carbon::now()]);
        
        return redirect(url()->previous())->with('confirmMessage', 'Valeur supprimée avec succes');   
    }

}
