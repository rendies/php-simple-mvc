<?php

include ROOT_PATH.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR.'site'.DIRECTORY_SEPARATOR.'Login.php';
use \PRG\Model\Site\Login;

class Site
{

	/**
	 * Default Controller
	 * @return html [Index View]
	 */
	public function index()
	{
		if ((isset($_SESSION['login']) && $_SESSION['login']['status'] == true)) {
		
			return View::setView('site', 'index')->setVariable('variable','Dashboard')->render();
		
		} else {

			header('location:index.php?r=site/login');

		}
	}

	public function login()
	{
		if ((isset($_POST['username']) && isset($_POST['password'])))
		{

			$model = new Login;

			$result = $model->check(htmlspecialchars(addslashes($_POST['username'])), htmlspecialchars(addslashes($_POST['password'])));

			return ($result !== false)? View::setView('site', 'index')->setVariable('variable','Dashboard')->render():View::setView('site', 'login')->setVariable('variable','Login')->setVariable('action','index.php?r=site/login')->render();

		} elseif ((isset($_SESSION['login']) && $_SESSION['login']['status'] == true)) {

			return View::setView('site', 'index')->setVariable('variable','Dashboard')->render();

		} else {

			return $view = View::setView('site', 'login')->setVariable('variable','Login')->setVariable('action','index.php?r=site/login')->render();

		}
	}

	public function logout()
	{
		
		session_destroy();

		header('location:index.php?r=site/index');

	}
}
