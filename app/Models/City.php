<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $table = 'cities';

    protected $appends = [];

    protected $hidden = ['state_id'];

    public $fillable = [
        'name',
        'state_id'
    ];


    /**
     * Relationships
     */
    public function state()
    {
        return $this->belongsTo('App\Models\State', 'state_id');
    }


    public function getStateNameAttribute()
    {
        return $this->state->name;
    }
}
