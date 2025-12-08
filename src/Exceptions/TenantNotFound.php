<?php declare(strict_types=1);

namespace Starburst\Extensions\Tenants\Exceptions;

use Starburst\Extensions\Tenants\Values\TenantId;

final class TenantNotFound extends \RuntimeException
{
	public static function withId(TenantId $id): self
	{
		return new self(\sprintf('Tenant with id "%s" not found', $id->toString()));
	}
}
