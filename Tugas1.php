<?php

namespace App\Models;

class Tugas1 
{
    private  static $Tugas1 = [
        [
        "title" => "Tugas1",
        "slug" => "tugas1",
        "body" => "Selamat datang di Tugas1"
        ]
];

public static function all()
{
    return self ::$Tugas1;
}
}