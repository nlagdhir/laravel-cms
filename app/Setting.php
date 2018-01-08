<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'settings';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['obj_id', 'obj_type', 'key', 'value'];

    public function getsetting($key)
    {
        $setting = $this->where('key',$key)->first();
        return json_decode($setting->value);
    }   

}
