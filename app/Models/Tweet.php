<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Tweet extends Model
{
    use HasFactory;


    protected $fillable=[
        'body',
        'user_id',
        'photo',
    ];
    /**
     * @var mixed
     */
    private $id;


    public function photo()
    {
        return Storage::url($this->photo);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function comments(){
        return $this->hasMany(Tweet::class);
    }
}
