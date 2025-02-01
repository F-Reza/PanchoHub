<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodayNews extends Model
{
    public function user()
    {
        return $this->belongsTo(Admin::class, 'user_id');
    }
}
