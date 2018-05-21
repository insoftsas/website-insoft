<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Group
 * @package App\Models
 * @version May 21, 2018, 6:16 am UTC
 *
 * @property integer leader_id
 * @property string name
 * @property string code
 * @property string description
 */
class Group extends Model
{
    use SoftDeletes;

    public $table = 'groups';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'leader_id',
        'name',
        'code',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'leader_id' => 'integer',
        'name' => 'string',
        'code' => 'string',
        'description' => 'string'
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
    public function leader()
    {
        return $this->belongsTo('App\Models\Maker', 'leader_id');
    }

    public function makers()
    {
        return $this->hasMany('App\Models\Maker');
    }

    
}
