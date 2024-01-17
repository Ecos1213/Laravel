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
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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
        'password' => 'hashed',
    ];

    public function posts() { // este metodo se coloca en plural por que un usuario tiene muchas publicaciones
        return $this->hasMany(Post::class); // esta es la manera de decirle a laravel que se va a llenar muchos datos osea una relacion de uno a muchos esto hace referencia que un usuario tiene muchas posts, pero para que esto funcione necsitamos decirle a laravel que se va a llenar varios datos tanto title slug y body y por eso modificamos post ya que en post tenemos que decirle que se llenara varios datos
    }
}
