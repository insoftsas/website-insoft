<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Maker extends Model
{
    use SoftDeletes;

    public $table = 'makers';
    
    protected $appends = ['FullName'];
    
    protected $dates = ['deleted_at'];


    public $fillable = [
        'group_id',
        'first_name',
        'last_name',
        'doc_type',
        'document',
        'genere',
        'bird_date',
        'city_id',
        'email',
        'phone',
        'level',
        'semester',
        'area',
        'career',
        'skills',
        'bio',
        'file_document',
        'file_certificate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'group_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'doc_type' => 'string',
        'document' => 'string',
        'genere' => 'string',
        'bird_date' => 'date',
        'city_id' => 'integer',
        'email' => 'string',
        'phone' => 'string',
        'level' => 'string',
        'semester' => 'string',
        'area' => 'string',
        'career' => 'string',
        'skills' => 'string',
        'bio' => 'string',
        'file_document' => 'string',
        'file_certificate' => 'string'
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

    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }
    
    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($maker){
            $us = User::where('email',$maker->email)->first();
            if($us!=null){
                $us->delete();
            }
        });
    }
}
