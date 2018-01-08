<?php

namespace App\Widgets;

use App\Post;
use Arrilot\Widgets\AbstractWidget;

class SidebarRecentPost extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $recentPosts = Post::latest()->take(3)->get();

        return view("widgets.sidebar_recent_post", [
            'config' => $this->config,
            'recentPosts' => $recentPosts,
        ]);
    }
}