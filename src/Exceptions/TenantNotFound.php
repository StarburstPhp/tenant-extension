<?php declare(strict_types=1);

namespace Starburst\Tenants\Exceptions;

use Starburst\Tenants\Values\TenantId;

final class TenantNotFound extends \RuntimeException
{
	public static function withId(TenantId $id): self
	{
		return new self(\sprintf('Tenant with id "%s" not found', $id->toString()));
	}
}
