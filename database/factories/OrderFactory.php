<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Order::class, function (Faker $faker) {
    // 随机取一个用户
    $user = \App\Models\User::query()->inRandomOrder()->first();
    // 随机取一个该用户的地址
    $address = $user->addresses()->inRandomOrder()->first();
    // 10% 的概率把订单标记为退款
    $refund = random_int(0, 10) < 1;
    // 随机生成发货状态
    $ship = $faker->randomElement(array_keys(\App\Models\Order::$shipStatusMap));
    // 优惠券
    $coupon = null;
    // 30% 概率该订单使用了优惠券
    if (random_int(0, 10) < 3) {
        // 为了避免出现逻辑错误，我们只选择没有最低金额限制的优惠券
        $coupon = \App\Models\CouponCode::query()->where('min_amount', 0)->inRandomOrder()->first();
        // 增加优惠券的使用量
        $coupon->changeUsed();
    }

    return [
        'address'   => [
            'address'       => $address->full_address,
            'zip'       => $address->zip,
            'contact_name'       => $address->contact_name,
            'contact_phone'       => $address->contact_phone,
        ],
        'total_amount' => 0,
        'remark' => $faker->sentence,
        'paid_at' => $faker->dateTimeBetween('-30 days'), // 30天前到现在任意时间点
        'payment_method' => $faker->randomElement(['wechat', 'alipay']),
        'payment_no' => $faker->uuid,
        'refund_status' => $refund ? \App\Models\Order::REFUND_STATUS_SUCCESS : \App\Models\Order::REFUND_STATUS_PENDING,
        'refund_no' => $refund ? \App\Models\Order::getAvailableRefundNo() : NULL,
        'closed' => FALSE,
        'reviewed' => random_int(0, 10) > 2,
        'ship_status' => $ship,
        'ship_data' => $ship === \App\Models\Order::SHIP_STATUS_PENDING ? NULL : [
            'express_company' => $faker->company,
            'express_no' => $faker->uuid,
        ],
        'extra' => $refund ? ['refund_reason' => $faker->sentence] : [],
        'user_id' => $user->id,
        'coupon_code_id' => $coupon ? $coupon->id : NULL,
    ];
});
