<?php declare(strict_types=1);

namespace Starburst\Tenants\Events;

use Starburst\Tenants\Entities\Tenant;

final readonly class TenantLoaded
{
	public function __construct(
		public Tenant $tenant,
	) {}
}
