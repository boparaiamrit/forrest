<?php

namespace Omniphx\Forrest\Interfaces;

interface UserPasswordInterface extends AuthenticationInterface
{
	/**
	 * Begin authentication process.
	 *
	 * @param string $url
	 * @param null   $username
	 * @param null   $password
	 *
	 * @return mixed
	 */
	public function authenticate($url, $username = null, $password = null);
	
	/**
	 * Refresh authentication token.
	 *
	 * @param null $username
	 * @param null $password
	 *
	 * @return mixed $response
	 */
	public function refresh($username = null, $password = null);
}
