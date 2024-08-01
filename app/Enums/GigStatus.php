<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 */
final class GigStatus extends Enum
{
    const Pending = 'pending';

    const Accepted = 'accepted';

    const Cancelled = 'cancelled';

    const Finished = 'finished';
}
