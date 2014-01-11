<?php

class TestController extends BaseController
{
	public function getIndex()
	{
		return View::make('site.home'); 
	}
}
