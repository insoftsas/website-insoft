<?php

namespace App\Repositories;

use App\Models\Qualify;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class QualifyRepository
 * @package App\Repositories
 * @version June 11, 2018, 12:31 am -05
 *
 * @method Qualify findWithoutFail($id, $columns = ['*'])
 * @method Qualify find($id, $columns = ['*'])
 * @method Qualify first($columns = ['*'])
*/
class QualifyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Qualify::class;
    }
}
