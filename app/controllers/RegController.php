<?php

class RegController extends BaseController {

	public function getIndex()
    {
        return View::make('reg.login');
    }

    public function iniciar()
    {
    	$user = Input::get('user');
    	
		$redis = RedisL4::connection();
		$vals = $redis->get($user.':nombre');

		return View::make('reg.index')->with('name', $vals);
    }

}