<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Data;

/** @typescript */
class OrderItemData extends Data
{
    public function __construct(
        #[Required]
        public string $product_name,

        #[Required]
        public int $quantity,

        #[Required]
        public float $unit_price,

        public ?string $sku,
    ) {}

    public function totalPrice(): float
    {
        return $this->quantity * $this->unit_price;
    }
}
