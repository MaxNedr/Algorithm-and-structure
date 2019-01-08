<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08.01.2019
 * Time: 12:42
 */
$prices = [
    [
        'price' => 21999,
        'shop_name' => 'Shop 1',
        'shop_link' => 'http://'
    ],
    [
        'price' => 21550,
        'shop_name' => 'Shop 2',
        'shop_link' => 'http://'
    ],
    [
        'price' => 21950,
        'shop_name' => 'Shop 2',
        'shop_link' => 'http://'
    ],
    [
        'price' => 21350,
        'shop_name' => 'Shop 2',
        'shop_link' => 'http://'
    ],
    [
        'price' => 21050,
        'shop_name' => 'Shop 2',
        'shop_link' => 'http://'
    ],
    [
        'price' => 21470,
        'shop_name' => 'Shop 2',
        'shop_link' => 'http://'
    ],
    [
        'price' => 21340,
        'shop_name' => 'Shop 2',
        'shop_link' => 'http://'
    ],
    [
        'price' => 24350,
        'shop_name' => 'Shop 2',
        'shop_link' => 'http://'
    ]
];
print_r(ShellSort($prices));

function ShellSort($elements) {
    $sum=0;
    $k=0;
    $length = count($elements);
    $gap[0] = (int) ($length / 2);

    while($gap[$k] > 1) {
        $k++;
        $gap[$k]= (int)($gap[$k-1] / 2);
        $sum++;
    }

    for($i = 0; $i <= $k; $i++){
        $step = $gap[$i];

        for($j = $step; $j < $length; $j++) {
            $temp = $elements[$j];
            $p = $j - $step;

            while($p >= 0 && $temp['price'] < $elements[$p]['price']) {
                $elements[$p + $step] = $elements[$p];
                $p = $p - $step;
                $sum++;
            }

            $elements[$p + $step] = $temp;
        }
    }

    echo $sum;
    echo '<br>';
    return $elements;
}
