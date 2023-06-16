<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // // Accessor
    // public function getUsernameAttribute($username)
    // {
    //     return ucwords($username); // $john->usernmae === 'johndoe'  ===> 'Johndoe'
    // }

    //Mutator
    public function setPasswordAttribute($password) // $user->password === 'something' ===> $2y$sadi8ASD8adnsddJUOsdfasdfasd89
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function posts() //$user->posts
    {
        return $this->hasMany(Post::class);
    }
}
