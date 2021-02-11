<?php

require __DIR__ . "/vendor/autoload.php";

use App\Collections\Collection;

//$collect = (new Collection(
//    [
//        [
//            "product_name" => "A",
//            "price" => 180.00,
//            "status" => 1
//        ],
//        [
//            "product_name" => "B",
//            "price" => 185.00,
//            "status" => 0
//        ],
//        [
//            "product_name" => "C",
//            "price" => 170.00,
//            "status" => 1
//        ]
//    ]
//));
// version 2
//$collect = Collection::make([
//    [
//        "product_name" => "Hoodie",
//        "price" => 180.00,
//        "discount_percent" => 5,
//        "status" => 1
//    ],
//    [
//        "product_name" => "Polo Shirt",
//        "price" => 185.00,
//        "discount_percent" => 0,
//        "status" => 0
//    ],
//    [
//        "product_name" => "Jeans",
//        "price" => 170.00,
//        "discount_percent" => 8,
//        "status" => 1
//    ],
//    [
//        "product_name" => "Jacket",
//        "price" => 165.00,
//        "discount_percent" => 3,
//        "status" => 0
//    ],
//    [
//        "product_name" => "Punjabi",
//        "price" => 155.00,
//        "discount_percent" => 2,
//        "status" => 0
//    ],
//]);
//$collect->filter(function ($value, $key) {
//    return $value['status'] === 0;
//})->map(function ($value, $key) {
//    $data = $value;
//    $_discount = ($value['price'] * $value['discount_percent']) / 100;
//    $data['discounted_price'] = $_discount;
//    $data['sale_price'] = $value['price'] - $_discount;
//    return $data;
//})->pluck("sale_price","product_name")->toArray();
// version 2
//$collect = Collection::make([
//    [
//        "product_name" => "Hoodie",
//        "product_code" => "GS0031",
//        "price" => 180.00,
//        "discount_percent" => 5,
//        "status" => 1
//    ],
//    [
//        "product_name" => "Polo Shirt",
//        "product_code" => "GS0F34",
//        "price" => 185.00,
//        "discount_percent" => 0,
//        "status" => 0
//    ],
//    [
//        "product_name" => "Jeans",
//        "product_code" => "GS0H81",
//        "price" => 170.00,
//        "discount_percent" => 8,
//        "status" => 1
//    ],
//    [
//        "product_name" => "Jacket",
//        "product_code" => "GS0H45",
//        "price" => 165.00,
//        "discount_percent" => 3,
//        "status" => 0
//    ],
//    [
//        "product_name" => "Punjabi",
//        "product_code" => "GS0X23",
//        "price" => 155.00,
//        "discount_percent" => 2,
//        "status" => 0
//    ],
//])->filter(function ($value, $key) {
//    return $value['status'] === 0;
//})->map(function ($value, $key) {
//    $data = $value;
//    $_discount = ($value['price'] * $value['discount_percent']) / 100;
//    $data['discounted_price'] = $_discount;
//    $data['sale_price'] = $value['price'] - $_discount;
//    return $data;
//})->pluck("sale_price", "product_code")->toJson();
// version 3
$collect = Collection::make([
    [
        "product_name" => "Hoodie",
        "product_code" => "GS0031",
        "price" => 180.00,
        "discount_percent" => 5,
        "status" => 1
    ],
    [
        "product_name" => "Polo Shirt",
        "product_code" => "GS0F34",
        "price" => 185.00,
        "discount_percent" => 0,
        "status" => 0
    ],
    [
        "product_name" => "Jeans",
        "product_code" => "GS0H81",
        "price" => 170.00,
        "discount_percent" => 8,
        "status" => 1
    ],
    [
        "product_name" => "Jacket",
        "product_code" => "GS0H45",
        "price" => 165.00,
        "discount_percent" => 3,
        "status" => 0
    ],
    [
        "product_name" => "Punjabi",
        "product_code" => "GS0X23",
        "price" => 155.00,
        "discount_percent" => 2,
        "status" => 0
    ],
])->filter(function ($value, $key) {
    return $value['status'] === 0;
})->map(function ($value, $key) {
    $data = $value;
    $_discount = ($value['price'] * $value['discount_percent']) / 100;
    $data['discounted_price'] = $_discount;
    $data['sale_price'] = $value['price'] - $_discount;
    return $data;
})->pluck("sale_price", "product_code")->toJson();
echo "<pre>";
print_r($collect);