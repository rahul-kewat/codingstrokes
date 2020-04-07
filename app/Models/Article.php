<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Article extends Model
{
    protected $table='articles';
    protected $appends = ['urldest'];
    
    public function getUrldestAttribute(){
        $tag = Tag::find($this->tag);
        return url("article/{$tag->tag_name}/{$this->id}-{$this->title}");
    }
}
