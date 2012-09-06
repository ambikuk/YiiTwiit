<?php

/*
 * Buhori Dermawan A.k.a Ambikuk
 * @Technolyze.net
 * ambikuk@gmail.com
 */

class BaseTwit extends TwitterApp
{

	public function __construct(tmhOAuth $tmhOAuth)
	{

		// call the parent class' constructor
		parent::__construct($tmhOAuth);
	}

}