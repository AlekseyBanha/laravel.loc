<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//   protected $table='posts';
//    protected $table = 'my_posts';
//    protected $primaryKey = 'post_id';
//    public $incrementing = false;
//    protected $keyType = 'string';
//    public $timestamps = false;

public function  rubric(){
    return $this->belongsTo(Rubric::class);
}

}
