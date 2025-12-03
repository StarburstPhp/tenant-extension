<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Values;

interface TenantId
{
	public function equals(mixed $other): bool;

	public function toString(): string;
}
