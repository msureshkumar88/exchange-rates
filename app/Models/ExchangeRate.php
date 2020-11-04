<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    use UsesUuid;

    protected $dates = [
        'time_placed',
    ];

}
