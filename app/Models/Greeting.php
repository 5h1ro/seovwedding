<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest',
        'greetings',
        'attendance',
        'id_invitation',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class, 'id_invitation');
    }
}
