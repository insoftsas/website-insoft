<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Qualify
 * @package App\Models
 * @version June 11, 2018, 12:31 am -05
 *
 * @property string assistant
 * @property string doc_type
 * @property string document
 * @property string job
 * @property string enterprise
 * @property string nit
 * @property string address
 * @property string neighborhood
 * @property integer city_id
 * @property string cellphone
 * @property string email
 * @property boolean topic_1
 * @property boolean topic_2
 * @property boolean topic_3
 * @property boolean topic_4
 * @property string event_1
 * @property string event_2
 * @property string event_3
 * @property string speaker_1
 * @property string speaker_2
 * @property string speaker_3
 * @property string guides_1
 * @property string guides_2
 * @property string logistics_1
 * @property string logistics_2
 * @property string logistics_3
 * @property longtext firm
 * @property string photo_url
 */
class Qualify extends Model
{
    use SoftDeletes;

    public $table = 'qualifies';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'assistant',
        'doc_type',
        'document',
        'job',
        'enterprise',
        'nit',
        'address',
        'neighborhood',
        'city_id',
        'cellphone',
        'email',
        'topic_1',
        'topic_2',
        'topic_3',
        'topic_4',
        'event_1',
        'event_2',
        'event_3',
        'speaker_1',
        'speaker_2',
        'speaker_3',
        'guides_1',
        'guides_2',
        'logistics_1',
        'logistics_2',
        'logistics_3',
        'firm',
        'photo_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'assistant' => 'string',
        'doc_type' => 'string',
        'document' => 'string',
        'job' => 'string',
        'enterprise' => 'string',
        'nit' => 'string',
        'address' => 'string',
        'neighborhood' => 'string',
        'city_id' => 'integer',
        'cellphone' => 'string',
        'email' => 'string',
        'topic_1' => 'boolean',
        'topic_2' => 'boolean',
        'topic_3' => 'boolean',
        'topic_4' => 'boolean',
        'event_1' => 'string',
        'event_2' => 'string',
        'event_3' => 'string',
        'speaker_1' => 'string',
        'speaker_2' => 'string',
        'speaker_3' => 'string',
        'guides_1' => 'string',
        'guides_2' => 'string',
        'logistics_1' => 'string',
        'logistics_2' => 'string',
        'logistics_3' => 'string',
        'photo_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'assistant'    => 'required|string',
        'document'     => 'required|string',
        'job'          => 'required|string',
        'enterprise'   => 'required|string',
        'nit'          => 'required|integer',
        'address'      => 'required|string',
        'neighborhood' => 'required|string',
        'city_id'      => 'required|integer|exists:cities,id',
        'cellphone'    => 'required|integer',
        'email'        => 'required|email',
        'topic_1'      => 'required|boolean',
        'topic_2'      => 'required|boolean',
        'topic_3'      => 'required|boolean',
        'topic_4'      => 'required|boolean',
        'event_1'      => 'required|integer|between:1,5',
        'event_2'      => 'required|integer|between:1,5',
        'event_3'      => 'required|integer|between:1,5',
        'speaker_1'    => 'required|integer|between:1,5',
        'speaker_2'    => 'required|integer|between:1,5',
        'speaker_3'    => 'required|integer|between:1,5',
        'guides_1'     => 'required|integer|between:1,5',
        'guides_2'     => 'required|integer|between:1,5',
        'logistics_1'  => 'required|integer|between:1,5',
        'logistics_2'  => 'required|integer|between:1,5',
        'logistics_3'  => 'required|integer|between:1,5',
        'photo_url'    => 'image',
    ];

    /**
     * attributes
     *
     * @var array
     */
    public static $attributesCustom = [
        'assistant'    => 'asistente',
        'document'     => 'documento',
        'job'          => 'cargo',
        'enterprise'   => 'nombre de la empresa',
        'nit'          => 'nit',
        'address'      => 'dirección',
        'neighborhood' => 'barrio',
        'city_id'      => 'ciudad',
        'cellphone'    => 'celular',
        'email'        => 'email',
        'topic_1'      => 'temática uno',
        'topic_2'      => 'temática dos',
        'topic_3'      => 'temática tres',
        'topic_4'      => 'temática cuatro',
        'event_1'      => 'evento: contenido',
        'event_2'      => 'evento: importancia de los temas tratados',
        'event_3'      => 'evento: presentación y legibilidad',
        'speaker_1'    => 'capacitador: dominio del tema',
        'speaker_2'    => 'capacitador: disposición para inquietudes',
        'speaker_3'    => 'capacitador: aclaración de inquietudes',
        'guides_1'     => 'guias y materiales: utilización de recursos didácticos',
        'guides_2'     => 'guias y materiales: recomendaciones bibliográficas',
        'logistics_1'  => 'logística: confort',
        'logistics_2'  => 'logística: disponibilidad de internet',
        'logistics_3'  => 'logística: atención por parte del personal encargado',
        'photo_url'    => 'foto',
        'firm'         => 'firma',
    ];

    
}
