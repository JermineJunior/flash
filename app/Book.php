<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    
    protected $fillable = array('title','isbn','price','author_id');
    
    public function Author(){
        
        return $this->belongsTo(App\Author::class,'author_id');
        
    }
    
}
