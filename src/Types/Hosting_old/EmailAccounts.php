<?php
/**
 *
 * Copyright (C) 8/5/2016 (dd-mm-yyyy).
 * Mainpixel B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 *
 */

namespace Mainpixel\Api\Types\Hosting;

use Mainpixel\Api\MainpixelApi;

class EmailAccounts extends MainpixelApi{

	protected $path = 'hosting/mail-accounts';

	protected $allowed = [
		'add',
		'edit',
		'show',
		'list',
		'remove',
	];

}