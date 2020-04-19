<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
<<<<<<< HEAD
use App\User;
=======
>>>>>>> 288c2cab575d4a8f6fc86da01d9f4063a88ac67e

class Article extends Model
{
    protected $table='articles';
    protected $appends = ['urldest'];
    
    public function getUrldestAttribute(){
        $tag = Tag::find($this->tag);
        return url("article/{$tag->tag_name}/{$this->id}-{$this->title}");
    }
<<<<<<< HEAD

    public function author(){
        return $this->hasOne('App\User','id','user_id')->select('id','name','profile_photo');
    }
    public function tagDetails(){
        return $this->hasOne('App\Models\Tag','id','tag')->select('id','tag_name','tag_type','tag_image');
    }
=======
>>>>>>> 288c2cab575d4a8f6fc86da01d9f4063a88ac67e
}
