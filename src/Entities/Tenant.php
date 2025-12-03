<?php declare(strict_types=1);

namespace Starburst\Tenants\Entities;

use Starburst\Tenants\Values\TenantId;

interface Tenant
{
	public TenantId $id {
		get;
	}
}
