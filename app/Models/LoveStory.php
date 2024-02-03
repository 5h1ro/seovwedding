<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoveStory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ls',
        'story_ls',
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
