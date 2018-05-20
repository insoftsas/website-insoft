<?php

namespace App\Repositories;

use App\Models\Answer;
use App\Models\Category;
use App\Models\City;
use App\Models\District;
use App\Models\Form;
use App\Models\Option;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\State;
use App\Models\TypeQuestion;
use App\User;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CentralRepository
 * @package App\Repositories
 * @version October 14, 2017, 2:33 pm -05
 *
*/
class CentralRepository //extends BaseRepository
{


    public $gender = ['M' => 'Masculino', 'F' => 'Femenino', 'LGBTI' => 'LGBTI', 'NA' => 'No Especificó'];

    public $statusBool = ['0' => 'Activo', '1' => 'Inactivo'];

    public $comercialActivity = ['comercial' => 'Comercial', 'industrial' => 'Industrial', 'servicio' => 'Servicio', 'artesanal' => 'Artesanal', 'agropecuario' => 'Agropecuario', ];

    public $lvl = [1 => 'A', 2 => 'B', 3 => 'C', 4 => 'D'];

    public $statusProduct = [ null => 'Activo', '1' => 'Inactivo', '3' => 'Archivado', '4' => 'Bloqueado'];

    public $documentType = ['CC' => 'Cédula', 'CE' => 'Cédula Extranjería', 'TI' => 'Tarjeta de Identidad'];

    public $stateQuestion = ['1' => 'Esperando respuesta', '2' => 'Finalizada', '3' => 'Pregunta bloqueada'];

