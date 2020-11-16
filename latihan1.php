<?php

$mahasiswa = [
    [
        "nama" => "Arfah Maulidya",
        "nrp" => "183040019",
        "email" => "arfahmaulidya@gmail.com"
    ],
    [
        "nama" => "Donghae",
        "nrp" => "183040000",
        "email" => "donghae@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;
