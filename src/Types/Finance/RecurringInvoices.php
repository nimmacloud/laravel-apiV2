<?php
/*******************************************************************************
 * Copyright (C) 2016 - 1-27-2017 08:22
 * Nimmacloud B.V.  - All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 ******************************************************************************/

namespace Nimmacloud\Api\Types\Finance;

use Nimmacloud\Api\NimmacloudApi;

class RecurringInvoices extends NimmacloudApi{

	protected $path = 'finance/recurring-invoices';

	protected $allowed = [
		'add',
		'edit',
		'show',
		'list',
		'remove',
	];

}
