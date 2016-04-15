<?php

require_once 'User.php';

class WebService
{
	const URL = "http://127.0.0.1/Euro2016/php";

	const SERVICE_LOGIN = "fake_login.php";

	const TYPE_GET = "GET";
	const TYPE_POST = "POST";
	const TYPE_PUT = "PUT";
	const TYPE_DELETE = "DELETE";

	public static function loginUser($username, $password)
	{
		$result = self::send(self::TYPE_POST, self::SERVICE_LOGIN, [
			'username' => $username,
			'password' => $password,
		]);

		if (is_numeric($result))
			return $result;

		return User::fromArray((array)$result);
	}

	private static function send($type, $service, $params = null)
	{
		$curl = curl_init();
		$url = self::URL.'/'.$service;

		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $type);
		curl_setopt($curl, CURLOPT_COOKIESESSION, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $params);

		$result = curl_exec($curl);
		$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

		curl_close($curl);

		if ($code != 200)
			return $code;

		return json_decode($result);
	}
}