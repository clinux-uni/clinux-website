<?php
class HomeController extends BaseController {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.default';

    /**
     * WebSite Home (Index).
     */
    public function index()
    {
        $this->layout->content = View::make('site.home');
    }

}

