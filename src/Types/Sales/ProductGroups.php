<?php
/*******************************************************************************
 * Copyright (C) 2016 - 10-8-16 16:39
 * Mainpixel B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 ******************************************************************************/

namespace Nimmacloud\Api\Types\Sales;

use Nimmacloud\Api\NimmacloudApi;

class ProductGroups extends NimmacloudApi{

	protected $path = 'sales/product-groups';

	protected $allowed = [
		'add',
		'edit',
		'show',
		'list',
		'remove',
	];

}