<?php

namespace App\Repositories;

use App\Models\products;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class productsRepository
 * @package App\Repositories
 * @version April 4, 2018, 12:11 pm UTC
 *
 * @method products findWithoutFail($id, $columns = ['*'])
 * @method products find($id, $columns = ['*'])
 * @method products first($columns = ['*'])
*/
class productsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar',
        'image',
        'logo',
        'desc_en',
        'desc_ar',
        'advantages_en',
        'advantages_ar',
        'address',
        'latitude',
        'longitude',
        'conditions_en',
        'conditions_ar',
        'category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return products::class;
    }
}
