<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class categories
 * @package App\Models
 * @version April 4, 2018, 9:13 am UTC
 *
 * @property string name_en
 * @property string name_ar
 * @property string desc_en
 * @property string desc_ar
 * @property string image
 */
class categories extends Model {

    use SoftDeletes;

    public $table = 'categories';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'name_en',
        'name_ar',
        'desc_en',
        'desc_ar',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name_en' => 'string',
        'name_ar' => 'string',
        'desc_en' => 'string',
        'desc_ar' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *   |mimes:jpeg,png
     * @var array
     */
    public static $rules = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'desc_en' => 'required',
        'desc_ar' => 'required',
        'image' => 'required|mimes:jpeg,png'
    ];
    public static $rules_update = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'desc_en' => 'required',
        'desc_ar' => 'required',
        'image' => 'mimes:jpeg,png'
    ];

    public function product() {
        return $this->hasMany('App\Models\products');
    }

}
