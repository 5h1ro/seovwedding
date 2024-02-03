<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_couple',
        'id_member',
        'nickname_man',
        'fullname_man',
        'father_man',
        'mother_man',
        'child_man',
        'photo_man',
        'nickname_woman',
        'fullname_woman',
        'father_woman',
        'mother_woman',
        'child_woman',
        'photo_woman',
        'photo_couple',
        'countdown',
        'bank',
        'number_bank',
        'name_bank',
        'name_gift',
        'number',
        'address_gift',
        'slug',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'id_member');
    }

    public function schedule()
    {
        return $this->hasMany(Schedule::class, 'id_invitation');
    }

    public function ls()
    {
        return $this->hasMany(LoveStory::class, 'id_invitation');
    }

    public function photo()
    {
        return $this->hasMany(Photo::class, 'id_invitation');
    }

    public function greeting()
    {
        return $this->hasMany(Greeting::class, 'id_invitation');
    }
}
