<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'body',
        'user_id',
        'tweet_id'
    ];

//    protected $casts = [
//        'created_at' => 'g:i A · M d, Y',
//
//    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tweet(){
        return $this->belongsTo(Tweet::class);
    }
}
