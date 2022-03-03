<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    protected $visible = [
        'id',
        'name',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'start_date' => 'date:d-m-Y',
        'end_date' => 'date:d-m-Y',
    ];

    public string $name;
    public $start_date;
    public $end_date;
}
