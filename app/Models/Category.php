<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $table = 'categories';

    protected $guarded = ['id'];
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }


    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }



   
    public function descendants()
    {
        return $this->children()->with('descendants');
    }

   
    public function ancestors()
    {
        return $this->parent()->with('ancestors');
    }
}
