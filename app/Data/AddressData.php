<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Data;

class AddressData extends Data
{
    public function __construct(
        #[Required]
        #[StringType]
        public string $street,

        #[Required]
        #[StringType]
        public string $city,

        #[Required]
        #[StringType]
        public string $state,

        #[Required]
        #[StringType]
        public string $postal_code,

        #[Required]
        #[StringType]
        public string $country,
    ) {
    }
}
