<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UserData extends Data
{
    public function __construct(
        #[Required]
        #[StringType]
        public string $first_name,

        #[Required]
        #[StringType]
        public string $last_name,

        #[Required]
        public AddressData $address,

        #[Required]
        public ContactData $contact,

        #[DataCollectionOf(OrderData::class)]
        public ?DataCollection $orders,
    ) {}

    public static function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
        ];
    }

    public function fullName(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
