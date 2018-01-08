<?php

namespace App\Widgets;

use App\Post;
use Arrilot\Widgets\AbstractWidget;

class RecentPosts extends AbstractWidget
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
        $posts = Post::take(3)->get();
        return view("widgets.recent_posts", [
            'config' => $this->config,
            'posts' => $posts,
        ]);
    }
}