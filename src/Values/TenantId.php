<?php declare(strict_types=1);

namespace Starburst\Tenants\Values;

interface TenantId
{
	public function toString(): string;
}
