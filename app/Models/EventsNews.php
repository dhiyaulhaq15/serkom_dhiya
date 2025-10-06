<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsNews extends Model
{
    //
    use HasFactory;

    protected $table = 'event_news';
    protected $fillable = [
        'title', 'content', 'gambar', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
