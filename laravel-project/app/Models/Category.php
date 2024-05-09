<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Category\Id;
use App\Domain\Category\Name;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function memo_categories()
    {
        return $this->hasMany(Memo_Category::class, 'category_id');
    }

    // id
    public function setIdAttribute($value)
    {
        $this->attributes['id'] = new Id($value);
    }
    public function getIdAttribute($value)
    {
        return $value instanceof Id ? $value->value() : $value;
    }
    // name
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = new Name($value);
    }
    public function getNameAttribute($value)
    {
        return $value instanceof Name ? $value->value() : $value;
    }
}
