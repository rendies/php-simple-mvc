<?php

class View
{

	/**
	 * [$view description]
	 * @var [type]
	 */
	private static $view = '';

	/**
	 * [$page description]
	 * @var [type]
	 */
	private static $page = '';

	/**
	 * [$variable description]
	 * @var array
	 */
	private static $variable = array();

	/**
	 * [setView description]
	 * @param [type] $view      [description]
	 * @param [type] $page      [description]
	 * @param string $extension [description]
	 */
	public static function setView($view, $page, $extension = 'php')
	{
		self::$view = $view;

		self::$page = $page.'.'.$extension;

		return new static;
	}

	/**
	 * [setVariable description]
	 * @param [type] $key   [description]
	 * @param [type] $value [description]
	 */
	public static function setVariable($key, $value)
	{
		self::$variable[$key]=$value;

		return new static;
	}

	/**
	 * [render description]
	 * @return [type] [description]
	 */
	public static function render()
	{
		if(!self::is_file_exist(__DIR__.DIRECTORY_SEPARATOR.self::$view.DIRECTORY_SEPARATOR.self::$page)) return false;
		
		else {

			ob_start();

			foreach (self::$variable as $key => $value) $$key = $value;

			require_once __DIR__.DIRECTORY_SEPARATOR.self::$view.DIRECTORY_SEPARATOR.self::$page;

			$myvar = ob_get_contents();

			ob_end_clean();

			return $myvar;

		}

	}

	/**
	 * [is_file_exist description]
	 * @param  [type]  $filename [description]
	 * @return boolean           [description]
	 */
	public static function is_file_exist($filename)
	{
		return file_exists($filename);
	}
}

?>