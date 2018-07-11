<?php

namespace App\Repositories;

use App\Models\Value;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ValueRepository
 * @package App\Repositories
 * @version July 11, 2018, 1:44 am UTC
 *
 * @method Value findWithoutFail($id, $columns = ['*'])
 * @method Value find($id, $columns = ['*'])
 * @method Value first($columns = ['*'])
*/
class ValueRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'attr_name',
        'attr_value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Value::class;
    }
}
