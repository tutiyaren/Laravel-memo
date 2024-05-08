<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo_Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'memo_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function memo()
    {
        return $this->belongsTo(Memo::class, 'memo_id');
    }
}
