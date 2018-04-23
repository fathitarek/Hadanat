<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $softDelete = true;
    protected $table = 'reviews';
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'city',
        'rating',
        'review',
        'product_id',
    ];

}
