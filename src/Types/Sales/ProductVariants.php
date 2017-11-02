<?php
/*******************************************************************************
 * Copyright (C) 2016 - 2-8-16 13:28
 * Mainpixel B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 ******************************************************************************/

namespace Nimmacloud\Api\Types\Sales;

use Nimmacloud\Api\NimmacloudApi;

class ProductVariants extends NimmacloudApi{

	protected $path = 'sales/product-variants';

	protected $allowed = [
		'add',
		'edit',
		'show',
		'list',
		'remove',
	];

}
