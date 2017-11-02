<?php
/*******************************************************************************
 * Copyright (C) 2016 - 2-8-16 13:28
 * Nimmacloud B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 ******************************************************************************/

namespace Nimmacloud\Api\Types\Sales;

use Nimmacloud\Api\NimmacloudApi;

class Products extends NimmacloudApi{

	protected $path = 'sales/products';

	protected $allowed = [
		'add',
		'edit',
		'show',
		'list',
		'remove',
	];

}