<?php namespace PRG\Model\Site;

class Login
{
	/**
	 * [check description]
	 * @param  [type] $username [description]
	 * @param  [type] $password [description]
	 * @return [type]           [description]
	 */
	public function check($username, $password)
	{
		$this->user = $this->getDetailUser($username);

		if ($this->user['password'] == sha1($password))
		{
			
			return $this->setSession()->setSessionUser()->setSessionRole();
		
		} else {

			return false;
		
		}

	}

	/**
	 * [getDetailUser description]
	 * @param  [type] $username [description]
	 * @return [type]           [description]
	 */
	public function getDetailUser($username)
	{
		echo $query = "select * from _prg_users where username = '" . $username . "'";

		$exe = mysql_query($query);

		return mysql_fetch_array($exe);
	}

	/**
	 * [getDetailUser description]
	 * @param  [type] $username [description]
	 * @return [type]           [description]
	 */
	public function getDetailRole()
	{
		echo $query = "select * from _prg_users left join users_has_roles on _prg_users_username = _prg_users.username where username = '" . $this->user['username'] . "'";

		$exe = mysql_query($query);

		$roles = array();

		while($array=mysql_fetch_array($exe))
		{
			$roles[] = $array['_prg_roles_name'];
		}

		return $roles;
	}

	/**
	 * [setSession description]
	 * @param [type] $user [description]
	 */
	public function setSession()
	{
		$_SESSION['login'] = array('status' => true, 'time' => date('Y-m-d H:i:s'));

		return $this;
	}

	/**
	 * [setSessionUser description]
	 * @param [type] $user [description]
	 */
	public function setSessionUser()
	{
		$_SESSION['user'] = $this->user['username'];

		return $this;
	}

	/**
	 * [setSessionUser description]
	 * @param [type] $user [description]
	 */
	public function setSessionRole()
	{
		$_SESSION['role'] = $this->getDetailRole();

		return $this;
	}


}