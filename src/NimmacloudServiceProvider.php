<?php
/**
 * Mainpixel B.V.  - All Rights Reserved.
 * Written by Jasper Berkhout <jasper@mainpixel.io>.
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace Nimmacloud\Api;

use Illuminate\Support\ServiceProvider;

class NimmacloudServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool $defer
	 */
	protected $defer = false;
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// Configuration file
		$configPath = __DIR__ . '/Config/nimmacloud.php';
		$this->mergeConfigFrom($configPath, 'nimmacloud');
		$this->publishes([
			$configPath => config_path('nimmacloud.php'),
		]);
	}
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['Nimmacloud\Api'];
	}
	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('NcApi', function ($app) {
			return new Nimmacloud\Api\Types\Sales;
		});
	}
}