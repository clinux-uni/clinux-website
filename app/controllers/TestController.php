<?php

class TestController extends BaseController
{
	public function getIndex()
	{
		return View::make('site.home'); 
	}

	public function mesajes() 
	{
		return View::make('site.msj');
	}

}
