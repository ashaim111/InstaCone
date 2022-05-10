<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/cULqUgHnmfbweOcgm3xUJsWm83ikh3Mv47U0fLDA.webp';
        return '/storage/'. $imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
