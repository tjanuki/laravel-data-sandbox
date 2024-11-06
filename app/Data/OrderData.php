<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

/** @typescript */
class OrderData extends Data
{
    public function __construct(
        #[Required]
        public string $order_number,

        #[Required]
        public float $total_amount,

        #[Required]
        public string $status,

        #[DataCollectionOf(OrderItemData::class)]
        public ?DataCollection $items,

        public ?string $notes,
    ) {}
}
