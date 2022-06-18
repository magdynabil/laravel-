<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use SoftDeletes;
    protected $fillable = ['title','add_by','description','content','status'];
    protected $date=['delete_at'];
    public function add_by()
    {
        return $this->hasOne('App\User','id','add_by');
    }
}
