<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Entities;

use Starburst\Extensions\Tenants\Values\TenantId;

interface Tenant
{
	public TenantId $id {
		get;
	}
}
