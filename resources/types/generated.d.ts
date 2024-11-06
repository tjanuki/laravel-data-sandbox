declare namespace App.Data {
export type AddressData = {
street: string;
city: string;
state: string;
postal_code: string;
country: string;
};
export type ContactData = {
phone: string;
email: string;
};
export type OrderData = {
order_number: string;
total_amount: number;
status: string;
items: any | null;
notes: string | null;
};
export type OrderItemData = {
product_name: string;
quantity: number;
unit_price: number;
sku: string | null;
};
export type UserData = {
first_name: string;
last_name: string;
address: App.Data.AddressData;
contact: App.Data.ContactData;
orders: any | null;
optional: string | null;
};
}
