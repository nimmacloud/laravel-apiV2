<?php
/*******************************************************************************
 * Copyright (C) 2016 - 8-9-16 09:52
 * Nimmacloud B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 ******************************************************************************/

namespace Nimmacloud\Api\Types\Finance;

use Nimmacloud\Api\NimmacloudApi;

class Send extends NimmacloudApi{

	protected $path = 'finance/send';

	protected $allowed = [
		'add',
		'show',
		'edit',
	];

}
