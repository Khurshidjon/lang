<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function hasChildren()
    {
        return $this->hasOne(Menu::class, 'parent_id', 'id');
    }
    public function submenu()
    {
        return $this->hasMany(Menu::class,  'parent_id');
    }
}
