<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Events;

use Starburst\Extensions\Tenants\Entities\Tenant;

final readonly class TenantUnLoaded
{
	public function __construct(
		public Tenant $tenant,
	) {}
}
