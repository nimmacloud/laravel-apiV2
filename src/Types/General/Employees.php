<?php
/*******************************************************************************
 * Copyright (C) 2016 - 10-8-16 19:44
 * Mainpixel B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 ******************************************************************************/

namespace Nimmacloud\Api\Types\General;

use Nimmacloud\Api\NimmacloudApi;

class Employees extends NimmacloudApi{

	protected $path = 'general/employees';

	protected $allowed = [
		'show',
		'list'
	];

}
