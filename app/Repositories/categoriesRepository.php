<?php

namespace App\Repositories;

use App\Models\categories;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class categoriesRepository
 * @package App\Repositories
 * @version April 4, 2018, 9:13 am UTC
 *
 * @method categories findWithoutFail($id, $columns = ['*'])
 * @method categories find($id, $columns = ['*'])
 * @method categories first($columns = ['*'])
*/
class categoriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar',
        'desc_en',
        'desc_ar',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return categories::class;
    }
}
