<?php

namespace TCG\Voyager\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu_items';

    protected $fillable = [
        'menu_id', 'title', 'url', 'target', 'icon_class', 'parent_id', 'color', 'order',
    ];

    public function mainMenu(){
       return $this->hasOne("TCG\Voyager\Models\Menu", 'id', 'menu_id');
    }
}