    public $codeOption = ['No code', 'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F', 'G' => 'G', 'H' => 'H', 'I' => 'I', 'J' => 'J', 'K' => 'K', 'L' => 'L', 'M' => 'M', 'N' => 'N', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'];

    public $colorSelected = [
        '#298df7',
        '#fbd249',
        '#FF5722',
        '#d743aa',
        '#8BC34A',
        '#03A9F4',
        '#FF9800',
        '#009688',
        '#673AB7',
        '#CDDC39',
        '#00BCD4',
        '#4CAF50',
        '#FFC107',
        '#795548',
        '#3F51B5',
        '#9E9E9E',
        '#607D8B',
        '#E91E63',
    ];

    public $colors  = array(
            array('code' => "#800000", 'name' => "Maroon"),
            array('code' => "#8B0000", 'name' => "DarkRed"),
            array('code' => "#B22222", 'name' => "FireBrick"),
            array('code' => "#FF0000", 'name' => "Red"),
            array('code' => "#FA8072", 'name' => "Salmon"),
            array('code' => "#FF6347", 'name' => "Tomato"),
            array('code' => "#FF7F50", 'name' => "Coral"),
            array('code' => "#FF4500", 'name' => "OrangeRed"),
            array('code' => "#D2691E", 'name' => "Chocolate"),
            array('code' => "#F4A460", 'name' => "SandyBrown"),
            array('code' => "#FF8C00", 'name' => "DarkOrange"),
            array('code' => "#FFA500", 'name' => "Orange"),
            array('code' => "#B8860B", 'name' => "DarkGoldenrod"),
            array('code' => "#DAA520", 'name' => "Goldenrod"),
            array('code' => "#FFD700", 'name' => "Gold"),
            array('code' => "#808000", 'name' => "Olive"),
            array('code' => "#FFFF00", 'name' => "Yellow"),
            array('code' => "#9ACD32", 'name' => "YellowGreen"),
            array('code' => "#ADFF2F", 'name' => "GreenYellow"),
            array('code' => "#7FFF00", 'name' => "Chartreuse"),
            array('code' => "#7CFC00", 'name' => "LawnGreen"),
            array('code' => "#008000", 'name' => "Green"),
            array('code' => "#00FF00", 'name' => "Lime"),
            array('code' => "#32CD32", 'name' => "LimeGreen"),
            array('code' => "#00FF7F", 'name' => "SpringGreen"),
            array('code' => "#00FA9A", 'name' => "MediumSpringGreen"),
            array('code' => "#40E0D0", 'name' => "Turquoise"),
            array('code' => "#20B2AA", 'name' => "LightSeaGreen"),
            array('code' => "#48D1CC", 'name' => "MediumTurquoise"),
            array('code' => "#008080", 'name' => "Teal"),
            array('code' => "#008B8B", 'name' => "DarkCyan"),
            array('code' => "#00CED1", 'name' => "DarkTurquoise"),
            array('code' => "#00BFFF", 'name' => "DeepSkyBlue"),
            array('code' => "#1E90FF", 'name' => "DodgerBlue"),
            array('code' => "#4169E1", 'name' => "RoyalBlue"),
            array('code' => "#000080", 'name' => "Navy"),
            array('code' => "#00008B", 'name' => "DarkBlue"),
            array('code' => "#0000CD", 'name' => "MediumBlue"),
            array('code' => "#8A2BE2", 'name' => "BlueViolet"),
            array('code' => "#9932CC", 'name' => "DarkOrchid"),
            array('code' => "#9400D3", 'name' => "DarkViolet"),
            array('code' => "#800080", 'name' => "Purple"),
            array('code' => "#FF00FF", 'name' => "Fuchsia"),
            array('code' => "#C71585", 'name' => "MediumVioletRed"),
            array('code' => "#FF1493", 'name' => "DeepPink"),
            array('code' => "#FF69B4", 'name' => "HotPink"),
            array('code' => "#DC143C", 'name' => "Crimson"),
            array('code' => "#A52A2A", 'name' => "Brown"),
            array('code' => "#CD5C5C", 'name' => "IndianRed"),
            array('code' => "#BC8F8F", 'name' => "RosyBrown"),
            array('code' => "#F08080", 'name' => "LightCoral"),
            array('code' => "#E9967A", 'name' => "DarkSalmon"),
            array('code' => "#FFA07A", 'name' => "LightSalmon"),
            array('code' => "#CD853F", 'name' => "Peru"),
            array('code' => "#6B8E23", 'name' => "OliveDrab"),
            array('code' => "#556B2F", 'name' => "DarkOliveGreen"),
            array('code' => "#006400", 'name' => "DarkGreen"),
            array('code' => "#228B22", 'name' => "ForestGreen"),
            array('code' => "#2E8B57", 'name' => "SeaGreen"),
            array('code' => "#3CB371", 'name' => "MediumSeaGreen"),
            array('code' => "#66CDAA", 'name' => "MediumAquamarine"),
            array('code' => "#2F4F4F", 'name' => "DarkSlateGray"),
            array('code' => "#5F9EA0", 'name' => "CadetBlue"),
            array('code' => "#4682B4", 'name' => "SteelBlue"),
            array('code' => "#708090", 'name' => "SlateGray"),
            array('code' => "#6495ED", 'name' => "CornflowerBlue"),
            array('code' => "#191970", 'name' => "MidnightBlue"),
            array('code' => "#6A5ACD", 'name' => "SlateBlue"),
            array('code' => "#483D8B", 'name' => "DarkSlateBlue"),
            array('code' => "#7B68EE", 'name' => "MediumSlateBlue"),
            array('code' => "#9370DB", 'name' => "MediumPurple"),
            array('code' => "#4B0082", 'name' => "Indigo"),
            array('code' => "#BA55D3", 'name' => "MediumOrchid"),
            array('code' => "#EE82EE", 'name' => "Violet"),
            array('code' => "#DA70D6", 'name' => "Orchid"),
            array('code' => "#DB7093", 'name' => "PaleVioletRed"),
            array('code' => "#000000", 'name' => "Black"),
            array('code' => "#696969", 'name' => "DimGray"),
            array('code' => "#808080", 'name' => "Gray"),
            array('code' => "#A9A9A9", 'name' => "DarkGray")
        );

    public function uniqueId()
    {
        return str_replace( '.', 'xs', uniqid(rand(), true) );
    }

    public function randomGenColors($quantity)
    {
        if ($quantity <= 18) {
       
           return array_slice( $this->colorSelected , 0, $quantity);
        } 
            $numbers = range(0, 79);
            shuffle($numbers);
            $returnNums = array_slice($numbers, 0, $quantity);
            $returnColors = array();
            foreach ($returnNums as $key => $value) {
                array_push($returnColors, ($this->colors[$value])['code']);
            }
            return $returnColors;
        
    }
    public function stateSortCustom()
    {
        $states = State::all();

        $rate = [ 12, 1, 27, 4, 3, 13 ];

        $newState = collect();
        foreach ($rate as $value) {
            $newState->push($states->pull($value));
        }

        $newState = $newState->merge( $states->shuffle() );

        return $newState;
    }
    /*
    public function userType()
    {

        $array = [];
           foreach ( User::get() as $value ) {
            if ($value->isRoot()) {
                $array[$value->id] = $value->name;
            }
           }
        return $array;
    }
    */


    public function user_id()
    {
        return User::pluck('name', 'id');
    }

    public function state_id()
    {
        return State::pluck('name', 'id');
    }

    public function district_id()
    {
        return District::pluck('name', 'id');
    }

    public function city_id()
    {
        $array = [];
            foreach ( City::with('state')->whereIn('id', [502, 492, 495, 498, 501, 504, 509, 514, 515, 511])->orderBy('name')->get() as $key => $value )
            {
                $array[$value->id] = $value->name.", ".$value->state->name;
            }
        return $array;
    }
    public function cities_victimizacion()
    {
        return City::whereIn('id', [502, 492, 495, 498, 501, 504, 509, 514, 515, 511])->orderBy('name')->get();
    }
    public function city_id_victimizacion()
    {
        $array = [];
            foreach ( City::whereIn('id', [502, 492, 495, 498, 501, 504, 509, 514, 515, 511])->orderBy('name')->get() as $key => $value )
            {
                $array[$value->id] = $value->name;
            }
        return $array;
    }

    public function question_id()
    {
        $array = [];
            foreach ( Question::with('form')->get() as $key => $value )
            {
                $array[$value->id] = 'F'.$value->form->codehuman."-Q".$value->codehuman.", ".$value->title;
            }
        return $array;
    }

    public function option_id()
    {

        $array = [];
            foreach ( Option::with('question')->get() as $key => $value )
            {
                $array[$value->id] = 'F'.$value->question->form->codehuman."-Q".$value->question->codehuman." (".$value->code.") ".$value->value;
            }
        return $array;
    }

    public function form_id()
    {
        $array = [];
            foreach ( Form::get() as $key => $value )
            {
                $array[$value->id] = 'F'.$value->codehuman." ".$value->name;
            }
        return $array;
    }

    public function type_question_id()
    {
        $array = [];
            foreach ( TypeQuestion::get() as $key => $value )
            {
                $array[$value->id] = $value->code." ".$value->name;
            }
        return $array;
    }


    public function anweredQuiz(Quiz $quiz)
    {
       $questions = Question::with(['options', 'typeQuestion'])->where('form_id', $quiz->form_id)->get();

      foreach ($questions as $key => $question)
      {
        foreach ($question->options as $keyOp => $qOption)
        {
            $questions[$key]->options[$keyOp]->answered = Answer::select(['id', 'value'])
                ->where('quiz_id', $quiz->id)
                ->where('question_id', $question->id)
                ->where('option_id', $qOption->id)
                ->first();
        }
        // $questions[$key]->ans = Answer::select(['option_id', 'id', 'value'])->with('option')->where('quiz_id', $quiz->id)->where('question_id', $question->id)->get();
      }

      return $questions;
    }


}
