<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Mobile()
 * @method static static Fixed()
 */
final class BizType extends Enum
{
    const Mobile = 'mobile';

    const Fixed = 'fixed';
}
