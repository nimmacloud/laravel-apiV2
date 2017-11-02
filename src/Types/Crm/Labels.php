<?php
/**
 *
 * Copyright (C) 8/5/2016 (dd-mm-yyyy).
 * Nimmacloud B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 *
 */
namespace Nimmacloud\Api\Types\Crm;
use Nimmacloud\Api\NimmacloudApi;
class Labels extends NimmacloudApi{
	protected $path = 'crm/labels';
	protected $allowed = [
		'list',
	];
}
