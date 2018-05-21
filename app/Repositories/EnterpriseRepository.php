<?php

namespace App\Repositories;

use App\Models\Enterprise;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EnterpriseRepository
 * @package App\Repositories
 * @version May 21, 2018, 6:55 am UTC
 *
 * @method Enterprise findWithoutFail($id, $columns = ['*'])
 * @method Enterprise find($id, $columns = ['*'])
 * @method Enterprise first($columns = ['*'])
*/
class EnterpriseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Enterprise::class;
    }
}
