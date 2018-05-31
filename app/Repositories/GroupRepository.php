<?php

namespace App\Repositories;

use App\Models\Group;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GroupRepository
 * @package App\Repositories
 * @version May 21, 2018, 6:16 am UTC
 *
 * @method Group findWithoutFail($id, $columns = ['*'])
 * @method Group find($id, $columns = ['*'])
 * @method Group first($columns = ['*'])
*/
class GroupRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'leader_id',
        'name',
        'code',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Group::class;
    }
    
    public function allRelations()
    {
        return $this->model->with(['makers','leader'])->get();
    }
}
