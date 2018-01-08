<?php

namespace App;

use App\Page;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['page_title', 'page_slug', 'page_content', 'page_short_content', 'page_thumbnail', 'parent_id', 'user_id'];

    
    /*public function setPageSlugAttribute($page_slug)
    {
       $this->attributes['page_slug'] = $this->makeSlugFromTitle($page_slug);
    }    

    protected function makeSlugFromTitle($slug)
    {
        $count = Page::whereRaw("page_slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        
        return $count ? "{$slug}-{$count}" : $slug;
    }*/

}
