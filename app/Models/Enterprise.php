<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;


class Enterprise extends Model
{
    use SoftDeletes, Notifiable;

    public $table = 'enterprises';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'razon_social_propietario',
        'nit',
        'representante_legal',
        'actividad_comercial',
        'sector_productivo',
        'city_id',
        'neigboard',
        'address',
        'phone',
        'email',
        'file_rut'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'razon_social_propietario' => 'string',
        'nit'                      => 'string',
        'representante_legal'      => 'string',
        'actividad_comercial'      => 'string',
        'sector_productivo'        => 'string',
        'city_id'                  => 'integer',
        'neigboard'                => 'string',
        'address'                  => 'string',
        'phone'                    => 'string',
        'email'                    => 'string',
        'file_rut'                 => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * Relationships
     */
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    
}
