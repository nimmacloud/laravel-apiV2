<?php
/**
 *
 * Copyright (C) 25/10/2017 (dd-mm-yyyy).
 * Nimmacloud B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 *
 */
namespace Nimmacloud\Api\Types\Crm;
use Nimmacloud\Api\NimmacloudApi;
class Auth extends NimmacloudApi{
	protected $path = 'crm/auth';
	protected $allowed = [
		'edit',
		'show',
	];
}
