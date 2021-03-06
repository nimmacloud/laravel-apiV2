<?php
/*******************************************************************************
 * Copyright (C) 2016 - 1-8-16 13:59
 * Nimmacloud B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 ******************************************************************************/

namespace Nimmacloud\Api\Types\Finance;

use Nimmacloud\Api\NimmacloudApi;

class Invoices extends NimmacloudApi{

	protected $path = 'finance/invoices';

	protected $allowed = [
		'add',
		'edit',
		'show',
		'list',
		'remove',
	];

}
