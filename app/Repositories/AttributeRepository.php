<?php

namespace App\Repositories;

use App\Models\Attribute;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AttributeRepository
 * @package App\Repositories
 * @version July 11, 2018, 1:37 am UTC
 *
 * @method Attribute findWithoutFail($id, $columns = ['*'])
 * @method Attribute find($id, $columns = ['*'])
 * @method Attribute first($columns = ['*'])
*/
class AttributeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'attr_name',
        'category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Attribute::class;
    }
}
