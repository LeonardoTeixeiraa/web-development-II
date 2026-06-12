<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array',
        'date' => 'date',
    ];

    protected $dates = ['date'];

    protected $fillable = [
        'title',
        'date',
        'description',
        'city',
        'private',
        'items',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
