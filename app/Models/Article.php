<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\User;

class Article extends Model
{
    protected $table='articles';
    protected $appends = ['urldest'];
    
    public function getUrldestAttribute(){
        $tag = Tag::find($this->tag);
        return url("article/{$tag->tag_name}/{$this->id}-{$this->title}");
    }

    public function author(){
        return $this->hasOne('App\User','id','user_id')->select('id','name','profile_photo');
    }
    public function tagDetails(){
        return $this->hasOne('App\Models\Tag','id','tag')->select('id','tag_name','tag_type','tag_image');
    }
}
