<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','gender','phone_no','phone_country_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD

    // This will fetch 5 published articles from the particular user
    public function articles(){
        return $this->hasMany('App\Models\Article','user_id')->limit(5);
    }

    // This will fetch 10 most used tags on which the user has published articles
    public function tagsWorked(){
        return $this->hasMany('App\Models\Article','user_id')
                    ->join('tag','tag','tag.id')
                    ->select('articles.id','user_id','articles.tag','tag.id','tag_name','tag_type')
                    ->distinct();
    }

=======
>>>>>>> 288c2cab575d4a8f6fc86da01d9f4063a88ac67e
}
