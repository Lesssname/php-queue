<?php
declare(strict_types=1);

namespace LessQueue\Parameter;

use LessValueObject\Number\Exception\MaxOutBounds;
use LessValueObject\Number\Exception\MinOutBounds;
use LessValueObject\Number\Exception\PrecisionOutBounds;
use LessValueObject\Number\Int\AbstractIntValueObject;

/**
 * @psalm-immutable
 */
final class Priority extends AbstractIntValueObject
{
    public static function normal(): self
    {
        return new self(0);
    }

    public static function low(): self
    {
        return new self(2);
    }

    public static function medium(): self
    {
        return new self(3);
    }

    public static function high(): self
    {
        return new self(4);
    }

    /**
     * @psalm-pure
     */
    public static function getMinValue(): int
    {
        return 0;
    }

    /**
     * @psalm-pure
     */
    public static function getMaxValue(): int
    {
        return 5;
    }
}