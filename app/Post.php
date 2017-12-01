<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

// 默认=> posts表
class Post extends Model
{
//    protected $table = 'posts_2'; //如果需要特别声明表

      protected $fillable = ['title','content','user_id','category_id'];

    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->diffForHumans();
    }

}
