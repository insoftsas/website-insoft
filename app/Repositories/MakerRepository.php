<?php

namespace App\Repositories;

use App\Models\Maker;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MakerRepository
 * @package App\Repositories
 * @version May 21, 2018, 6:36 am UTC
 *
 * @method Maker findWithoutFail($id, $columns = ['*'])
 * @method Maker find($id, $columns = ['*'])
 * @method Maker first($columns = ['*'])
*/
class MakerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Maker::class;
    }
    
    public function allRelations()
    {
        return $this->model->with(['city','group'])->get();
    }
}
