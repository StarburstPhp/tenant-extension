<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Entities;

use Stefna\Config\Config;

interface TenantWithConfig extends Tenant
{
	public Config $config {
		get;
	}
}
