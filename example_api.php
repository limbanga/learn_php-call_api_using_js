<?php
// Example api to call
$user = [
    [
        'name' => 'Adam',
        'age' => 31,
        'phoneNumber' => '0292149'
    ],
    [
        'name' => 'Ben',
        'age' => 40,
        'phoneNumber' => '0292149'
    ],
    [
        'name' => 'Chris',
        'age' => 21,
        'phoneNumber' => '0292149'
    ],
    [
        'name' => 'David',
        'age' => 25,
        'phoneNumber' => '0292149'
    ],
    [
        'name' => 'Eren',
        'age' => 24,
        'phoneNumber' => '0292149'
    ]
];

die(json_encode($user));