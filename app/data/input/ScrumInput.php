<?php

namespace App\data\Input;

use Illuminate\Database\Eloquent\Model;
use \App\Data\Input\ScrumInputPredefinedValues;

class ScrumInput extends Model
{
    protected $table = "scrum_input";

    public static function getAllByBoard($fkBoard){
        $inputs =  self::join('scrum_board_input', 'scrum_board_input.fk_scrum_input' , '=', 'scrum_input.id')
            ->join('type_input', 'type_input.id' , '=', 'scrum_input.fk_type_input')
            ->select('scrum_input.*', 'scrum_board_input.ordre', 'type_input.code')
            ->whereNull('scrum_board_input.dateCloture')
            ->whereNull('scrum_input.dateCloture')
            ->where('scrum_board_input.fk_board', $fkBoard)
            ->orderby('scrum_board_input.ordre')
            ->get();
        foreach($inputs as &$input){
            $input->predefinedValues = ScrumInputPredefinedValues::leftjoin('color', 'color.id', '=', 'scrum_input_predefined_values.fk_color')
                                                                ->select('scrum_input_predefined_values.*', 'color.hexaCode')
                                                                ->where('scrum_input_predefined_values.fk_scrum_input', $input->id)
                                                                ->whereNull('scrum_input_predefined_values.dateCloture')
                                                                ->get();
        }
        return $inputs;
    }
}
