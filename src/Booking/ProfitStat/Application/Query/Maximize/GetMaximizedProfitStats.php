<?php

declare(strict_types=1);

namespace SFL\Booking\ProfitStat\Application\Query\Maximize;

use SFL\Booking\ProfitStat\Application\Query\Dto\BookingDto;
use SFL\Shared\Domain\Bus\Query\Query;

final class GetMaximizedProfitStats implements Query
{
    /** @param list<BookingDto> $bookingsList */
    public function __construct(public array $bookingsList)
    {
    }
}
