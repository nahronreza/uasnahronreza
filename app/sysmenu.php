<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sysmenu extends Model
{
    protected $primarykey = 'id';
    protected $table = 'sysmenus';
    public function categories()  {
        return $this->hasmany(sysmenu::class);
    }
    public function childrencategories()  {
        return $this->hasmany(sysmenu::class)->with('categories');
    }
    //
}
