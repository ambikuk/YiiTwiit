<?php

/*
 * Buhori Dermawan A.k.a Ambikuk
 * @Technolyze.net
 * ambikuk@gmail.com
 */
require_once 'lib/TwitterApp.php';
require_once 'lib/tmhOAuth.php';
require_once 'lib/BaseTwit.php';

class YiiTwit extends CApplicationComponent
{
	public $consumer_key; 
	public $consumer_secret;
	public $base;

	public function init()
	{
		$config = array(
			'consumer_key' => $this->consumer_key,
			'consumer_secret' => $this->consumer_secret
		);
		$this->base = new BaseTwit(new tmhOAuth($config));
		return parent::init();
	}

	public function auth()
	{
		return $this->base->auth();
	}

	public function getToken()
	{
		return $this->base->getAccessToken();
	}

	public function userData()
	{
		return $this->base->userdata;
	}
	public function getId(){
		return $this->base->userdata->id;
	}
}