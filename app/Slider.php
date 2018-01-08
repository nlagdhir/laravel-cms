<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sliders';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'image', 'content', 'url'];

}
