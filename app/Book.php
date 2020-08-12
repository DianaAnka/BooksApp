<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'isbn', 'book_title', 'book_author','year','publisher','image_s_url','image_m_url','image_l_url'
    ];

    public function Users()
    {
        return $this->belongsToMany(User::class,'users_books');
    }

}
