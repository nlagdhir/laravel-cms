<?php

namespace App\Widgets;

use App\Portfolio;
use Arrilot\Widgets\AbstractWidget;

class PortfolioHighlights extends AbstractWidget
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
        //

        $portfolios = Portfolio::take(4)->get();
        return view("widgets.portfolio_highlights", [
            'config' => $this->config,
            'portfolios' => $portfolios,
        ]);
    }
}