<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\Validation\Email;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Data;

/** @typescript */
class ContactData extends Data
{
    public function __construct(
        #[Required]
        #[StringType]
        public string $phone,

        #[Required]
        #[Email]
        public string $email,
    ) {}
}
