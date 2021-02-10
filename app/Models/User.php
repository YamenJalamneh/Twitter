<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{


    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo',
        'background_photo',
        'bio',
        'year',
        'month',
        'day',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
        'created_at',
        'updated_at',

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function backgroundPhoto(){

        if (!$this->background_photo){
            return $this->Defaultbackground();
        }
        else{
            return Storage::url($this->background_photo);
        }

    }

    public function Defaultbackground(){
        return '13.jpg';
    }

    public function profilePhoto()
    {
        if (!$this->profile_photo) {
            return 'default-user-image.png';
        }
        else{
            return Storage::url($this->profile_photo);
        }

    }

    protected function defaultProfilePhotoUrl()
    {
        return 'default-user-image.png';
    }

    public function tweets(){
        return $this->hasMany(Tweet::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function notifications(){
        return $this->hasMany(Notification::class);
    }

    public function follows(){
        return $this->hasMany(Follow::class);
    }

    public function comments(){
        return $this->hasMany(Tweet::class);
    }
}
