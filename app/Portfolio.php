<?php

namespace App;

use App\Portfolio;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'portfolios';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['project_name', 'project_slug', 'prject_content', 'prooject_url'];

    /*public function setProjectSlugAttribute($title)
    {
       $this->attributes['project_slug'] = $this->makeSlugFromTitle($title);
    }    

    protected function makeSlugFromTitle($title)
    {
        $slug = str_slug($title);
        
        $count = Portfolio::whereRaw("project_slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }*/

}
