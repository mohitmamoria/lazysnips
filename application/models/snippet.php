<?php

class Snippet extends Eloquent 
{
	public static $rules = array(
		'snippet' => 'required'
	);

	public static function valid($input) {
		$v = Validator::make($input, static::$rules);

		return $v->passes()?true:false;
	}
}