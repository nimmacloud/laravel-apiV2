<?php
/*******************************************************************************
 * Copyright (C) 2016 - 14-1-17 11:01
 * Nimmacloud B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 ******************************************************************************/
namespace Nimmacloud\Api\Types\Sales;
use Nimmacloud\Api\NimmacloudApi;
class ProductSearch extends NimmacloudApi{
	protected $path = 'sales/product-search';
	protected $allowed = [
		'add',
	];
}
