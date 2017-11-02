<?php
/*******************************************************************************
 * Copyright (C) 2016 - 07-02-16 14:07
 * Mainpixel B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 ******************************************************************************/
 
namespace Nimmacloud\Api\Types\Planner;
use Nimmacloud\Api\NimmacloudApi;
class Calendars extends NimmacloudApi{
	protected $path = 'planner/calendars';
	protected $allowed = [
		'add',
		'edit',
		'show',
		'list',
	];
}
