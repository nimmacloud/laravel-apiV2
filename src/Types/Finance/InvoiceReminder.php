<?php
/*******************************************************************************
 * Copyright (C) 2016 - 8-9-16 09:52
 * Nimmacloud B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 ******************************************************************************/
namespace Nimmacloud\Api\Types\Finance;
use Nimmacloud\Api\NimmacloudApi;
class InvoiceReminder extends NimmacloudApi{
	protected $path = 'finance/autoreminder';
	protected $allowed = [
		'edit'
	];
}
