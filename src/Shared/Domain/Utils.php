<?php

declare(strict_types=1);

namespace SFL\Shared\Domain;

use DateTimeImmutable;
use DateTimeInterface;

final class Utils
{
    public static function dateToString(DateTimeInterface $date): string
    {
        return $date->format(DateTimeInterface::ATOM);
    }

    public static function stringToDate(string $date): DateTimeImmutable
    {
        return new DateTimeImmutable($date);
    }
}
