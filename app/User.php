<?php

namespace App;

use App\Events\NewUserEvent;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed username
 */
class User extends Authenticatable {

    use Notifiable;

    protected $dispatchesEvents
        = [
            'created' => NewUserEvent::class,
        ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected
        $fillable
        = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected
        $hidden
        = [
        'password',
        'remember_token',
        'id',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'owner_id');
    }

    public function isVerified(bool $bool)
    {
        switch (true)
        {
            case $bool == true :
                return (bool) $this->email_verified_at;
            break;

            case $bool == false :
                return ! $this->email_verified_at;
            break;

            default :
                return (bool) $this->email_verified_at;
        }
    }

    public function isNotVerified()
    {
        return ! $this->email_verified_at;
    }
}