<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'message'
    ];
    // public function sender()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    // public function recipient()
    // {
    //     return $this->belongsTo(User::class, 'recipient_id');
    // }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}