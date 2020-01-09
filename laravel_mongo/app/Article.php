<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Article extends Eloquent
{
    //
    protected $collection = 'articles';
    protected $fillable = ['firstname','lastname'];
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
