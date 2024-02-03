<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_schedule',
        'date_schedule',
        'address_schedule',
        'location_schedule',
        'link_location_schedule',
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
