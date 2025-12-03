<?php declare(strict_types=1);

namespace Starburst\Tenants\Repositories;

use Starburst\Tenants\Entities\Tenant;
use Starburst\Tenants\Values\TenantId;
use Stefna\Collection\ListCollection;

interface TenantRepository
{
	/**
	 * @return ListCollection<Tenant>
	 */
	public function findAll(): ListCollection;

	public function findById(TenantId $id): Tenant;
}
