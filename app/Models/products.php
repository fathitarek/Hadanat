<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class products
 * @package App\Models
 * @version April 4, 2018, 12:11 pm UTC
 *
 * @property string name_en
 * @property string name_ar
 * @property string cover
 * @property  logo
 * @property string desc_en
 * @property string desc_ar
 * @property string advantages_en
 * @property string advantages_ar
 * @property string address
 * @property string latitude
 * @property string longitude
 * @property string conditions_en
 * @property string conditions_ar
 * @property string category_id
 */
class products extends Model {

    use SoftDeletes;

    public $table = 'products';
    protected $dates = ['deleted_at'];
    public $fillable = [
        'name_en',
        'name_ar',
        'cover',
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name_en' => 'string',
        'name_ar' => 'string',
        'cover' => 'string',
        'desc_en' => 'string',
        'desc_ar' => 'string',
        'advantages_en' => 'string',
        'advantages_ar' => 'string',
        'address' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'conditions_en' => 'string',
        'conditions_ar' => 'string',
        'category_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'cover' => 'required|mimes:jpeg,png',
        'logo' => 'required|mimes:jpeg,png',
        'desc_en' => 'required',
        'desc_ar' => 'required',
        'advantages_en' => 'required',
        'advantages_ar' => 'required',
        'address' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
        'conditions_ar' => 'required',
        'conditions_en' => 'required',
        'category_id' => 'required'
    ];
    public static $rules_update = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'cover' => 'mimes:jpeg,png',
        'logo' => 'mimes:jpeg,png',
        'desc_en' => 'required',
        'desc_ar' => 'required',
        'advantages_en' => 'required',
        'advantages_ar' => 'required',
        'address' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
        'conditions_ar' => 'required',
        'conditions_en' => 'required',
        'category_id' => 'required'
    ];

    public function category() {
        return $this->belongsTo('App\Models\categories');
    }

}
