<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job{
    public static function all():array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Coder',
                'salary' => '$40,000'
            ],
            [
                'id' => 3,
                'title' => 'Tutor',
                'salary' => '$90,000'
            ]
        ];
    }
}
