<?php
namespace App\Http\Controllers;

use App\Data\UserData;
use App\Data\AddressData;
use App\Data\ContactData;
use App\Data\OrderData;
use App\Data\OrderItemData;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function show(): JsonResponse
    {
        // Create example data
        $userData = new UserData(
            first_name: 'John',
            last_name: 'Doe',
            address: new AddressData(
                street: '123 Main St',
                city: 'New York',
                state: 'NY',
                postal_code: '10001',
                country: 'USA'
            ),
            contact: new ContactData(
                phone: '+1-555-555-5555',
                email: 'john.doe@example.com'
            ),
            orders: OrderData::collection([
                new OrderData(
                    order_number: 'ORD-001',
                    total_amount: 99.99,
                    status: 'completed',
                    items: OrderItemData::collection([
                        new OrderItemData(
                            product_name: 'Product 1',
                            quantity: 2,
                            unit_price: 49.99,
                            sku: 'SKU001'
                        )
                    ]),
                    notes: 'Express delivery'
                )
            ])
        );

        return response()->json($userData);
    }
}
