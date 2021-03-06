<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnewsRole extends Model
{
    protected $table = "enews_role";
    protected $primaryKey = "id";

    public function news(){
      return $this->hasOne("\App\Enews", 'id', 'news_id');
    }

    public function user(){
      return $this->hasOne("\App\User", 'id', 'user_id');
    }
}
