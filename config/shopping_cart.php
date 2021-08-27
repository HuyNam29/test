<?php

use App\Services\ShoppingCartService\PayOnlinePaymentService;
use App\Services\ShoppingCartService\PayTransferService;

return [
    'progress'  => [
        '-1' => 'Đặt hàng thành công',
        '1'  => 'Đã tiếp nhận',
        '2'  => 'Bàn giao vận chuyển',
        '3'  => 'Thành công',
    ],
    'drive_pay' => [
        'transfer' => [
            'process' => PayTransferService::class
        ],
        'online'   => [
            'process' => PayOnlinePaymentService::class
        ]
    ]
];
